@extends('layout')
@section('title','NghiFruit | Ten san pham')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>See more Details</p>
                        <h1>Single Product</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- single product -->
    <div class="single-product mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-product-img">
                        <img src="{{asset('storage/uploads/'.$detail->image)}}" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-content">
                        <h3>{{$detail->name}}</h3>
                            <p><b>Lượt xem:</b> {{$detail->view}}</p>
                        <p class="single-product-pricing"><span>Per Kg</span> {{$detail->price}}$</p>
                        <p>{{$detail->description}}</p>
                        <div class="single-product-form">
                            <!-- Form nhập số lượng -->
{{--                            <form action="index1.html">--}}
                                <input type="number" id="quantityInput" placeholder="0" value="1" min="1"
                                       oninput="updateQuantity()">
{{--                            </form>--}}
                            <!-- Form thêm vào giỏ hàng -->
                            <form action="/addtocart" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$detail->id}}">
                                <input type="hidden" name="name" value="{{$detail->name}}">
                                <input type="hidden" name="image" value="{{$detail->image}}">
                                <input type="hidden" name="price" value="{{$detail->price}}">
                                <input type="hidden" name="quantity" id="hiddenQuantity" value="1">
                                @if(Auth::check()&&Auth::user()->role==0)
                                <button type="submit" class="btn bg-warning"><i class="fas fa-shopping-cart"></i> Add to
                                    Cart
                                </button>
                                @endif
                            </form>
                            <p><strong>Categories: </strong>{{$detail->category->name}}</p>
                        </div>
                        <h4>Share:</h4>
                        <ul class="product-share">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- JavaScript để cập nhật giá trị của ô ẩn -->
                <script>
                    function updateQuantity() {
                        var quantity = document.getElementById('quantityInput').value;
                        document.getElementById('hiddenQuantity').value = quantity;
                    }
                </script>

            </div>
        </div>
    </div>
    <!-- end single product -->

    <!-- more products -->
    <div class="more-products mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Related</span> Products</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                            beatae optio.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($related as $rlt)
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="/detail/{{$rlt->slug}}"><img
                                        src="{{asset('storage/uploads/'.$rlt->image)}}" alt=""></a>
                            </div>
                            <h3>{{$rlt->name}}</h3>
                            <p class="product-price"><span>Per Kg</span> {{$rlt->price}} </p>
                            <form action="/addtocart" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$rlt->id}}">
                                <input type="hidden" name="name" value="{{$rlt->name}}">
                                <input type="hidden" name="image" value="{{$rlt->image}}">
                                <input type="hidden" name="price" value="{{$rlt->price}}">
                                <input type="hidden" name="quantity" value="1">
                                @if(Auth::check()&&Auth::user()->role==0)
                                <button type="submit" class="btn bg-warning"><i class="fas fa-shopping-cart"></i> Add to
                                    Cart
                                </button>
                                @endif
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
<!-- end more products -->
