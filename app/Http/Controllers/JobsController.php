<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;


class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // This function will return the booking option
        return view('book.index');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function show_avail()
    {
        // This function will return the booking option
        $appts = Jobs::where('barber', 'Oliver')->get();
        return view('book.res_form', compact('appts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $jobs = App\Jobs::forceCreate([
            'id' => '1',
            'book_date' => '2018-03-01',
            'time' => '11:00:00',
            'name' => 'Peter Parker',
            'barber' => 'Oliver',
            'confirmed' => '0'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
