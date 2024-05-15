<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    function detail($slug)
    {
        $detail = product::where('slug', $slug)->first();

        return view('detail',compact('detail'));
    }
}
