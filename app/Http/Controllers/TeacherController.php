<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Traits\Common;
use App\Models\ClassRoom;

class TeacherController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = Teacher::get();
        return view('admin/teacher/teacherTable',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teacher.addTeacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = $this->message();
        $data=$request->validate([
            'TeachersName'=>'required|string|max:50',
            'designation'=>'required',
            'facebook'=>'required|email',
            'twitter'=>'required|email',
            'instagram'=>'required|email',
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:2048',

        ],$message);


            $fileName = $this->uploadFile($request->image, 'assets/images');
            $data['image'] = $fileName;
            $data['published']=isset($request->published);
            Teacher::create($data);
            return redirect('admin/teacherTable');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin/teacher/showTeacher',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin/teacher/editTeacher',compact('teacher'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = $this->message();
        $data=$request->validate([
            'TeachersName'=>'required|string|max:50',
            'designation'=>'required',
            'facebook'=>'required|email',
            'twitter'=>'required|email',
            'instagram'=>'required|email',
            'image' => 'sometimes|mimes:png,jpg,jpeg,webp|max:2048',

        ],$message);

        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/images');
            $data['image'] = $fileName;
            unlink("assets/images/" . $request->oldImage);
                }

            $data['published']=isset($request->published);
            Teacher::where('id',$id)->update($data);
            return redirect('admin/teacherTable');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $found = ClassRoom::where('teacher_id', $id)->count();
        if($found){
            // return redirect('teachers');
            return back()->with('error',"This teacher is linked to a class. It can't be deleted");
        }else{
            Teacher::where('id', $id)->delete();    // softdelete
            return redirect('admin/teacherTable');

    }
}

    public function trashed()
    {


         $teacher=Teacher::onlyTrashed()->get();
         return view('admin/teacher/trashedTeacher',compact('teacher'));

    }


    public function forceDelete(string $id)
    {
        Teacher::where('id',$id)->forceDelete();
        return redirect('admin/teacherTable');
    }

    public function restore(string $id)
    {
        Teacher::where('id',$id)->restore();
        return redirect('admin/teacherTable');
    }

    public function message(){
        return [
            'TeachersName.required'=>'please enter the name',
            'designation.required'=>'please enter the designation',
            'facebook.required'=>'enter the face book account',
            'twitter.required'=>'enter the twitter account',
            'instagram.required'=>'enter the instagram account',
            'image.required'=> 'Please be sure to select an image',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',

        ];
    }
}
