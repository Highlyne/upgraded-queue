<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;

class ThresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barberInfo = array("Theresa", "<a id='7wfQaU-1S6VpsgQ4mg7sNg' class='gie-single' href='http://www.gettyimages.com/detail/724228177' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'7wfQaU-1S6VpsgQ4mg7sNg',sig:'909FKwKhYAoKo70fZkgEsr3NWekRQnyycpky32A6LkU=',w:'431px',h:'398px',items:'724228177',caption: false ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>");
        // This function will return the booking option
        $appts = Jobs::where('barber', 'Theresa')->get();
        return view('book.res_form', compact('appts', 'barberInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $jobs = Jobs::forceCreate([
            'book_date' => $request->res_day,
            'time' => $request->res_time,
            'name' => $request->name,
            'barber' => 'Theresa',
            'confirmed' => '0'
            ]);
        return back();

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
