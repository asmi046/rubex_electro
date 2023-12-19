<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZayavkaController extends Controller
{
    public function index() {
        return view('zayavka');
    }
}
