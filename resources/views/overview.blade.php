@extends('layout')

@section('title')
    Overview
@endsection

@section('content')
    <p class="mt-3">Overview content</p>
    <div class="d-flex flex-wrap justify-content-around">
        @foreach ($index as $item)
            <div class="card mt-2 ms-2">
                <div class="card-body" style="height: auto;width: 45vh">
                    <h5>{{ $item['id'] }}</h5>
                    <h3>{{ $item['data'] }}</h3>
                    <h6>{{ $item['last'] }}</h6>
                </div>
            </div>
        @endforeach
    </div>
@endsection
