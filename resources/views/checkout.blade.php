@extends('layout')

@section('title','Checkout')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/checkout.css')}}">
@endsection

@section('content')



<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check2" viewBox="0 0 16 16">
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
      <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
    </symbol>
  </svg>



<div class="container">

    @if (session()->has('success_message'))
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
    </div>
    @endif
    @if (count($errors) > 0 )
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif
<main>
  <div class="py-5 text-center">
    <h2>Checkout form</h2>
    <p class="lead">Below is
        an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that
         can be triggered by attempting to submit the form without completing it.</p>
  </div>

  <div class="row g-5">
    <div class="col-md-5 col-lg-4 order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Your cart</span>
        <span class="badge bg-primary rounded-pill">{{ Cart::count(); }}</span>
      </h4>
      @foreach (Cart::content() as $item)

      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-sm">
          <div>

            <h6 class="my-0">{{ $item->model->name }}</h6>
            <small class="text-body-secondary">{{ $item->model->details }}</small>
          </div>
          <span class="text-body-secondary">{{ $item->model->format() }} DH</span>
        </li>
        @endforeach
        <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              @if (session()->has('coupon'))
              <small>{{ session()->get('coupon')['name'] }}</small>
              @endif
            </div>
            @if (!session()->has('coupon'))
            <span class="text-success">0dh</span>
            @endif
            @if (session()->has('coupon'))
            <span class="text-success">-DH</span>
            @endif
          </li>

          <li class="list-group-item d-flex justify-content-between">
            <span>SUBTotal (DH)</span>
            <strong>{{ Cart::subtotal() }} DH</strong>
          </li>
          <hr>
          <li class="list-group-item d-flex justify-content-between">
            <span>SUBTotal after discount</span>
            <strong>{{Cart::subtotal()}} DH</strong>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
            <div class="text-danger">
              <h6 class="my-0">Tax 20%</h6>
            </div>
            <span class="text-danger">{{Cart::tax()}} DH</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span><b>Total (DH)</b></span>
            <strong><b>{{Cart::total()}} DH</b></strong>
          </li>


    </ul>

      <form class="card p-2" action="" method="POST">
        {{ csrf_field() }}
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code" name="coupon_code" id="coupon_code">
          <button type="submit" class="btn btn-secondary">Redeem</button>
        </div>
      </form>


    </div>
    <div class="col-md-7 col-lg-8">
      <h4 class="mb-3">Billing address</h4>
      <form action="{{ route('checkout.store')}}" id="payment-form" method="POST">
        {{ csrf_field() }}
        <div class="row g-3">
          <div class="col-12">
            <label for="name">Name on Card</label>
            <input type="text" class="form-control" id="name_on_card" name="name" value="{{ old('name') }}" required>
          </div>



          <div class="col-12">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com" value="{{ old('email') }}" name="email" required>
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>

          <div class="col-12">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" value="{{ old('address') }}" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>
          <div class="row">
            <div class="col-6">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" placeholder="1234 Main St" name="city" value="{{ old('city') }}" required>
            </div>
            <div class="col-6">
                <label for="province" class="form-label">Province</label>
                <input type="text" class="form-control" id="province" placeholder="1234 Main St" name="province" value="{{ old('province') }}" required>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
                <label for="postalcode" class="form-label">Postal Code</label>
                <input type="text" class="form-control" id="postalcode" placeholder="1234 Main St" name="postalcode" value="{{ old('postalcode') }}" required>
            </div>
            <div class="col-6">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" placeholder="+(212)6" value="{{ old('phone') }}" name="phone" required>
            </div>
          </div>


        </div>

        <hr class="my-4">

        <h4 class="mb-3">Payment</h4>

        <div class="my-3">
          <div class="form-check">
            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked >
            <label class="form-check-label" for="credit">Credit card</label>
          </div>
          <div class="form-check">
            <input id="debit" name="paymentMethod" type="radio" class="form-check-input" >
            <label class="form-check-label" for="debit">Debit card</label>
          </div>
          <div class="form-check">
            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" >
            <label class="form-check-label" for="paypal">PayPal</label>
          </div>
        </div>

        <div class="row gy-3 form-group">
          <div class="col-md-6">

            <small class="text-body-secondary">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <input type="hidden" id="payment_method" name="payment_method"">
          <div id="card-element"></div>
          <div id="card-errors" role="alert"></div>
          <div class="spacer"></div>

          <button type="submit" id="complete-order">Complete Order</button>
    </form>
  </div>
</main>
</div>


@section('extra-js')


        <script src="https://js.stripe.com/v3"></script>
        <script>
                const stripe = Stripe(" {{env('STRIPE_KEY')}} ");

                const elements = stripe.elements();

                const card = elements.create('card',
                    {
                        hidePostalCode:true
                    }
                );

                card.mount('#card-element');



            card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });
            // handling form submissions
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
              event.preventDefault();

              // Disable the submit button to prevent repeated clicks
              document.getElementById('complete-order').disabled = true;

              var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('email').value,
                address_city: document.getElementById('address').value,
                address_state: document.getElementById('city').value,
                address_zip: document.getElementById('province').value
              }

              stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;

                  // Enable the submit button
                  document.getElementById('complete-order').disabled = false;
                } else {
                  // Send the token to your server
                  stripeTokenHandler(result.token);
                }
              });
            });

            function stripeTokenHandler(token) {
              // Insert the token ID into the form so it gets submitted to the server
              var form = document.getElementById('payment-form');
              var hiddenInput = document.createElement('input');
              hiddenInput.setAttribute('type', 'hidden');
              hiddenInput.setAttribute('name', 'stripeToken');
              hiddenInput.setAttribute('value', token.id);
              form.appendChild(hiddenInput);

              // Submit the form
               form.submit();
            }

    </script>
@endsection
@endsection
