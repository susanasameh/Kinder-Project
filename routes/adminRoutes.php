<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassRoomController;
use Illuminate\Support\Facades\Route;

Route::get('testRoute',function(){
    return "hello here";
});

// Route::group(['middleware' => ['verified']], function () {});

Route::prefix('admin')->middleware('verified')

  ->group(function(){

    //appointment routes

Route::get('appointmentTable',[AppointmentController::class,'index'])->name('appointmentTable');

Route::post('storeAppointment',[AppointmentController::class,'storeAppointment'])->name('storeAppointment');

Route::get('showAppointment/{id}',[AppointmentController::class,'show'])->name('showAppointment');

Route::get('deleteAppointment/{id}',[AppointmentController::class,'destroy'])->name('deleteAppointment');


//testimonial routes
Route::get('testimonialTable',[TestimonialController::class,'index'])->name('testimonialTable');

Route::get('addTestimonial',[TestimonialController::class,'create'])->name('addTestimonial');

Route::post('storeTestimonial',[TestimonialController::class,'store'])->name('storeTestimonial');

Route::get('editTestimonial/{id}',[TestimonialController::class,'edit'])->name('editTestimonial');

Route::put('updateTestimonial/{id}',[TestimonialController::class,'update'])->name('updateTestimonial');

Route::get('showTestimonial/{id}',[TestimonialController::class,'show'])->name('showTestimonial');

Route::get('deleteTestimonial/{id}',[TestimonialController::class,'destroy'])->name('deleteTestimonial');

Route::get('trashedTestimonial',[TestimonialController::class,'trashed'])->name('trashedTestimonial');

Route::get('forceDeleteTestimonial/{id}',[TestimonialController::class,'forceDelete'])->name('forceDeleteTestimonial');

Route::get('restoreTestimonial/{id}',[TestimonialController::class,'restore'])->name('restoreTestimonial');


//contact routes

Route::get('contactTable',[ContactController::class,'index'])->name('contactTable');

Route::get('showContact/{id}',[ContactController::class,'show'])->name('showContact');

Route::get('deleteContact/{id}',[ContactController::class,'destroy'])->name('deleteContact');

Route::post('contactMail',[ContactController::class,'contactMail'])->name('contactMail');

Route::get('unreadMessage',[ContactController::class,'unreadMessage'])->name('unreadMessage');




//teacher routes

Route::get('teacherTable',[TeacherController::class,'index'])->middleware('verified')->name('teacherTable');

Route::get('addTeacher',[TeacherController::class,'create'])->name('addTeacher');

Route::post('storeTeacher',[TeacherController::class,'store'])->name('storeTeacher');

Route::get('editTeacher/{id}',[TeacherController::class,'edit'])->name('editTeacher');

Route::put('updateTeacher/{id}',[TeacherController::class,'update'])->name('updateTeacher');

Route::get('showTeacher/{id}',[TeacherController::class,'show'])->name('showTeacher');

Route::get('deleteTeacher/{id}',[TeacherController::class,'destroy'])->name('deleteTeacher');

Route::get('trashedTeacher',[TeacherController::class,'trashed'])->name('trashedTeacher');

Route::get('forceDeleteTeacher/{id}',[TeacherController::class,'forceDelete'])->name('forceDeleteTeacher');

Route::get('restoreTeacher/{id}',[TeacherController::class,'restore'])->name('restoreTeacher');


//classRoom routes

Route::get('classRoomTable',[ClassRoomController::class,'index'])->middleware('verified')->name('classRoomTable');

Route::get('addClassRoom',[ClassRoomController::class,'create'])->name('addClassRoom');

Route::post('storeClassRoom',[ClassRoomController::class,'store'])->name('storeClassRoom');

Route::get('editClassRoom/{id}',[ClassRoomController::class,'edit'])->name('editClassRoom');

Route::put('updateClassRoom/{id}',[ClassRoomController::class,'update'])->name('updateClassRoom');

Route::get('showClassRoom/{id}',[ClassRoomController::class,'show'])->name('showClassRoom');

Route::get('deleteClassRoom/{id}',[ClassRoomController::class,'destroy'])->name('deleteClassRoom');

Route::get('trashedClassRoom',[ClassRoomController::class,'trashed'])->name('trashedClassRoom');

Route::get('forceDeleteClassRoom/{id}',[ClassRoomController::class,'forceDelete'])->name('forceDeleteClassRoom');

Route::get('restoreClassRoom/{id}',[ClassRoomController::class,'restore'])->name('restoreClassRoom');



  })->name('admin');
