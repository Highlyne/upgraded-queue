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
            <p class="title">Queue Log</p>
                <table class="table is-fullwidth is-striped is-narrow is-bordered">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Barber</th>
                        <th>Finished</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($editJob as $job)
                    <tr>
                        <td>{{ $job->book_date }}</td>
                        <td>{{ $job->time }}</td>
                        <td>{{ $job->name }}</td>
                        <td>{{ $job->barber }}</td>
                        <td>@if ($job->confirmed === 1)
                            <i class="fas fa-check"></i>
                            @else 
                            <a href="/"><i class="far fa-circle"></i></a>
                            
                            @endif
                        </td>
                        <td><a href="/"><i class="fas fa-edit"></i></a></td>
                        <td><form method='POST' action="/admin/delete/{{$job->id}}">
                            {{ csrf_field() }}
                            <a href="/admin/delete/{{ $job->id }}" type="submit"><i class="fas fa-times"></i></a>
                        </form>
                        </td> 
                    </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
            <hr>
        
</div>            

@stop