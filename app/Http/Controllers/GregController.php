<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;

class GregController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $todayDate = date("Y-m-d"); 
        $barberInfo = array("Greg", "<a id='nt7IUQnQSL5YPa6-qQhcQA' class='gie-single' href='http://www.gettyimages.com/detail/573106855' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'nt7IUQnQSL5YPa6-qQhcQA',sig:'QHX6gni8hgpghZXOEP6uvXyRpfIEe3F1EEJor0QYcck=',w:'431px',h:'398px',items:'573106855',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>");
        // This function will return the booking option
        $appts = Jobs::where('barber', 'Greg')->orderBy('time')->get();
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
        $nRows = Jobs::where('barber', 'Greg')->where('book_date', $request->res_day)->where('time', $request->res_time)->get()->count();

        if ($nRows != 0 ) {
                echo '<script language="javascript">';
                echo 'alert("Whoops! This time is already taken.  Please select another time or date.")';
                echo '</script>';
                return back();
        } else {
            $jobs = Jobs::forceCreate([
                'book_date' => $request->res_day,
                'time' => $request->res_time,
                'name' => $request->name,
                'barber' => 'Greg',
                'confirmed' => '0'
                ]);
            echo "You are all set!";
            return back();
        }

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
