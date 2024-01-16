<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){

        $contact = Contact::get();
        return view('admin.contact.contactTable',compact('contact'));
    }

    public function create(){

        return view('admin.contact.addContact');
    }


 public function store(Request $request){

    $messages= [
        'name'=>'please enter your name',
        'email'=>'please enter your email',
        'subject'=>'please enter subject',
        'message'=>'should be text',
    ];

    $data=$request->validate([
        'name'=>'required|string|max:50',
        'email'=>'required|string|max:50',
        'subject'=>'required|string|max:50',
        'message'=>'required|string',

    ],$messages);

       contact::create($data);
        return redirect('contactTable');
    }

    public function show(string $id)
    {
        $contact=contact::findOrFail($id);
        return view('admin/contact/showContact',compact('contact'));
    }

    public function destroy(string $id)
    {
        contact::where('id',$id)->delete();
        return redirect('contactTable');
    }


    public function contactMail()
    {
        //
    }



}
