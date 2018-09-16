<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to my PHP laravel framework demostration(reference variable)';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About my task';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['Web Design','Programming', 'Project Management','Business Analysis','Metoring','Automation architecture','Business Strategies']
        );

        return view('pages.services')->with($data);
    }
}
