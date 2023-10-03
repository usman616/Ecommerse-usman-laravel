@extends('master')
@section('content')

    <div class="trendng-items">
        <div class="col-sm-4 py-3 mx-4">
            <h4> Filtered items</h4>
        </div>
        <h1 class="text-center my-2 ">Search Results</h1>

        <div class="col-sm-4 centered-container" >
            @foreach ($products as $item)
            <div class="search-item"> 
                    <a href="detail/{{ $item['id'] }}" style="text-decoration: none;">
                    <img src="{{ $item['gallery'] }}" class="search-images" 
                        >
                    <div class="text-center my-2"  >
                        <h5>{{ $item['name'] }}</h5>
                        <h5>{{ $item['discription'] }}</h5>
                    </div>
                </a>
                </div>
            @endforeach
        </div>
    </div>
    @endsection
