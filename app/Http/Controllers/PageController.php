<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class PageController extends Controller
{

    public function __invoke(){
        return view('404');
    }

    public function index(){
        $testimonial = Testimonial::where('published', true)->latest()->take(3)->get();
        return view('index',compact('testimonial'));
    }



    public function about(){
        return view('about');
    }

    public function appointment(){
        return view('appointment');
    }

    public function contact(){
        return view('contact');

    }

    public function classes(){
        return view('classes');

    }

    public function facility(){
        return view('facility');

    }


 public function team(){
        return view('team');

    }

    // public function testimonial(){

    //     $testimonial = Testimonial::get();
    //     return view('testimonial',compact('testimonial'));

    // }

    public function callToAction(){
        return view('call-to-action');

    }




}
