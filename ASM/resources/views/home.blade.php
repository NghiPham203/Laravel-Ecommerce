@extends('layout')
@section('title','NghiFruit | Nong san sach')
@section('content')
<!-- hero area -->
<div class="hero-area hero-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-2 text-center">
                <div class="hero-text">
                    <div class="hero-text-tablecell">
                        <p class="subtitle">Fresh & Organic</p>
                        <h1>Delicious Seasonal Fruits</h1>
                        <div class="hero-btns">
                            <a href="shop.html" class="boxed-btn">Fruit Collection</a>
                            <a href="contact.html" class="bordered-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end hero area -->

<!-- features list section -->
<div class="list-section pt-80 pb-80">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="content">
                        <h3>Free Shipping</h3>
                        <p>When order over $75</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="content">
                        <h3>24/7 Support</h3>
                        <p>Get support all day</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-box d-flex justify-content-start align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-sync"></i>
                    </div>
                    <div class="content">
                        <h3>Refund</h3>
                        <p>Get refund within 3 days!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end features list section -->

<!-- product section -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> Products</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                        beatae optio.</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($product as $prd)
            <div class="col-lg-3 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="/detail/{{$prd->slug}}"><img src="storage/uploads/{{$prd->image}}" alt=""></a>
                    </div>
                    <h3>{{$prd->name}}</h3>
                    <p class="product-price"><span>Per Kg</span> {{$prd->price}}$ </p>
                    <form action="/addtocart" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$prd->id}}">
                        <input type="hidden" name="name" value="{{$prd->name}}">
                        <input type="hidden" name="image" value="{{$prd->image}}">
                        <input type="hidden" name="price" value="{{$prd->price}}">
                        <input type="hidden" name="quantity" value="1">
                        @if(Auth::check()&&Auth::user()->role==0)
                        <button type="submit" class="btn bg-warning"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        @endif
                    </form>

                </div>
            </div>

                @endforeach
        </div>
    </div>
</div>
<!-- end product section -->


<!-- advertisement section -->
<div class="abt-section mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="abt-bg">
                    <a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="abt-text">
                    <p class="top-sub">Since Year 1999</p>
                    <h2>We are <span class="orange-text">Fruitkha</span></h2>
                    <p>Etiam vulputate ut augue vel sodales. In sollicitudin neque et massa porttitor vestibulum ac vel
                        nisi. Vestibulum placerat eget dolor sit amet posuere. In ut dolor aliquet, aliquet sapien sed,
                        interdum velit. Nam eu molestie lorem.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente facilis illo repellat
                        veritatis minus, et labore minima mollitia qui ducimus.</p>
                    <a href="about.html" class="boxed-btn mt-4">know more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end advertisement section -->

<!-- shop banner -->
<section class="shop-banner">
    <div class="container">
        <h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
        <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
        <a href="shop.html" class="cart-btn btn-lg">Shop Now</a>
    </div>
</section>
<!-- end shop banner -->

<!-- latest news -->
<div class="latest-news pt-150 pb-150">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> News</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                        beatae optio.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-news">
                    <a href="single-news.html">
                        <div class="latest-news-bg news-bg-1"></div>
                    </a>
                    <div class="news-text-box">
                        <h3><a href="single-news.html">You will vainly look for fruit on it in autumn.</a></h3>
                        <p class="blog-meta">
                            <span class="author"><i class="fas fa-user"></i> Admin</span>
                            <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                        </p>
                        <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                            Praesent vitae mattis nunc, egestas viverra eros.</p>
                        <a href="single-news.html" class="read-more-btn">read more <i
                                class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-news">
                    <a href="single-news.html">
                        <div class="latest-news-bg news-bg-2"></div>
                    </a>
                    <div class="news-text-box">
                        <h3><a href="single-news.html">A man's worth has its season, like tomato.</a></h3>
                        <p class="blog-meta">
                            <span class="author"><i class="fas fa-user"></i> Admin</span>
                            <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                        </p>
                        <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                            Praesent vitae mattis nunc, egestas viverra eros.</p>
                        <a href="single-news.html" class="read-more-btn">read more <i
                                class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-latest-news">
                    <a href="single-news.html">
                        <div class="latest-news-bg news-bg-3"></div>
                    </a>
                    <div class="news-text-box">
                        <h3><a href="single-news.html">Good thoughts bear good fresh juicy fruit.</a></h3>
                        <p class="blog-meta">
                            <span class="author"><i class="fas fa-user"></i> Admin</span>
                            <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                        </p>
                        <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                            Praesent vitae mattis nunc, egestas viverra eros.</p>
                        <a href="single-news.html" class="read-more-btn">read more <i
                                class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="news.html" class="boxed-btn">More News</a>
            </div>
        </div>
    </div>
</div>
<!-- end latest news -->
@endsection
