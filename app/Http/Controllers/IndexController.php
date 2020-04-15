<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presentation;
use App\Service;

class IndexController extends Controller
{
    public function index(){
        $presentation =Presentation::first();
        $services =Service::all();
        return view('index',compact('presentation','services'));
    }
}
