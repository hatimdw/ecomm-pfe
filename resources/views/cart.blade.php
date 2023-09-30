@extends('layout')

@section('PageTitle', 'Shopping cart')
@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/cart.css')}}">
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
    <h1 class="text-center mt-4 mb-4">Cart</h1>
    <!-- code below checks if theres a success msg or an error msg  -->
    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (Cart::count() > 0)
            <h2>{{ Cart::count() }} Item(s) in Shopping Cart</h2>
        @else
            <h2>No Items In Cart</h2>
            <a href="{{ route('shop.index') }}" class="btn btn-primary">Continue Shopping</a>
            <br><br>
        @endif

    </div>
    <div class="grid gap- shopping-cart row">
        <div class="cartsh1 col-7">

            <div class="row text-center cart-row1">
                <div class="col-5">Product</div>
                <div class="col">Quantity</div>
                <div class="col">Price</div>
                <div class="col">Action</div>
            </div>
            <hr>

            <div class="row">
                @foreach (Cart::content() as $item)
                    <div class="cart-el1 row mb-4">
                        <img class="col-5" src="{{asset('img/products/'.$item->model->slug.'.jpg')}}" alt="">
                        <div class="col-7">
                            <h6 class="card-title">{{ $item->model->title }}</h6>
                            <a href="{{ route('shop.show', $item->model->slug) }}"
                                class="card-text">{{ $item->model->name }}</a>
                        </div>

                    </div>
                    <div class="cart-el cart-el2">
                        <select class="form-select form-select-sm quantity" data-id="{{ $item->rowId }}">
                            @for ($i = 1;$i <=5;$i++)
                            <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>

                            @endfor
                          </select>
                    </div>
                    <div class="cart-el cart-el3 card-price">
                        <p>{{$item->model->price}} DH</p>
                    </div>
                    <div class="cart-el cart-el4">


                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                </svg>
                            </button>
                        </form>



                    </div>
                    <hr>
                @endforeach


            </div>
        </div>




@endsection
