@extends('layouts.app')
@section('content')
<div id="res-head">
    <br>
        <h4>Book an appointment with</h4>
        <h3>{{ $barberInfo[0] }} </h3>
</div>
        <hr>
<br>

<div class="block">
    <div class="columns">
        <div class="column">
            <img src={{!! $barberInfo[1] !!}}> 
        </div>
        <div class="column">
            <div class="box">
                <table class="table is-fullwidth is-striped">
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
            <hr>
            <div class="box">
                    <form method="POST" action="/book/{{ $barberInfo[0] }}/new_appt">
                        {{ csrf_field() }} 
                        Name: <input type="text" name="name"><br>
                        Select a day: <input type="date" name="res_day">  Select a time:<input type="time" name="res_time"> <button class="button is-primary is-small is-focused" type="submit">submit</button> 
                              </div>
                    </form>
                </div>
        </div>
    </div>            

@stop