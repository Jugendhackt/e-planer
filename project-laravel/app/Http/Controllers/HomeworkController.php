<?php

namespace App\Http\Controllers;

use App\Homework;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeworkController extends Controller
{

    public function __construct()
    {

        $this->middleware('permission:read-homework|create-homework|update-homework|delete-homework')->only('index');
        $this->middleware('permission:create-homework')->only('create');
        $this->middleware('permission:create-homework')->only('store');
        $this->middleware('permission:update-homework')->only('edit');
        $this->middleware('permission:update-homework')->only('update');
        $this->middleware('permission:delete-homework')->only('delete');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $homework = Auth::user()->homework()->get();

        return $homework;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      dd($request);
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

        $homework = Homework::find($id);

        return Response::json($homework);

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

        Homework::find($id)->delete();

        return Response::json(['success' => true]);

    }
}
