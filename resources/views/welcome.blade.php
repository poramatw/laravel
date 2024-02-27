@extends('layout')

@section('title')
    Welcome
@endsection

@section('content')
    <p class="mt-3">Homepage <span ><a href="/overview">click!</a></span></p>
    <hr>
    <p>dev project: {{$name}}</p>  
    <p>date project: {{$date}}</p>  
@endsection