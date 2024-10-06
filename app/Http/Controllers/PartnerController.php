<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PartnerController extends Controller
{
    public function index()
    {
        
        $partners = User::whereHas('roles', function($query) {
            $query->where('name', 'partner');
        })->get();

        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('partners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $partner = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $partner->roles()->attach(Role::where('name', 'partner')->first());

        return redirect()->route('partners.index')->with('success', 'Partner created successfully.');
    }

    public function edit(User $partner)
    {
        return view('partners.edit', compact('partner'));
    }

    public function update(Request $request, User $partner)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $partner->id,
        ]);

        $partner->update($request->only('name', 'email'));

        return redirect()->route('partners.index')->with('success', 'Partner updated successfully.');
    }

    public function destroy(User $partner)
    {
        $partner->delete();

        return redirect()->route('partners.index')->with('success', 'Partner deleted successfully.');
    }
}
