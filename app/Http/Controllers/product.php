<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class product extends Controller
{
    public function index(){
        // return products::all();
        return 'hiii';
    }
}
