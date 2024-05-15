<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        //$product= DB::table('products')->get(); cai nay la dung querryBuilder
        $product = product::all();
        return view('home', compact('product'));
    }


}
