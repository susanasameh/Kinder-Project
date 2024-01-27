<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Teacher;
use App\Models\ClassRoom;




class PageController extends Controller
{

    public function __invoke(){
        return view('404');
    }

    public function index(){
        $testimonial = Testimonial::where('published', true)->latest()->take(3)->get();
        $appointment = Appointment::get();
        $teacher = Teacher::where('published', true)->latest()->take(3)->get();
        $classRoom = ClassRoom::where('published', 1)->orderBy('id', 'desc')->take(9)->get();
        return view('index',compact('testimonial','teacher' , 'classRoom'));
    }



    public function about(){
        $teacher = Teacher::where('published', 1)->orderBy('id', 'desc')->take(3)->get();
        return view("about", compact('teacher'));
    }

    public function appointment(){
        $appointment = Appointment::get();
        return view('appointment');
    }

    public function contact(){
        $contact = Contact::get();
        return view('contact');

    }

    public function classes(){
        $testimonial = Testimonial::get();
        $teacher = Teacher::get();
        $classRoom = ClassRoom::where('published', 1)->orderBy('id', 'desc')->get();
        return view("classes", compact('testimonial', 'classRoom'));


    }

    public function facility(){
        return view('facility');

    }


 public function team(){

        $teacher = Teacher::get();
        return view('team',compact('teacher'));

    }

    // public function testimonial(){

    //     $testimonial = Testimonial::get();
    //     return view('testimonial',compact('testimonial'));

    // }

    public function callToAction(){
        return view('call-to-action');

    }




}
