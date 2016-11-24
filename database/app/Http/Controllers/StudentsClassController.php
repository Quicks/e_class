<?php

namespace App\Http\Controllers;

use App\Students_class;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\CssSelector\Tests\Parser\ReaderTest;

class StudentsClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public  function  did( )
     {
         dd('rrrrrrrrr');
     }
    public function index()
    {
        $StudentsClass = Students_class::all();
        //dd($StudentsClass);
        return view('StudentsClass.index', ['StudentsClass' => $StudentsClass]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('StudentsClass.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 //dd( $request->except(['_token']));
//        dd($request->name);
//
//    $StudentsClass = new Students_class();
//        $StudentsClass = $request->except(['_token']);
////         $StudentsClass->name =$request->name;
////        $StudentsClass->school =$request->school;
////        $StudentsClass->teacher =$request->teacher;
//       $StudentsClass->save();
////      //  Session::flash('message', 'Successfully created Class!');
        return Redirect::to('StudentsClassController.did');

      //  return view('StudentsClass.index', ['StudentsClass' => $StudentsClass]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
