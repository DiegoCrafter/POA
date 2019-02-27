<?php

namespace App\Http\Controllers;

use App\Eje;
use Illuminate\Http\Request;

class EjeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eje = eje::get();
        return view ('home',compact('eje'));
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
        $eje = new Eje();
        $eje->eje_name = $request->get('eje_name');
        $eje->save();

        return redirect('/home')
            ->with('info', 'Category created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Eje  $eje
     * @return \Illuminate\Http\Response
     */
    public function show(Eje $eje)
    {
        $ejes = eje::get();
        return view ('home',compact('ejes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Eje  $eje
     * @return \Illuminate\Http\Response
     */
    public function edit(Eje $eje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Eje  $eje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eje $eje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Eje  $eje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eje $eje)
    {
        Eje::find($id)->delete();
        return redirect('/home')->with('info', 'Deleted Succesfully');
    }
}
