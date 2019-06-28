<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
   public function index(){

        return view('pages.index');
   }

   public function about(){

        return view('pages.about');
   }

   public function services(){

     $data= array(

          'title'=>'Services',
          'services'=> ['web ','mobil','seo']
     );

        return view('pages.services')->with($data);
   }
}
