<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pages_controller extends Controller
{
    public function get_index() {
        return view('pages/index');
    }
    public function get_about() {
        return view('pages/about');
    }
    public function get_event() {
        return view('pages/events');
    }
    public function get_volunteer() {
        return view('pages/volunteer');
    }
}





























//
