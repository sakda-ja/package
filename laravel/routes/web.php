<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController; //import Controller

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

Route::get('status', function () {

    $blogs=[

            [
                'title' => "บทความ1",
                'content' => "เนื้อหาที่ 1",
                'status' => false
            ],


            [
                'title' => "บทความ2",
                'content' => "เนื้อหาที่ 2",
                'status' => true
            ],

            [
                'title' => "บทความ3",
                'content' => "เนื้อหาที่ 3",
                'status' => true
            ],

            [
                'title' => "บทความ4",
                'content' => "เนื้อหาที่ 4",
                'status' => false
            ],

            [
                'title' => "บทความ5",
                'content' => "เนื้อหาที่ 5",
                'status' => true
            ]


            ];

    return view('status' , compact ('blogs'));

})->name('status');


Route::get('blog',[AdminController::class,'index'])->name('blog');
// Route::get('status',[AdminController::class,'index'])->name('status');
