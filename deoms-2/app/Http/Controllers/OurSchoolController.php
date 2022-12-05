<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurSchoolController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index() {
        return view('public.our_school');
    }


    public function ourTeacher() {
        return view('public.our_teacher');
    }

    public function history() {
        return view('public.history');
    }
}
