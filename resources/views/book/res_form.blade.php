@extends('layouts.app')
@section('content')
<h1>Ready to book</h1>
    <hr>
<p>Choose a barber from below to schedule an appointment with</p>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <div id="oliver">
          <a id='XYHHj252R8Z9_uLAWqAnGw' class='gie-single' href='http://www.gettyimages.com/detail/82796066' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'XYHHj252R8Z9_uLAWqAnGw',sig:'ykobd1GYwfmtHNA4DT0vq_0nmJzxtBCD6Vxgjz4q3So=',w:'431px',h:'398px',items:'82796066',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
          <a onclick="showBarberAvail()"class="btn btn-info" role="button">Oliver Short</a>
          </div>
        <div class="col-sm-4">
            <div id="theresa">
        <a id='7wfQaU-1S6VpsgQ4mg7sNg' class='gie-single' href='http://www.gettyimages.com/detail/724228177' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'7wfQaU-1S6VpsgQ4mg7sNg',sig:'909FKwKhYAoKo70fZkgEsr3NWekRQnyycpky32A6LkU=',w:'431px',h:'398px',items:'724228177',caption: false ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
        <a href="/book/theresa" class="btn btn-info" role="button">Theresa Smith</a>  
            </div>  
    </div>
        <div class="col-sm-4">
            <div id="greg">
        <a id='nt7IUQnQSL5YPa6-qQhcQA' class='gie-single' href='http://www.gettyimages.com/detail/573106855' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'nt7IUQnQSL5YPa6-qQhcQA',sig:'QHX6gni8hgpghZXOEP6uvXyRpfIEe3F1EEJor0QYcck=',w:'431px',h:'398px',items:'573106855',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
        <a href="/book/greg" class="btn btn-info" role="button">Greg Brown</a>  
            </div>  
    </div>
    </div>
    <div id="myDIV">
            This is my DIV element.
        </div>
            
    <div class="row">
        <div class="col-sm-3"> </div>
      <div class="col-sm-3"> 
          <form action="/action_page.php">
            Select a day: <input type="date" name="res_day">

      </div>
      <div class="col-sm-3">
            Select a time:
            <input type="time" name="usr_time">
      </div>
      <div class="col-sm-3"> </div>
    </div>


    <hr>
        
    
        <div class="row">
                <div class="col-sm-12">
        <table>
                    <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($appts as $appt)
        <tr>
            <td>{{ $appt->book_date }}</td>
            <td>{{ $appt->time }}</td>
            <td>{{ $appt->name }}</td>
        </tr>
        @endforeach
    </tbody>
        </table>
        </div>
    </div>

</div>


@stop