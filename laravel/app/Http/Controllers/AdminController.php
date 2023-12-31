<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//import Class ฐานข้อมูล

class AdminController extends Controller
{
    //
    public function index ()
    {

        $blogs=DB::table('blogs')->get();

        return view ('blog' , compact('blogs'));
    }



    public function changes($id)
    {
        // dd($id);
        $blog = DB::table('blogs')->where('id' , $id)->first();

        $data = [
            'status' => !$blog->status
        ];

        $blog = DB::table('blogs')->where('id' , $id)->update($data);
        return redirect ('/blog');
    }
}

