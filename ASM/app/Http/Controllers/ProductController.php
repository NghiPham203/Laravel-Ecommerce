<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Models\category;


class ProductController extends Controller
{
    function product()
    {
        $products = product::orderBy('id', 'DESC')->paginate(3);
        $categories = category::orderBy('name', 'ASC')->get();
        return view('product', compact('products', 'categories'));


    }

    public function getproductsByCategories(Request $request)
    {
        $products = product::where('category_id', $request->category_id)
            ->paginate(3);
        $categories = category::all();
        return view('product', compact('categories', 'products'));
    }

    public function search(Request $request){
        $query = $request->input('query');
        $products= product::where('name', 'LIKE', "%$query%")->orWhere('description', 'LIKE', "%$query%")->paginate(3);
        $categories = category::all();

        return view('product', compact('products', 'categories'));
}
}
