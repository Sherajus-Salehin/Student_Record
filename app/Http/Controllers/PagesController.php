<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(auth()->user()->roll=="teacher"){
            $data=array(
                'title'=> 'services',
                'services'=>['Academics','students','payment info']
            );
        }else{
         $data=array(
             'title'=> 'services',
             'services'=>['courses','add_payment']
         );
        }
        return view('pages.services')->with($data);
     }

}


