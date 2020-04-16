<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presentation;
use App\User;
use Illuminate\Support\Facades\Storage;

class PresentationController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('isAdmin', User::class);

        $presentation = Presentation::first();
        return view('presentation.index',compact('presentation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $this->authorize('isAdmin', User::class);

        $presentation = Presentation::find($id);
        return view('presentation.edit',compact('presentation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('isAdmin', User::class);

        $validatedData = $request->validate([
            'titre' => 'required|max:55',
            'text' => 'required|max:255',
            'img' => 'image',
        ]);


        $presentation = Presentation::find($id);
        
        if ($request->hasFile('img')) { 
            $img = $request->file('img');
            $newName = Storage::disk('public')->put('',$img);	
            Storage::disk('public')->delete($presentation->img);
            $presentation->img = $newName ;
        } 
        $presentation->titre = $request->input('titre') ;
        $presentation->text = $request->input('text') ;
        $presentation->save() ;
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
