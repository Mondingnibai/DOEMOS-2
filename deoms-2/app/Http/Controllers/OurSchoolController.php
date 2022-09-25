<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurSchoolController extends Controller
{
    public function index() {
        return view('public.our_school');
    }
}
