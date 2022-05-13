<?php

namespace App\Http\Controllers;

use App\Models\Szakdoga;
use Illuminate\Http\Request;

class SzakdogaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $szakdogak = Szakdoga::all();
        return view('dashboard', ['szakdogak' => $szakdogak]);
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
        $szakdoga = new Szakdoga();
        $szakdoga->szakdoga_nev = $request->szakdoga_nev;
        $szakdoga->githublink = $request->tagokneve;
        $szakdoga->oldallink = $request->oldallink;
        $szakdoga->tagokneve = $request->githublink;

        $szakdoga->save();
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Szakdoga  $szakdoga
     * @return \Illuminate\Http\Response
     */
    public function show(Szakdoga $szakdoga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Szakdoga  $szakdoga
     * @return \Illuminate\Http\Response
     */
    public function edit(Szakdoga $szakdoga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Szakdoga  $szakdoga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Szakdoga $szakdoga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Szakdoga  $szakdoga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Szakdoga $szakdoga)
    {
        //
    }
}
