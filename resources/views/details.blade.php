@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                @if ($product)

                <img src="{{ asset($product['gallery']) }}" class="detail-img" alt="">
                @else
                <p> No product found.</p>
                @endif

            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                @if ($product)

                <h2>Name : {{ $product['name'] }}</h2>
                <h3>Price : {{ $product['price'] }}</h3>
                <h4>cetagary : {{ $product['cetagary'] }}</h4>
                <h5>Discription : {{ $product['discription'] }}</h5>
                <br>
                <br>
                <form action="{{ route('add_to_cart') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button class="btn btn-success">Add to Cart</button>

                </form>

                <br>
                <button class="btn btn-primary">Buy Now</button>
                @else
                {
                    <p>No Product Details available.</p>
                }


                @endif

            </div>

        </div>


    </div>
@endsection
