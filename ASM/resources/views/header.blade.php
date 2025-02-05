{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

<!-- header -->
<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href="{{route('home')}}">
                            <img src="ASM/assets/img/logo.png" alt="">
                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class="main-menu">

                            <ul>
                                <li class="current-list-item"><a href="{{route('home')}}">Home</a></li>
                                <li><a href="about.html">About</a></li>

                                <li><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="404.html">404 page</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="{{route('product')}}">Shop</a></li>
                                    </ul>
                                </li>
                                <li><a href="news.html">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="single-news.html">Single News</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="shop.html">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                    </ul>
                                </li>
                                <li><a class="shopping-cart" href="{{route('cart')}}"><i
                                            class="fas fa-shopping-cart"></i></a></li>


                                <li><a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                </li>



                        @if(Auth::check()&&Auth::user()->role==0)
                            <li><a> Xin chào: {{Auth::user()->name}}</a>
                                <ul class="sub-menu">
                                    <li>
                                    <li><a href="shop.html">thông tin tài khoản</a></li>
                                    <li><a href="{{route('logout')}}">log out</a></li>
                            </li>
                            </ul>
                            </li>

                        @elseif(Auth::check()&&Auth::user()->role==1)
                            <li><a> Xin chào: {{Auth::user()->name}}</a>
                                <ul class="sub-menu">
                                    <li>
                                    <li><a href="shop.html">thông tin tài khoản</a></li>
                                    <li><a href="{{route('logout')}}">log out</a></li>
                                    <li><a href="{{route('dashboard')}}">Trang quản trị</a></li>
                            </li>
                            </ul>
                            </li>
                        @else
                            <li class="user-icon">
                                <a href="#">
                                    <i class="far fa-user"></i>
                                </a>

                                <ul class="sub-menu">
                                    <li><a href="{{route('login')}}">Sign In</a></li>
                                    <li><a href="{{route('register')}}">Sign Up</a></li>

                                </ul>
                            </li>


                            </ul>
                        @endif
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->

<!-- search area -->
<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="close-btn"><i class="fas fa-window-close"></i></span>
                <div class="search-bar">
                    <div class="search-bar-tablecell">
                        <h3>Search For:</h3>
                        <form action="{{route('search')}}" method="GET">
                        <input type="text" placeholder="Keywords" name="query">
                        <button type="submit">Search <i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search area -->
