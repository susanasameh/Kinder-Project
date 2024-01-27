<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Common;
use App\Models\ClassRoom;
use App\Models\Teacher;

class ClassRoomController extends Controller
{

    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $classRoom = ClassRoom::get();
        return view('admin/classRoom/classRoomTable',compact('classRoom'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher = Teacher::get();
        return view('admin/classRoom/addClassRoom',compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = $this->message();
        $data=$request->validate([
            'classesName'=>'required|string|max:50',
            'price'=>'required|string|max:50',
            'classesAge'=>'required|string|max:50',
            'time'=>'required|string|max:50',
            'capacity'=>'required|string|max:50',
            'image'=> 'required|mimes:png,jpg,jpeg,webp|max:2048',
            'teacher_id' => 'required|exists:teachers,id',
        ],$message);

        //use method from traits called uploadFile
        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image'] = $fileName;
        $data['published']=isset($request->published);
        ClassRoom::create($data);
        return redirect('admin/classRoomTable');
        // return dd($data);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $classRoom = ClassRoom::findOrFail($id);
        return view('admin/classRoom/showClassRoom',compact('classRoom'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::get();
        $classRoom = ClassRoom::findOrFail($id);
        return view('admin/classRoom/editClassRoom',compact('classRoom','teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return dd($request);

        $message = $this->message();
        $data=$request->validate([
            'classesName'=>'required|string|max:50',
            'price'=>'required|string|max:50',
            'classesAge'=>'required|string|max:50',
            'time'=>'required|string|max:50',
            'capacity'=>'required|string|max:50',
            'image'=>'sometimes|mimes:png,jpg,jpeg,webp|max:2048',
            'teacher_id'=>'required',


        ],$message);
        // return dd($data);

        if($request->hasFile('image')){
            //use method from traits called uploadFile
        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image'] = $fileName;
        //remove old image from server
        unlink("assets/images/" . $request->oldImage);
        }
        $data['published']=isset($request->published);
        ClassRoom::where('id',$id)->update($data);
        return redirect('admin/classRoomTable');
    }

    /**
     * Remove the specified resource from storage.
     *///soft delete
    public function destroy(string $id)
    {
        ClassRoom::where('id',$id)->delete();
        return redirect('admin/classRoomTable');

    }


    public function trashed()
    {
        $teacher = Teacher::get();
        $classRoom = ClassRoom::onlyTrashed()->get();
        return view('admin/classRoom/trashedClassRoom',compact('classRoom','teacher'));
    }

    public function forceDelete(string $id)
    {
        ClassRoom::where('id',$id)->forceDelete();
        return redirect('admin/classRoomTable');
    }

    public function restore(string $id)
    {
        ClassRoom::where('id',$id)->restore();
        return redirect('admin/classRoomTable');
    }

    public function message(){
        return [

            'classesName.required'=>'please enter the name',
            'price.required'=>'please enter the price',
            'classesAge.required'=>'please enter the ages of childe in the classRoom',
            'time.required'=>'please enter the time',
            'capacity.required'=>'please enter the capacity of the classRoom',
            'image.required'=> 'Please be sure to select an image',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',



        ];
    }
}
