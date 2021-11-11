<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyModel;

class MyController extends Controller
{
    public function index(){
        $viaggi = MyModel::all();
        return view('home', compact('viaggi'));
    }
}
