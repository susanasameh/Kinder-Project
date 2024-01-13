<?php

use App\Http\Controllers\PageController;
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

// Route::fallback(function(){
//     return redirect('/404');
// })->name('404');

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function(){
    return view('404');
})->name('404');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

Route::get('testimonial',[PageController::class,'testimonial'])->name('testimonial');

Route::get('team',[PageController::class,'team'])->name('team');

Route::get('pages',function(){
        return view('pages');
    })->name('pages');



