<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Display a listing of the pages
    public function index()
    {
        $pages = Page::all();
        return view('pages.index', compact('pages'));
    }

    // Show the form for creating a new page
    public function create()
    {
        return view('pages.create');
    }

    // Store a newly created page in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages',
        ]);

        Page::create($request->only('title', 'slug'));

        return redirect()->route('pages.index')->with('success', 'Page created successfully.');
    }
}
