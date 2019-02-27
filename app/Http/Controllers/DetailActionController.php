<?php

namespace App\Http\Controllers;

use App\Detail_action;
use Illuminate\Http\Request;

class DetailActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.reports.show');
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
     * @param  \App\Detail_action  $detail_action
     * @return \Illuminate\Http\Response
     */
    public function show(Detail_action $detail_action)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detail_action  $detail_action
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail_action $detail_action)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detail_action  $detail_action
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail_action $detail_action)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detail_action  $detail_action
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail_action $detail_action)
    {
        //
    }
}
