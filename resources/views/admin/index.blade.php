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
                <h3 id="date"></h3>
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
                        <form>
                        @foreach ($jobs as $job)
                        {{ csrf_field() }}
                    <tr>
                        <td>{{ $job->book_date }}</td>
                        <td>{{ $job->time }}</td>
                        <td>{{ $job->name }}</td>
                        <td>{{ $job->barber }}</td>
                        <method='post' action="admin/update/{$id}"> 
                        <td>@if ($job->confirmed === 1)
                            <a href="/"><i class="fas fa-check"></i>
                            @else 
                            <a href="admin/show/{{$job->id}}/confirm"><i class="far fa-circle"></i></a>
                            
                            @endif
                        </td>
                        <td><method='get' action="admin/show/{$id}"><a href="admin/show/{{$job->id}}"><i class="fas fa-edit"></i></a></form></td>
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