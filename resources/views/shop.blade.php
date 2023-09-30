@extends('layout')

@section('PageTitle', 'Shop')
@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endsection

@section('content')

    <div class="compa">
        <div class="container ">
            <a class="text-decoration-none compa-a " href="/">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
            </svg>
            <a href="" class="text-decoration-none compa-a ">Shop</a>
        </div>
    </div>
        <h1 class="text-center h1-shop">Category</h1>
        <div class="sorting">
            <strong>Price: </strong>
            <a href="">Low to High</a>
            <span>|</span>
            <a href="">High to Low</a>
                </div>


    <div class="container">
        <div class="row justify-content-between">
            <div class="comp1 col-3 ">
                <h5 class="h5-comp1">By Category</h5>

                    <ul id="shop-ul">
                        <li> <a href="" class="text-decoration-none alink-shop ">Laptop</a><br>
                        </li>
                    </ul>


            </div>

            <div class="comp2 col-9 row">

                <div class="row row-cols-3">


                    @foreach($products as $product)
                    <div class="col card-shop border border-light-subtle">
                        <a href="{{ route('shop.show', $product->slug) }}"><img
                                src="{{asset('img/products/'.$product->slug.'.jpg')}}"
                                 class="img-card1 card-img-top"
                                alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <a href="{{ route('shop.show', $product->slug) }}">
                                <p class="card-text">{{ $product->name }}</p>
                            </a>
                            <p class="card-price">{{ $product->format() }} DH</p>
                        </div>
                    </div>


                    @endforeach
                </div>


            </div>

        </div>
    </div>


@endsection
