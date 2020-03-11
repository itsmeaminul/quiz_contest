<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function set_question()
    {
        return view('admin.set_question');
    }

    public function set_quiz()
    {
        return view('admin.set_quiz');
    }

    public function all_question()
    {
        return view('admin.all_questions');
    }

    public function total_participents()
    {
        return view('admin.total_participents');
    }

    public function winners()
    {
        return view('admin.winners');
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
        //
    }

    public function store_quiz(Request $request)
    {
        $data=array();
        $data['quiz_id'] = $request->quiz_id;
        $data['start_time'] = $request->start_time;
        $data['end_time'] = $request->end_time;


        DB::table('quiz_table')->insert($data);
        Session::put('exception','Quiz added successfully!!');
        return Redirect::to('/set_quiz');
    }

    public function store_question(Request $request)
    {
        $data=array();
        $data['qq_id'] = $request->qq_id;
        $data['question'] = $request->question;
        $data['option'] = implode(",", $request->option);



        DB::table('quiz_question_table')->insert($data);
        Session::put('exception','Question added successfully!!');
        return Redirect::to('/set_question');
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
