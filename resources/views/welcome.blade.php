@extends('layouts.app')
@section('content')

        <div class="container">
            <div class="jumbotron">

                <p>Hot Cutz</p>
            </div>
        </div>
        <br>

        
        <hr>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <p> database queue will go here </p> 
                
                </div>
            </div>
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
            @foreach ($jobs as $job)
            <tr>
                <td>{{ $job->book_date }}</td>
                <td>{{ $job->time }}</td>
                <td>{{ $job->name }}</td>
                <td>@if ($job->confirmed === 1)
                        <i class="fas fa-check"></i>
                        @endif
                    </td>
            </tr>
            @endforeach
        </tbody>
            </table>
            </div>
        </div>
        <div class="row">
                <div class="col-sm-12">
        <a href="/book" class="btn btn-info" role="button">Book Now</a>
                </div>
        </div>
        </div>
</div>

@stop
