@extends('layout')

@section('title', 'Form Target')

@section('content')
    <form method="POST" action="/insert">
        @csrf
        <div class="tab-pane">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-centered mb-2">
                        <thead class="table-dark">
                            <tr>
                                <th rowspan="2" class="text-center">
                                    Product
                                </th>
                                <th rowspan="2" class="text-center">
                                    Theme
                                </th>
                            </tr>
                            <tr>
                                <th class="text-center">w1</th>
                                <th class="text-center">w2</th>
                                <th class="text-center">w3</th>
                                <th class="text-center">w4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="9">
                                    <div>

                                        <select class="form-select mb-3 required" name="product">
                                            <option selected>Select Product</option>
                                            @foreach ($process as $item)
                                                <option value="{{ $item['product'] }}">{{ $item['product'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </th>
                            </tr>
                            @foreach ($index as $item)
                                <tr>
                                    <th class="type">{{ $item['ind'] }}</th>
                                    <td><input name="w1" type="text" size="6"
                                            class="target-input-b target-input">
                                    </td>
                                    <td><input name="w2" type="text" size="6"
                                            class="target-input-b target-input">
                                    </td>
                                    <td><input name="w3" type="text" size="6"
                                            class="target-input-b target-input">
                                    </td>
                                    <td><input name="w4" type="text" size="6"
                                            class="target-input-b target-input">
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div> <!-- end col -->
                @error('w1')
                    <div><span>{{ $message }}</span></div>
                @enderror
                @error('w2')
                    <div><span>{{ $message }}</span></div>
                @enderror
                @error('w3')
                    <div><span>{{ $message }}</span></div>
                @enderror
                @error('w4')
                    <div><span>{{ $message }}</span></div>
                @enderror
                <button class="btn btn-success" type="submit">Apply</button>
            </div> <!-- end row -->
        </div>
    </form>
@endsection
