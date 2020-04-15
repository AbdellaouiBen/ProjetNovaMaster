<?php

namespace App\Http\Controllers;

use App\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricings = Pricing::all();
        return view('pricing.index',compact('pricings'));   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pricing.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pricing = new Pricing();
        $pricing->type= $request->input('type');
        $pricing->prix= $request->input('prix');
        $pricing->avantageUn= $request->input('avantageUn');
        $pricing->avantageDeux= $request->input('avantageDeux');
        $pricing->avantageTrois= $request->input('avantageTrois');
        $pricing->avantageQuatre= $request->input('avantageQuatre');
        $pricing->save();
        return redirect()->route('pricing.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricing $pricing)
    {
        return view('pricing.edit',compact('pricing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pricing $pricing)
    {
        $pricing->type= $request->input('type');
        $pricing->prix= $request->input('prix');
        $pricing->avantageUn= $request->input('avantageUn');
        $pricing->avantageDeux= $request->input('avantageDeux');
        $pricing->avantageTrois= $request->input('avantageTrois');
        $pricing->avantageQuatre= $request->input('avantageQuatre');
        $pricing->save();
        return redirect()->route('pricing.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricing $pricing)
    {
        $pricing->delete();
        return redirect()-> route('pricing.index');
    }
}
