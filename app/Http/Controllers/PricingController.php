<?php

namespace App\Http\Controllers;

use App\Pricing;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PricingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('isAdmin', User::class);

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
        $this->authorize('isAdmin', User::class);

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
        $this->authorize('isAdmin', User::class);

        $validatedData = $request->validate([
            'type' => 'required|max:55',
            'prix' => 'required|numeric',
            'avantageUn' => 'required',
            'plan' => 'required|file',
        ]);
        $plan = $request->file('plan');
        $planName = Storage::disk('public')->put('',$plan);

        $pricing = new Pricing();
        $pricing->type= $request->input('type');
        $pricing->prix= $request->input('prix');
        $pricing->avantageUn= $request->input('avantageUn');
        $pricing->avantageDeux= $request->input('avantageDeux');
        $pricing->avantageTrois= $request->input('avantageTrois');
        $pricing->avantageQuatre= $request->input('avantageQuatre');
        $pricing->plan= $planName;
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
        $this->authorize('isAdmin', User::class);

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
        $this->authorize('isAdmin', User::class);

        $validatedData = $request->validate([
            'type' => 'required|max:55',
            'prix' => 'required|numeric',
            'avantageUn' => 'required',
            'plan' => 'file',
        ]);
        if ($request->hasFile('plan')) { 
            $plan = $request->file('plan');
            $planName = Storage::disk('public')->put('',$plan);
            Storage::disk('public')->delete($pricing->plan);
            $pricing->plan= $planName;
        } 
     

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
        $this->authorize('isAdmin', User::class);
     
        Storage::disk('public')->delete($pricing->plan);
        $pricing->delete();
        return redirect()-> route('pricing.index');
    }
    public function download(Pricing $pricing){
        $extension = pathinfo(storage_path($pricing->plan), PATHINFO_EXTENSION);
	    return  Storage::disk('public')->download($pricing->plan,$pricing->plan.'.'.$extension);
    }
}
