<?php

namespace App\Http\Controllers;

use App\Service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('isAdmin', User::class);

        $services = Service::all();
        return view('service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('isAdmin', User::class);

        return view('service.add');
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
            'icon' => 'required|image',
            'titre' => 'required|max:55',
            'description' => 'required|max:250',
        ]);

        $img = $request->file('icon');
        $newName = Storage::disk('public')->put('',$img);	

        $service = new Service();
        $service->icon=$newName;
        $service->titre= $request->input('titre');
        $service->description= $request->input('description');
        $service->save();
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $this->authorize('isAdmin', User::class);

        return view('service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->authorize('isAdmin', User::class);

        $validatedData = $request->validate([
            'icon' => 'image',
            'titre' => 'required|max:55',
            'description' => 'required|max:250',
        ]);
        if ($request->hasFile('icon')) { 
            $img = $request->file('icon');
            $newName = Storage::disk('public')->put('',$img);	
            Storage::disk('public')->delete($service->icon);
            $service->icon=$newName;
        } 
        $service->titre= $request->input('titre');
        $service->description= $request->input('description');
        $service->save();
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->authorize('isAdmin', User::class);

        Storage::disk('public')->delete($service->icon);
        $service->delete();
        return redirect()->route('service.index');
    }
}
