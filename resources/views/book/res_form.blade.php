@extends('layouts.app')
@section('content')
<h1>Booking form</h1>
    <hr>
<p>Choose a barber from below to schedule an appointment with</p>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
                <form action="/action_page.php">
                    
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Oliver Short
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Theresa Smith
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Greg Brown
                    </label>
                    
                    <input type="datetime-local" name="bdaytime">
                    <input type="submit">
                    <br>
                    Select a time:
                    <input type="time" name="usr_time">
                    <input type="submit">
                  </form>
        </div>
    </div>
</div>
@stop