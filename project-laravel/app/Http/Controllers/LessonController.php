<?php

namespace App\Http\Controllers;

use App\Homework;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LessonController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth:api');

        $this->middleware('permission:read-lesson|create-lesson|update-lesson|delete-lesson')->only('index');
        $this->middleware('permission:create-lesson')->only('create');
        $this->middleware('permission:create-lesson')->only('store');
        $this->middleware('permission:update-lesson')->only('edit');
        $this->middleware('permission:update-lesson')->only('update');
        $this->middleware('permission:delete-lesson')->only('delete');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $lessons = $request->user()->lessons();

        return Response::json($lessons);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // Internal routing

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();

        $homework = Homework::create($input);

        return Response::json([ 'success' => true ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $lesson = Lesson::find($id);

        return Response::json($lesson);

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

        Lesson::find($id)->delete();

        return Response::json([ 'success' => true ]);

    }
}
