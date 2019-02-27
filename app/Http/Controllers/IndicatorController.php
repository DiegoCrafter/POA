<?php

namespace App\Http\Controllers;

use App\Indicator;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class IndicatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $indicator = DB::table('indicators')
        ->where('eje_id','=', $id)
        ->paginate(2);

        $users = DB::table('users')
        ->get();

        $date = Carbon::now();

        return view('admin.indicator.show',["indicator"=>$indicator,"ej_id"=>$id,"users"=>$users,"date"=>$date]);
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
        $indicator = new Indicator();
        $indicator->indicator_name = $request->get('indicator_name');
        $indicator->indicator_code = 1.1;
        $indicator->eje_id = $request->get('eje_id');
        $indicator->save();

        return redirect()->back()
            ->with('message', 'Indicador created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Indicator  $indicator
     * @return \Illuminate\Http\Response
     */
    public function show(Indicator $indicator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Indicator  $indicator
     * @return \Illuminate\Http\Response
     */
    public function edit(Indicator $indicator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Indicator  $indicator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indicator $indicator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Indicator  $indicator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indicator $indicator)
    {
        //
    }
}
