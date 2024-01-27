<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class ContactController extends Controller
{
    public function index(){

        $contact = Contact::paginate(2);
        return view('admin.contact.contactTable',compact('contact'));
    }

    public function create(){

        // return view('admin.contact.addContact');
    }


 public function store(Request $request){

    // $messages= [
    //     'name'=>'please enter your name',
    //     'email'=>'please enter your email',
    //     'subject'=>'please enter subject',
    //     'message'=>'should be text',
    // ];

    // $data=$request->validate([
    //     'name'=>'required|string|max:50',
    //     'email'=>'required|string|max:50',
    //     'subject'=>'required|string|max:50',
    //     'message'=>'required|string',

    // ],$messages);

    //    contact::create($data);
    //     return redirect('contactTable');
    }

    public function show(string $id)
    {
        Contact::where('id', $id)->update(['unreadMessage' => 1]);
        $contact=contact::findOrFail($id);
        return view('admin/contact/showContact',compact('contact'));
    }

    public function destroy(string $id)
    {
        contact::where('id',$id)->delete();
        return redirect('admin/contactTable');
    }


    public function contactMail(Request $request)
    {

        $messages= [
        'name'=>'please enter your name',
        'email'=>'please enter your email',
        'subject'=>'please enter subject',
        'message'=>'should be text',
    ];

        $data = $request->validate([
            'name'=>'required|string|max:50',
            'email'=> 'required|string',
            'subject' => 'required',
            'message' => 'required',

           ],$messages);

           Contact::create($data);
        // return dd($request);
       Mail::to('susana@example.com')->send(new ContactMail($data));

       return back()->with('success','Email sent successfully');
    }

    public function unreadMessage(){

        $contact = Contact::where('unreadMessage', 0)->get();

        return view('admin/contact/unreadMessage', compact('contact'));
    }

   



}
