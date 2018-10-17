<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    

    public function index()
    {
        $title= "Latest Posts";
        return view('pages.index')->with('title', $title);

    }
    public function about()
    {
        $title= "About Us";
        return view('pages.about')->with('title', $title);
    }
}
