@extends('layout')

@section('title')
    Chart
@endsection

@section('content')
    <p class="mt-3 text-center">chart content</p>

    <table id="monitorKPI" class="table table-striped table-centered mb-0">
        <thead class="table-dark">
            <tr>
                <th colspan="2">
                    <select id="monthly" name="monthly" class="form-select text-center">
                        <option selected>Monthly</option>
                    </select>
                </th>
                <th rowspan="2" class="text-center">Total Month</th>
                <th rowspan="2" class="text-center">Week1 <p>(1st-7th)</p>
                </th>
                <th rowspan="2" class="text-center">Week2 <p>(8th-14th)</p>
                </th>
                <th rowspan="2" class="text-center">Week3 <p>(15th-21st)</p>
                </th>
                <th rowspan="2" class="text-center">Week4 <p>(22nd -end of month)</p>
                </th>
            </tr>
            <tr>
                <th>Product</th>
                <th>Details</th>
            </tr>

        </thead>
        <tbody>
            <tr class="MT400">
            <tr>
                <th rowspan="8"><label style="font-size: large;color: blue" id="MT400">{{ $indexVal }}</label>
                </th>
            </tr>
            @foreach ($data as $i)
                <tr>
                    <th><a href="#" onclick="showModal(); return false;">{{ $i['index'] }}</a></th>
                    <td><label>{{ $i['total'] }}</label> <span class="fs-6"> </span></td>
                    <td><label>{{ $i['week1'] }}</label> <span class="fs-6"> </span></td>
                    <td><label>{{ $i['week2'] }}</label> <span class="fs-6"> </span></td>
                    <td><label>{{ $i['week3'] }}</label> <span class="fs-6"> </span></td>
                    <td><label>{{ $i['week4'] }}</label> <span class="fs-6"> </span></td>
                </tr>
            @endforeach
            </tr>
        </tbody>
    </table>
@endsection
