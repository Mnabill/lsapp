<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function index(){


        return view('admin.index');
    }

    public function home(){


        return view('admin.adminposts');
    }
    
}
