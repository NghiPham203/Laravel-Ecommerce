<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    function detail($slug)
    {
        $detail = product::where('slug', $slug)->first();
        $detail->view += 1;
        $detail->save();
        $related = product::where('category_id', $detail->category_id)
            ->where('id', '<>', $detail->id)->get();
        return view('detail', compact('detail', 'related'));
    }

}
