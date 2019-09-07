<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Wagin Tails!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function homepage(){
        $title = 'Wagin Tails';
        return view('pages.homepage')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function contact(){
        
        $title = 'Contact Us';
        return view('pages.contact')->with('title', $title);
    }
}
