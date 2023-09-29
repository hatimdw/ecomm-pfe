@extends('layout')

@section('PageTitle', $product->name)
@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/product.css')}}">
@endsection


@section('content')
<div class="compa">
<div class="container">
    <a class="text-decoration-none compa-a " href="/">Home</a>
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
    </svg>
    <a href="{{ route('shop.index') }}" class="text-decoration-none compa-a ">Shop</a>
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
      </svg>
    <a href="" class="text-decoration-none compa-a ">Product</a>
</div>
</div>
    <div class="container">

        <h1 class="text-center h1-product">{{ $product->name }}</h1>
        <div class="product-container row ">
            <div class="productc1 col-8">
                <img src="{{asset('img/products/1/laptop-1.jpg')}}" class="img-fluid imgrow" alt="...">
            </div>
            <div class="productc2 col-4">
                <h3>{{ $product->title }}</h3>
                <p>{{ $product->Details }}</p>
                <h4 class="cart-price">{{ $product->format() }} DH</h4>
                <p>{!! $product->description !!}</p>
                <div class="delivery-card ">
                    <div class="delivery"><div class="deliverypt1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                          <h6 class="delivery-header">Delivery</h6>
                    </div>
                      <p class="delivery-para">In stock, free, tomorrow</p>
                    </div>
                    <div class="delivery"><div class="deliverypt1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg>
                          <h6 class="delivery-header">Pick up from store</h6>
                    </div>
                      <p class="delivery-para">In stock, free, tomorrow</p>
                    </div>
                </div>

                    <button type="submit" class="btn btn-primary btn-lg mt-4">Large button</button>


            </div>
        </div>


@endsection
