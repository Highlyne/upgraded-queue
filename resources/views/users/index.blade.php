@extends('layouts.app')
@section('content')
<h1>Welcome  is a list of all the users>
    <hr>
<ul class='list-group'>
    @foreach ($users as $user)
        <li class='list-item-group'><a href="/users/{{$user->id}}">{{$user->name}}</a></li>
    @endforeach
</ul>
@stop