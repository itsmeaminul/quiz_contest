<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('questions')
                    ->get();

        $manage = view('welcome')
                         ->with('all_data',$data);

        return view('layouts.layout')
                 ->with('layouts.layout',$manage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data=array();
        // $data['name'] = $request->name;
        // $data['email'] = $request->email;
        // $data['contact'] = $request->contact;
        // $data['answer'] = implode("," , $request['answer']);

        
        


        // DB::table('participents')->insert($data);
        // Session::put('exception','Thank You for Participate!!');
        // return Redirect::to('/');


        $participent = new Participent;

        $participent->name = $request->name;
        $participent->email = $request->email;
        $participent->contact = $request->contact;
        $participent->answer = implode(',', $request->answer);

        $participent->save();

        Session::put('exception','Thank You for Participate!!');
        return Redirect::to('/');
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
