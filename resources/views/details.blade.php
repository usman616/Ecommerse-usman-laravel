@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img  src="{{ $product['gallery'] }}" class="detail-img" alt="">

            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h2>Name : {{ $product['name'] }}</h2>
                <h3>Price : {{ $product['price'] }}</h3>
                <h4>cetagary : {{ $product['cetagary'] }}</h4>
                <h5>Discription : {{ $product['discription'] }}</h5>
                <br>
                <br>
                <button class="btn btn-success">Add to Cart</button>
                <br>
                <br>
                <button class="btn btn-primary">Buy Now</button>



            </div>

        </div>


    </div>
@endsection
