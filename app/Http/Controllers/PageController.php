<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs;

class PageController extends Controller
{
    //

    Public function home() {
        $jobs = Jobs::all();
        return view('welcome',compact('jobs'));
        // return $jobs;
    }
    public function index()
    {
        // This function will return the booking option
        return view('book.index');
    }
    public function contact()
    {
        // This function will return the booking option
        return view('email');
    }
}
