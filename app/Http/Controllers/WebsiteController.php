<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Suscriber;
use Illuminate\Http\Request;
use App\Mail\WelcomeSuscriber;
use Illuminate\Support\Facades\Mail;

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

    public function suscribe(Request $request){
        $request->validate([
            'email' => 'required|email|unique:suscribers,email'
        ], [
            'email.required' => 'El campo email es obligatorio',
            'email.email' => 'El campo email debe ser un email válido',
            'email.unique' => 'El email ya se encuentra registrado'
        ]);

        $suscriber = new Suscriber();
        $suscriber->email = $request->email;
        $suscriber->save();

        Mail::to($request->email)->send(new WelcomeSuscriber($request->email));

        return redirect()->route('success');
    }

    public function success(){
        return view('website.success-suscribe');
    }
}
