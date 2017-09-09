<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
  if (!Auth::guest()) {
    return ["user" => Auth::user(), "roles" => Auth::user()->roles()->get()];
  } else {
    abort(401, "Unauthenticated.");
  }
});
