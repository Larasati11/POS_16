<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function food()
   {
      return view('food', ['food' => 'Sate, Bakso, Ayam']);
   }

   public function beauty()
   {
      return view('beauty', ['beauty' => 'Bedak, Lips, Mascara']);
   }
   public function homecare()
   {
      return view('homecare', ['homecare' => 'Daia, Downy, MamaAnggur']);
   }
   public function babykid()
   {
      return view('babykid', ['babykid' => 'Cusson, MyBaby, Johnson']);
   }
}
