<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presentation;
use App\Service;
use App\Pricing;
use App\Team;

class IndexController extends Controller
{
    public function index(){
        $presentation =Presentation::first();
        $services =Service::all();
        $pricings =Pricing::all();
        $teams  =Team::inRandomOrder()->get();
        return view('index',compact('presentation','services','pricings','teams'));
    }
}
