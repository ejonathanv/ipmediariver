<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        $posts = Post::latest()->paginate(9);
        return view('website.blog', compact('posts'));
    }

    public function article(Post $post){
        return view('website.article', compact('post'));
    }

    public function contact(){
        return view('website.contact');
    }

    public function terms(){
        return view('website.terms');
    }

    public function privacy(){
        return view('website.privacy');
    }

    public function customApps(){
        return view('website.customApps');
    }

    public function software(){
        return view('website.software');
    }

    public function webPages(){
        return view('website.webPages');
    }

    public function consultingServices(){
        return view('website.consultingServices');
    }

    public function maintenanceAndSupport(){
        return view('website.maintenanceAndSupport');
    }
}
