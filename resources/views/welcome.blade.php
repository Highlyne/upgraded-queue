@extends('layouts.app')
@section('content')

       
<div class="block">
        <div class="columns">
            <div class="column">
                <figure class="image">
                    <img src="http://retaildesignblog.net/wp-content/uploads/2017/07/Jack-the-Clipper-flagship-barbershop-by-FormRoom-London-UK-02.jpg">
                </figure>
                </div>
            </div>
        </div>
    
        <br>
        <br>

        <a href="/book" class="button is-primary is-focused" role="button">Book Now</a>
<hr>
<div class="block">
    <div class="box">            
        <div class="row">
                <div class="col-sm-12">
                    <table class="table is-fullwidth is-striped">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Name</th>
                            <th>Barber</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobs as $job)
                        <tr>
                            <td>{{ $job->book_date }}</td>
                            <td>{{ $job->time }}</td>
                            <td>{{ $job->name }}</td>
                            <td>{{ $job->barber }}</td>
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
    </div>
</div>


@stop
