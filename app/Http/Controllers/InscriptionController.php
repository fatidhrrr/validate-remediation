<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Genre;
use App\Inscription;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscriptions = User::all();
        $genre = Genre::all();
        return view('inscription', compact('inscriptions', 'genre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::all();
        $inscriptions = User::all();
        return view('view', compact('genre', 'inscriptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inscriptions=new User();
        $inscriptions->email=$request->input("email");
        $inscriptions->password=$request->input("password");
        $inscriptions->genre_id=$request->input("genre_id");
        $inscriptions->save();
        return redirect()->route('view');
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
        //
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
        $inscriptions = Inscription::find($id);
        $inscriptions->email=$request->input("email");
        $inscriptions->password=$request->input("password");
        $inscriptions->genre_id=$request->input("genre_id");
        $inscriptions->save();         
        return redirect()->route("view");
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