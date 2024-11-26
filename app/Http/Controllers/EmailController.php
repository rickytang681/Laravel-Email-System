<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class EmailController extends Controller
{
    public function index()
    {
        //$sessionUsername = Session::get('person.username');
        //$emails = DB::table($sessionUsername)->get();

        return view('inbox');
    }
}
