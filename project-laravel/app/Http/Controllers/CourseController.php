<?php

namespace App\Http\Controllers;

use App\Course;
use App\Role;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');

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

        $data = Course::orderBy('id','DESC')->paginate(5);

        return view('courses.index', compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles = Role::pluck('display_name', 'id');
        return view('courses.create', compact('roles'));

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
