<?php

namespace App\Http\Controllers;

use App\Team;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $this->authorize('isAdmin', User::class);

        $teams = team::all();
        return view('team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('isAdmin', User::class);

        return view('team.add');
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
            'img' => 'required|image',
            'job' => 'required|max:55',
            'full_name' => 'required|max:55',
            'description' => 'description|max:250',
        ]);

        $img = $request->file('img');
        $newName = Storage::disk('public')->put('',$img);	

        $team = new Team();
        $team->img=$newName;
        $team->job= $request->input('job');
        $team->full_name= $request->input('full_name');
        $team->description= $request->input('description');
        $team->facebook= $request->input('facebook');
        $team->twitter= $request->input('twitter');
        $team->googlePlus= $request->input('googlePlus');
        $team->save();
        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $this->authorize('isAdmin', User::class);

        return view('team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $this->authorize('isAdmin', User::class);

        $validatedData = $request->validate([
            'img' => 'required|image',
            'job' => 'required|max:55',
            'full_name' => 'required|max:55',
            'description' => 'description|max:250',
        ]);

        $img = $request->file('img');
        $newName = Storage::disk('public')->put('',$img);	
        Storage::disk('public')->delete($team->img);
        $team->img=$newName;
        $team->job= $request->input('job');
        $team->full_name= $request->input('full_name');
        $team->description= $request->input('description');
        $team->facebook= $request->input('facebook');
        $team->twitter= $request->input('twitter');
        $team->googlePlus= $request->input('googlePlus');
        $team->save();
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $this->authorize('isAdmin', User::class);

        Storage::disk('public')->delete($team->img);
        $team->delete();    
        return redirect()->route('team.index');
    }
}
