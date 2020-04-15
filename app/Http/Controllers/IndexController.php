<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presentation;

class IndexController extends Controller
{
    public function index(){
        $presentation =Presentation::first();
        return view('index',compact('presentation'));
    }
}
