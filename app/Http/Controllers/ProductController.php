<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index_Product(): string
    {
       return view("contents/login/login");
    }
}
