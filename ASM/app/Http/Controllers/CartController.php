<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function addToCart(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $price = $request->input('price');
        $image = $request->input('image');
        $quantity = $request->input('quantity', 1);

        // Kiểm tra sản phẩm có trong giỏ hàng chưa
        $cart = $request->session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                'id'       => $id,
                'name'     => $name,
                'price'    => $price,
                'image'    => $image,
                'quantity' => $quantity
            ];
        }

        // Lưu cart vào session
        $request->session()->put('cart', $cart);
        return redirect()->to(url()->previous());
    }

    // Giảm số lượng sản phẩm
    public function decreaseQuantity(Request $request, $id)
    {
        $cart = $request->session()->get('cart', []);
        if (isset($cart[$id])) {
            if ($cart[$id]['quantity'] > 1) {
                $cart[$id]['quantity']--;
            } else {
                unset($cart[$id]);
            }
            $request->session()->put('cart', $cart);
        }
        return redirect()->route('cart');
    }

    // Tăng số lượng sản phẩm
    public function increaseQuantity(Request $request, $id)
    {
        $cart = $request->session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $request->session()->put('cart', $cart);
        }
        return redirect()->route('cart');
    }

    public function removeFromCart(Request $request, $id)
    {
        $cart = $request->session()->get('cart', []);
        if (isset($cart[$id])) {
            session()->forget('cart.'.$id);

        }
        return redirect()->route('cart');

    }

    public function emptyCart(Request $request)
    {
        $request->session()->forget('cart');
        return redirect()->route('cart');

    }


    public function showCheckOutForm(Request $request){
        $user = Auth::user();
        $cart = $request->session()->get('cart', []);
        return view('checkout', compact('cart', 'user'));
    }

}
