@extends('layouts.app')
@section('content')

       
<section class="hero is-dark">
        <div class="hero-body">
                <figure class="is-fullwidth">
              <img id="wel-pic"  src="https://magazinestbarbershop.com/wp-content/uploads/2016/09/a2.jpg">
                </figure>
        
        </div>
      </section>
        
<hr>

                <div class="tile is-ancestor">
                    <div class="tile is-4 is-vertical is-parent">
                        <div class="title is-child box">
                                <p>My Google Maps Demo</p>
                                <div id="map"></div>
                        </div>
                        
                        <div class="title is-child box">
                                <p class"title"> Welcome </p>
                                <br>
                                <h4>Thank you for visiting our site.  Please feel free to sign in and schedule an appointment with one of 
                                    our experienced barbers.  If you are not able to plan ahead, take a check out the queue log to find the best
                                    time to walk in for a hair cut.  We look forward to seeing you real soon. </h4>
                        </div>
                        <div class="tile is-child box">
                                <p class="title">Shop Hours</p>
                                <table class="table is-fullwidth is-striped is-narrow">
                                        <tr>
                                          <th>Tue - Fri</th>
                                          <td>8.30am to 7.30pm</td>
                                        </tr>
                                        <tr>
                                          <th>Sat:</th>
                                          <td>6.30am to 8.30pm</td>
                                        </tr>
                                      </table>
                            </div>
                    </div>

                    <div class="tile is-parent">
                            <div class="tile is-child box">
                                    <h3 id="date"></h3>
                            <table class="table is-fullwidth is-striped is-narrow is-bordered">
                            <thead>
                            <tr>
                                <th>Time</th>
                                <th>Name</th>
                                <th>Barber</th>
                                <th>Finished</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                            <tr>
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


@stop


