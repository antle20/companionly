<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
class ProductController extends Controller
{
    public function index(){
        return view('user.product',[
            'data' => product::paginate(6)
        ]);
    }

    public function about(){
        return view('user.aboutus');
    }

    public function contact(){
        return view('user.contactus');
    }
}
