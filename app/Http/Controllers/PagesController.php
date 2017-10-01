<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
      return view ('pages.index');
    }

    public function show() {
      return view('pages.show');
    }
}
