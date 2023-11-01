<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    
    public function index(){
        return view('website.index');
    }

    public function about(){
        return view('website.about');
    }

    public function entrepreneurs(){
        return view('website.entrepreneurs');
    }

    public function companies(){
        return view('website.companies');
    }

    public function blog(){
        return view('website.blog');
    }

    public function contact(){
        return view('website.contact');
    }

    public function privacy(){
        return view('website.privacy');
    }


}
