@extends('layout')

@section('title')
    Welcome
@endsection

@section('content')
    <p class="mt-3">Overview content <span ><a href="/overview">click!</a></span></p>
    <p class="mt-3">Chart content <span ><a href="{{route('chart')}}">click!</a></span></p>
    <hr>
    <p>dev project: {{$name}}</p>  
    <p>date project: {{$date}}</p>  
@endsection