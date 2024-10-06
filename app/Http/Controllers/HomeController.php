<?php

namespace App\Http\Controllers;

use App\Models\Page;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all pages to display in the menu
        $pages = Page::all();
        return view('home', compact('pages'));
    }
}
