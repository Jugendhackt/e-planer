<?php

namespace App\Http\Controllers;

use App\Course;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CourseController extends Controller
{

    public function __construct()
    {

        $this->middleware('permission:read-course|create-course|update-course|delete-course')->only('index');
        $this->middleware('permission:create-course')->only('create');
        $this->middleware('permission:create-course')->only('store');
        $this->middleware('permission:update-course')->only('edit');
        $this->middleware('permission:update-course')->only('update');
        $this->middleware('permission:delete-course')->only('delete');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $courses = $request->user()->courses();

        return Response::json($courses);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



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

        $course = Course::create($input);

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

        $course = Course::find($id);

        return Response::json($course);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        User::find($id)->delete();

        return Response::json(['success' => true]);

    }
}
