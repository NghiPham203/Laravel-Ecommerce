@extends('layout')
@section('title','NghiFruit | Cart')
@section('content')

    <style>

        .boxed-btn {
            background-color: #4b6cb7;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .boxed-btn:hover {
            background-color: #182848;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-decoration: none;
        }
        .payment-method {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .payment-method label {
            margin-bottom: 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .payment-method input[type="radio"]:checked + label {
            background-color: #4b6cb7;
            color: white;
            border-color: #4b6cb7;
        }
        .payment-method input[type="radio"] {
            display: none;
        }
    </style>

    <div class="checkout-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-accordion-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="card single-accordion">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Billing Address
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="billing-address-form">
                                            <form action="{{ route('checkoutform') }}" method="POST">
                                                @csrf
                                                <p><input type="text" name="name" value="{{ $user->name }}" placeholder="Name" required></p>
                                                <p><input type="email" name="email" value="{{ $user->email }}" placeholder="Email" required></p>
                                                <p><input type="text" name="address" value="{{ $user->address }}" placeholder="Address" required></p>
                                                <p><input type="tel" name="phone" value="{{ $user->phone }}" placeholder="Phone" required></p>
                                                <p><textarea name="bill" id="bill" cols="30" rows="10" placeholder="Say Something"></textarea></p>
                                                <button type="submit" class="boxed-btn mt-3">Place Order</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card single-accordion">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Shipping Address
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shipping-address-form">
                                            <p>Your shipping address form is here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card single-accordion">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Card Details
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="card-details">
                                            <p>Your card details go here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="order-details-wrap">
                        <table class="order-details table table-bordered">
                            <thead>
                            <tr>
                                <th>Your order Details</th>
                                <th>Số lượng</th>
                                <th>Gía/sản phẩm</th>
                            </tr>
                            </thead>
                            <tbody class="order-details-body">
                            @foreach($cart as $item)
                                <tr>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{$item['quantity']}}</td>
                                    <td>{{ number_format($item['price'], 2) }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tbody class="checkout-details">
                            <tr>
                                <td><b>Total</b></td>
                                <td></td>
                                <td><b>{{ number_format(collect($cart)->sum(function($item) { return $item['quantity'] * $item['price']; }), 2) }}</b></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="order-details-wrap mt-5">
                        <table class="order-details">
                            <thead>
                            <tr>
                                <th colspan="3" class="text-center"><b>Phương thức thanh toán</b></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="payment-method">
                                <td class="col-md-4">
                                    <input type="radio" id="cod" name="payment_method" value="COD">
                                    <label for="cod">COD</label>
                                </td>
                                <td class="col-md-4">
                                    <input type="radio" id="momo" name="payment_method" value="Momo">
                                    <label for="momo">Momo</label>
                                </td>
                                <td class="col-md-4">
                                    <input type="radio" id="vnpay" name="payment_method" value="VNPay">
                                    <label for="vnpay">VNPay</label>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
