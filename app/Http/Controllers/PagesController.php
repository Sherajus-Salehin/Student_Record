<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='Welcome To Student record';
       return view('pages.index',compact('title'));
    }
    public function about(){
        return view('pages.about');
     }
     public function services(){
         $data=array(
             'title'=> 'services',
             'services'=>['Courses taken','gpa','cgpa','teacher comments','payment info']
         );
        return view('pages.services')->with($data);
     }
}


