<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MathController extends Controller
{
 public function sum($x,$y) {
   $sum = $x + $y;
   
   return view::make('sum',['x' => $x, 'y' => $y]);
 }
}
