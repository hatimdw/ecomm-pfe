@extends('layout')

@section('PageTitle','Landing Page')
@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/logo-carousel.css')}}">
@endsection

@section('content')

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/promo/macbook-new.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/promo/ipad.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/promo/iphone.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <h2>Trending Items</h2>
  <div class="shop container ">
    <div class="row row-cols-4">
    @foreach($products as $product)
    <div class="col card border border-light-subtle">
      <a href="{{ route('shop.show', $product->slug) }}">
        <img src="{{asset('img/products/'.$product->slug.'.jpg')}}"
         class="img-card card-img-top" alt="..."></a>


      <div class="card-body">
        <h5 class="card-title">{{$product->title}}</h5>
        <a href="{{ route('shop.show', $product->slug) }}">
            <p class="card-text">{{$product->name}}</p>
        <div class="card-price"> {{$product->format()}} DH</div></a>
      </div>
    </div>
      @endforeach
    </div>
    </div>


    <div class="a-shop"><a href="{{route('shop.index')}}"
        class="a-shop-style text-decoration-none link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">SHOP
        ALL <span><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
            class="bi bi-chevron-right" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
          </svg></span></a>
    </div>


    <!-- slider !-->
    <section id="slider">
        <h2 id="brand-header">Brands</h2>
        <div class="container">
          <div class="subcontainer">
            <div class="slider-wrapper">

              <br>
              <div class="fixedWidth-edgePadding">
                <div>
                  <div class="slide">
                    <div class="slide-img img-1"></div>
                  </div>
                </div>

                <div>
                  <div class="slide">
                    <div class="slide-img img-2"></div>
                  </div>
                </div>

                <div>
                  <div class="slide">
                    <div class="slide-img img-3"></div>
                  </div>
                </div>

                <div>
                  <div class="slide">
                    <div class="slide-img img-4"></div>
                  </div>
                </div>
                <div>
                  <div class="slide">
                    <div class="slide-img img-5"></div>
                  </div>
                </div>

                <div>
                  <div class="slide">
                    <div class="slide-img img-6"></div>
                  </div>
                </div>

                <div>
                  <div class="slide">
                    <div class="slide-img img-7"></div>
                  </div>
                </div>

                <div>
                  <div class="slide">
                    <div class="slide-img img-8"></div>
                  </div>
                </div>

                <div>
                  <div class="slide">
                    <div class="slide-img img-9"></div>
                  </div>
                </div>

                <div>
                  <div class="slide">
                    <div class="slide-img img-10"></div>
                  </div>
                </div>

                <div>
                  <div class="slide">
                    <div class="slide-img img-11"></div>
                  </div>
                </div>

                <div>
                  <div class="slide">
                    <div class="slide-img img-12"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><br>
        <div class="a-shop"><a href="#"
            class="a-shop-style text-decoration-none link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">SEE
            ALL BRANDS <span><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
                class="bi bi-chevron-right" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg></span></a>
        </div>
      </section>
      <br>
      <br>

      <!-- blog !-->
      <h2>Blog</h2>
      <div class="container">


        <figure class="figure figure1">
          <img src="img/articles/macos.jpg" class="figure-img img-fluid rounded" alt="...">
          <p>April 27,2023</p>
          <h1 class="fig-title">Everything You Need to Know About the MacBook Pro</h1>
          <p class="fig-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum assumenda consequatur id dolores asperiores iusto quas provident aliquam beatae culpa soluta, consequuntur tempore eius quod delectus totam, sed qui ipsam.</p>
        </figure>
        <br><br>
        <div class="a-shop"><a href="#"
          class="a-shop-style text-decoration-none link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">SEE
          ALL ARTICLES <span><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
              class="bi bi-chevron-right" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
            </svg></span></a><br><br>
      </div>
      </div>


      <div class="news">
        <div class="container news-co">
          <div class="about">
            <h4>About</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at neque vulputate, vestibulum magna in, accumsan urna. Nulla feugiat ipsum ex, molestie porttitor nibh faucibus at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit lorem ut finibus semper. Donec ac vehicula erat, nec consequat massa.
              <br><br>
              Quisque rhoncus fermentum sapien id congue. Nam at rutrum turpis. Aliquam sagittis imperdiet tortor vel dignissim. Ut ipsum nunc, egestas et odio id, vestibulum posuere orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

              <a href="#"
          class="a-shop-style text-decoration-none link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">SEE
          ALL ARTICLES <span><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
              class="bi bi-chevron-right" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
            </svg></span></a>




          </div>
          <div class="latest-news">
            <h4>Latest News</h4>
            <p>June 4, 2018</p>
            <h5>Highlights from WWDC</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales eget ipsum id aliquam. Nam consectetur interdum nibh eget sodales. Cras volutpat efficitur ornare.</p><hr>

            <p>June 4, 2018</p>
            <h5>Apple introduces macOS Mojave        </h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales eget ipsum id aliquam. Nam consectetur interdum nibh eget sodales. Cras volutpat efficitur ornare.</p><hr>

            <p>June 4, 2018</p>
            <h5>iOS 11.4 brings stereo pairs and multi-room audio with AirPlay 2        </h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales eget ipsum id aliquam. Nam consectetur interdum nibh eget sodales. Cras volutpat efficitur ornare.</p><hr>


            <a href="#"
            class="a-shop-style text-decoration-none link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">SEE
            ALL NEWS <span><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
                class="bi bi-chevron-right" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg></span></a>

          </div>
        </div>
      </div>
@endsection
