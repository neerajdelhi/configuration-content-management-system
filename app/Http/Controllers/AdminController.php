<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {
        Log::info('AdminController@index called');
        Log::info('User: ' . auth()->user()->email);
        Log::info('User roles: ' . json_encode(auth()->user()->roles->pluck('name')));
        
        try {
            return view('admin.dashboard');
        } catch (\Exception $e) {
            Log::error('Error rendering admin dashboard: ' . $e->getMessage());
            return response()->view('errors.500', [], 500);
        }
    }

    public function cmsIndex()
    {
        return view('admin.cms');
    }

    public function partnersIndex()
    {
        return view('admin.partners');
    }
}
