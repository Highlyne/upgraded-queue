<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;

class OliverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barberInfo = array("Oliver", "<a id='w13R1AF9RptoZwLVt8YE0g' class='gie-single' href='http://www.gettyimages.com/detail/82796066' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'w13R1AF9RptoZwLVt8YE0g',sig:'spIwmlN1WwohFB0PFmR24OxB8aOpBV0ckvQYZaBjc-A=',w:'431px',h:'398px',items:'82796066',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>");
        // This function will return the booking option
        $appts = Jobs::where('barber', 'Oliver')->get();
        return view('book.res_form', compact('appts', 'barberInfo'));
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
