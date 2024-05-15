<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
   function crud(){
       return view('crud');
   }
}
