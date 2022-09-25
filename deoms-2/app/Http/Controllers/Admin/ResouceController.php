<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResouceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.forms');
    }

     /**
     * Show the application announcement.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newForm()
    {
        return view('admin.forms.newForm');
    }
}
