@extends('layouts.app')
@section('content')
<h3>Book an appointment with</h3>
<h1>{{ $barberInfo[0] }} </h1>
    <hr>
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
                <img src={{!! $barberInfo[1] !!}}> 
                
        </div>
        <div class="col-sm-8">
            <div class="row">
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
        <div class="row">
            <hr>
                <form action="/action_page.php">
                    Select a day: <input type="date" name="res_day">  Select a time:<input type="time" name="usr_time"> <button class="btn btn-info" role="button">submit</button> 
                </form>
            </div>
    </div>
</div>

@stop