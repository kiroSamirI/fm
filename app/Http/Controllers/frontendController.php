<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function about()
    {
        return view('frontend.about');
    }

    public function lectuers()
    {
        return view('frontend.lectures');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function witness()
    {
        return view('frontend.witness');
    }

    public function books()
    {
        return view('frontend.books');
    }
    
    public function gallery()
    {
        return view('frontend.gallery');
    }
    public function masses()
    {
        return view('frontend.masses');
    }

    public function galleryCategory()
    {
        return view('frontend.galleryCategory');
    }
}
