<?php

namespace App\Http\Controllers;

use App\Newsletter;
use App\User;
use Illuminate\Http\Request;

use App\MAIL\NewsletterMail;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('isAdmin', User::class);

        $newsletters = Newsletter::all();
        return view('newsletter.index',compact('newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('isAdmin', User::class);

        return view('newsletter.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'email' => 'required|email|unique',
        ]);
        $newsletter = new Newsletter();
        $newsletter->name = $request->input('name');
        $newsletter->email = $request->input('email');
        $newsletter->save();
        Mail::to($request->input('email'))->send(new NewsletterMail($request->input('email'),$request->input('name')));
        return redirect('/#team');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {

        return view('newsletter.edit',compact('newsletter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        $this->authorize('isAdmin', User::class);

        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'email' => 'required|email|unique:newsletters,email,'.$newsletter->id,
        ]);

        $newsletter->name = $request->input('name');
        $newsletter->email = $request->input('email');
        $newsletter->save();
        return redirect()->route('newsletter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        $this->authorize('isAdmin', User::class);

        $newsletter->delete();
        return redirect()->route('newsletter.index');
    }
}
