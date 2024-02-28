@extends('layout')

@section('title', 'Overview')

@section('content')
    <p class="mt-3 text-center">Overview content</p>
    <div class="d-flex flex-wrap justify-content-around">
        @foreach ($index as $item)
            <div class="card mt-2 ms-2">
                <div class="card-body" style="height: auto;width: 45vh">
                    <h5>{{ $item['id'] }}</h5>
                    {{-- format numbere (data, decimal, decimal sep, thousand sep) --}}
                    <h3>{{ number_format($item['data'], 2, '.', ',') }}</h3>
                    @if (strlen($item['last']) > 4)
                        @if ($item['data'] < $item['last'])
                            <h6><span class="text text-success">{{ number_format($item['last'] / 1000000, 2, '.', '') }}
                                    M</span>
                                since last
                                month</h6>
                        @else
                            <h6><span class="text text-danger">{{ number_format($item['last'] / 1000000, 2, '.', '') }}
                                    M</span>
                                since last
                                month</h6>
                        @endif
                    @else
                        @if ($item['last'] >= $item['data'])
                            <h6><span class="text text-danger">{{ number_format($item['last'], 2, '.', '') }}</span>
                                % since last
                                month</h6>
                        @else
                            <h6><span class="text text-success">{{ number_format($item['last'], 2, '.', '') }}</span> % since
                                last
                                month</h6>
                        @endif
                    @endif

                </div>
            </div>
        @endforeach
    </div>
@endsection
