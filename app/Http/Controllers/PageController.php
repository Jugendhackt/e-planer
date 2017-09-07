<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Support\Facades\DB;

class PageController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /* -------------- Index -------------- */

    public function getIndex() {

        return view('pages.dashboard');

    }

    /* -------------- Admin -------------- */

    public function getAdmin() {

        $options = [
            'user' => [
                'total' => DB::table('users')->count()
            ],
            'homework' => [
                'total' => DB::table('homework')->count()
            ],
            'courses' => [
                'total' => DB::table('courses')->count()
            ]
        ];

        return view('pages.admin')->withOptions($options);

    }

    public function getAdminUsers() {

        return view('pages.adminusers');

    }

    public function getAdminHomework() {

        return view('pages.adminhomework');

    }

    public function getAdminCourses() {

        $courses = Course::orderBy('name', 'DESC')->get();

        return view('pages.admincourses')->withCourses($courses);

    }

}
