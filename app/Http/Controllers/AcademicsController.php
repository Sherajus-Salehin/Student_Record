<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academics;
use App\User;

class AcademicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Academics=Academics::orderBy('id','desc')->paginate(20);
       return view('Academics.index')->with('Academics',$Academics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Academics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'name'=>'required',
            'uid'=>'required',
            'course'=>'required',
            'gpa'=>'required',
            'semester'=>'required',
            'comment'=>'required'
        ]);
        $academics=new Academics;
        $academics->name = $request->input('name');
        $academics->uid = $request->input('uid');
        $academics->course = $request->input('course');
        $academics->gpa = $request->input('gpa');
        $academics->semester = $request->input('semester');
        $academics->comment = $request->input('comment');
        $academics->save();

        return redirect('/Academics');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info= Academics::find($id);
        return view('Academics.show')->with('info',$info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {if(auth()->user()->roll!=="teacher")
        $info= Academics::find($id);
        return view('Academics.edit')->with('info',$info);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request,[

            'name'=>'required',
            'uid'=>'required',
            'course'=>'required',
            'gpa'=>'required',
            'semester'=>'required',
            'comment'=>'required'
        ]);
        $academics=Academics::find($id);
        $academics->name = $request->input('name');
        $academics->uid = $request->input('uid');
        $academics->course = $request->input('course');
        $academics->gpa = $request->input('gpa');
        $academics->semester = $request->input('semester');
        $academics->comment = $request->input('comment');
        $academics->save();

        return redirect('/Academics');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Academics::find($id);
        if(auth()->user()->roll!=="teacher"){
            return redirect('/Academics');
        }
        $post = Academics::find($id);
        $post->delete();
        return redirect('/Academics');
    }
}
