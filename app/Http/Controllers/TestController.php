<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{
 public function index() {
   $item = [
       'text' => '建物です',
   ];
   return view('index',$item);
}
}


