@extends('layouts.app')
@section('content')
<br>
<div class="admin-head">
<h4>Welcome</h4>
{{ Auth::user()->name }}
</div>
    <hr>

<br>

<div class="block">     
    <div class="tile is-parent">
        <div class="tile is-child box">
            <p class="title">Job #{{ $editJob->id }}</p>
                <table class="table is-fullwidth is-striped is-narrow is-bordered">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Barber</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                    <tr>
                        <td>{{ $editJob->book_date }}</td>
                        <td>{{ $editJob->time }}</td>
                        <td>{{ $editJob->name }}</td>
                        <td>{{ $editJob->barber }}</td>
                    </tr>
                    <tr>
                        <form method='post' action="admin/edit/{{$editJob->id}}">
                            {{ csrf_field() }} 
                        <td><input class="input" type="date" name="date" placeholder="Appointment Date"></td>
                        <td><input class="input" type="time" name="time" placeholder="Appointment Time"></td>
                        <td><input class="input" type="text" name="name" placeholder="Client Name"></td>
                        <td><input class="input" type="text" name="barber" placeholder="Barber"></td>
                        <td><button class="button is-primary is-small is-focused" type="submit">Update</button></td>
                        </form>
                        </td> 
                    </tr>
                       
                    </tbody>
                </table>
        </div>
    </div>
            <hr>
        
</div>            

@stop