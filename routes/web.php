<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassRoomController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

// Route::fallback(function(){
//     return view('404');
// })->name('404');



Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');

// Route::get('index',function(){
//     return view('index');
// })->name('index');


// Route::get('aboutUs',function(){
//     return view('aboutUs');
// })->name('aboutUs');

// Route::get('classes',function(){
//     return view('classes');
// })->name('classes');

// Route::prefix('pages')->name('pages/')

// ->group(function(){

//     Route::get('schoolFacilities',function(){
//         return view('schoolFacilities');
//     })->name('schoolFacilities');


//     Route::get('popularTeachers',function(){
//         return view('popularTeachers');
//     })->name('popularTeachers');

//     Route::get('becomeATeachers',function(){
//         return view('becomeATeachers');
//     })->name('becomeATeachers');

//     Route::get('makeAppointment',function(){
//         return view('makeAppointment');
//     })->name('makeAppointment');

//     Route::get('testimonial',function(){
//         return view('testimonial');
//     })->name('testimonial');

//     // Route::get('404',function(){
//     //     return view('404');
//     // })->name('404');

//     Route::get('',function(){
//         return view('testimonial');
//     })->name('testimonial');


// });

Route::fallback(PageController::class)->name('404');

Route::get('index',[PageController::class,'index'])->name('index');

Route::get('about',[PageController::class,'about'])->name('about');

Route::get('appointment',[PageController::class,'appointment'])->name('appointment');

Route::get('callToAction',[PageController::class,'callToAction'])->name('callToAction');

Route::get('classes',[PageController::class,'classes'])->name('classes');

Route::get('contact',[PageController::class,'contact'])->name('contact');

Route::get('facility',[PageController::class,'facility'])->name('facility');

// Route::get('testimonial',[PageController::class,'testimonial'])->name('testimonial');

Route::get('team',[PageController::class,'team'])->name('team');

//testimonial routes

Route::get('testimonial',[TestimonialController::class,'testimonial'])->middleware('verified')->name('testimonial');

// Route::get('testimonialTable',[TestimonialController::class,'index'])->middleware('verified')->name('testimonialTable');

// Route::get('addTestimonial',[TestimonialController::class,'create'])->name('addTestimonial');

// Route::post('storeTestimonial',[TestimonialController::class,'store'])->name('storeTestimonial');

// Route::get('editTestimonial/{id}',[TestimonialController::class,'edit'])->name('editTestimonial');

// Route::put('updateTestimonial/{id}',[TestimonialController::class,'update'])->name('updateTestimonial');

// Route::get('showTestimonial/{id}',[TestimonialController::class,'show'])->name('showTestimonial');

// Route::get('deleteTestimonial/{id}',[TestimonialController::class,'destroy'])->name('deleteTestimonial');

// Route::get('trashedTestimonial',[TestimonialController::class,'trashed'])->name('trashedTestimonial');

// Route::get('forceDeleteTestimonial/{id}',[TestimonialController::class,'forceDelete'])->name('forceDeleteTestimonial');

// Route::get('restoreTestimonial/{id}',[TestimonialController::class,'restore'])->name('restoreTestimonial');


//appointment routes

// Route::get('appointmentTable',[AppointmentController::class,'index'])->middleware('verified')->name('appointmentTable');

// // Route::get('addAppointment',[AppointmentController::class,'create'])->name('addAppointment');

// Route::post('storeAppointment',[AppointmentController::class,'storeAppointment'])->name('storeAppointment');

// Route::get('showAppointment/{id}',[AppointmentController::class,'show'])->name('showAppointment');

// Route::get('deleteAppointment/{id}',[AppointmentController::class,'destroy'])->name('deleteAppointment');


// //contact routes

// Route::get('contactTable',[ContactController::class,'index'])->middleware('verified')->name('contactTable');

// // Route::get('addContact',[ContactController::class,'create'])->name('addContact');

// // Route::post('storeContact',[ContactController::class,'store'])->name('storeContact');

// Route::get('showContact/{id}',[ContactController::class,'show'])->name('showContact');

// Route::get('deleteContact/{id}',[ContactController::class,'destroy'])->name('deleteContact');

// Route::post('contactMail',[ContactController::class,'contactMail'])->name('contactMail');


// //teacher routes

// Route::get('teacherTable',[TeacherController::class,'index'])->middleware('verified')->name('teacherTable');

// Route::get('addTeacher',[TeacherController::class,'create'])->name('addTeacher');

// Route::post('storeTeacher',[TeacherController::class,'store'])->name('storeTeacher');

// Route::get('editTeacher/{id}',[TeacherController::class,'edit'])->name('editTeacher');

// Route::put('updateTeacher/{id}',[TeacherController::class,'update'])->name('updateTeacher');

// Route::get('showTeacher/{id}',[TeacherController::class,'show'])->name('showTeacher');

// Route::get('deleteTeacher/{id}',[TeacherController::class,'destroy'])->name('deleteTeacher');

// Route::get('trashedTeacher',[TeacherController::class,'trashed'])->name('trashedTeacher');

// Route::get('forceDeleteTeacher/{id}',[TeacherController::class,'forceDelete'])->name('forceDeleteTeacher');

// Route::get('restoreTeacher/{id}',[TeacherController::class,'restore'])->name('restoreTeacher');


// //teacher routes

// Route::get('classRoomTable',[ClassRoomController::class,'index'])->middleware('verified')->name('classRoomTable');

// Route::get('addClassRoom',[ClassRoomController::class,'create'])->name('addClassRoom');

// Route::post('storeClassRoom',[ClassRoomController::class,'store'])->name('storeClassRoom');

// Route::get('editClassRoom/{id}',[ClassRoomController::class,'edit'])->name('editClassRoom');

// Route::put('updateClassRoom/{id}',[ClassRoomController::class,'update'])->name('updateClassRoom');

// Route::get('showClassRoom/{id}',[ClassRoomController::class,'show'])->name('showClassRoom');

// Route::get('deleteClassRoom/{id}',[ClassRoomController::class,'destroy'])->name('deleteClassRoom');

// Route::get('trashedClassRoom',[ClassRoomController::class,'trashed'])->name('trashedClassRoom');

// Route::get('forceDeleteClassRoom/{id}',[ClassRoomController::class,'forceDelete'])->name('forceDeleteClassRoom');

// Route::get('restoreClassRoom/{id}',[ClassRoomController::class,'restore'])->name('restoreClassRoom');






