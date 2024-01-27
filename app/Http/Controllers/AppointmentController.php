<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;


class AppointmentController extends Controller
{
    public function index(){

        $appointment = Appointment::get();
        return view('admin.appointment.appointmentTable',compact('appointment'));
    }

    public function create(){

        // return view('admin.appointment.addAppointment');
        // return view('appointment');

    }


 public function storeAppointment(Request $request){

    $messages= [
        'guardianName'=>'please enter your the guardian name',
        'guardianEmail'=>'please enter your email',
        'childName'=>'please enter your child name',
        'childAge'=>'please enter the child age,should be number' ,
        'message'=>'should be text',

    ];
    // $messages = $this->messages();
    $data=$request->validate([
        'guardianName'=>'required|string|max:50',
        'guardianEmail'=>'required|string|max:50',
        'childName'=>'required|string|max:50',
        'childAge'=>'required|string',
        'message'=>'required|string',

    ],$messages);

       Appointment::create($data);
        return redirect('admin/appointment');
    }

    public function show(string $id)
    {
        $appointment=Appointment::findOrFail($id);
        return view('admin/appointment/showAppointment',compact('appointment'));
    }

    public function destroy(string $id)
    {
        Appointment::where('id',$id)->delete();
        return redirect('admin/appointmentTable');
    }



}
