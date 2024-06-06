@extends('layout')
@section('title','NghiFruit | San Pham')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Fresh and Organic</p>
                        <h1>Shop</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- products -->
    <div class="product-section mt-150 mb-150">
            <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            @foreach($categories as $item)
                            <li><a href="{{route('categories',$item->id)}} " style="color: black">{{$item->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row product-lists">
                @foreach($products as $prd)
                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/detail/{{$prd->slug}}"><img src="{{asset('storage/uploads/'.$prd->image)}}" alt=""></a>
                        </div>
                        <h3>{{$prd->name}}</h3>
                        <p class="product-price"><span>Per Kg</span> {{$prd->price}} </p>
                        <form action="addtocart" method="POST">
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

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pagination-wrap">
                    <ul>

                        <li>{{$products->links('pagination::bootstrap-4')}}</li>
{{--                        <li><a href="#">2</a></li>--}}
{{--                        <li><a href="#">3</a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end products -->

    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="ASM/assets/img/company-logos/1.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="ASM/assets/img/company-logos/2.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="ASM/assets/img/company-logos/3.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="ASM/assets/img/company-logos/4.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="ASM/assets/img/company-logos/5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    <!-- end logo carousel -->
