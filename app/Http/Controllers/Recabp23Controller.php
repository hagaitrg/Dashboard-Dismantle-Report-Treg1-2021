<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Month;
use App\Models\Area;
use Illuminate\Support\Facades\DB;

class Recabp23Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dismantles = Dismantle::all();
        $month = Month::all();
        $area = Area::all();

        // $poe = DB::table('dismantles')->where('poe','=','ada')->count();
        // $bracket = DB::table('dismantles')->where('bracket','=','ada')->count();
        // $p2 = DB::table('dismantles')->where('candidate','=','p2')->count();
        // $p3 = DB::table('dismantles')->where('candidate','=','p3')->count();
        // $unlist = DB::table('dismantles')->where('candidate','=','unlist')->count();
        // $evidence = DB::table('dismantles')->where('evidence','=','checked')->count();

        //     $poe = Dismantle::where('area_id','=', '1')
        //     ->where('month_id','=', '1')
        //     ->where('poe','=','ada')->count();
        
        //     $p2 = Dismantle::where('area_id','=', '1')
        //     ->where('month_id','=', '1')
        //     ->where('candidate','=','p2')->count();
        
        //     $p3 = Dismantle::where('area_id','=', '1')
        //     ->where('month_id','=', '1')
        //     ->where('candidate','=','p3')->count();
        
        //     $ap =$poe + $p2 + $p3;
        
        // dd($ap);

        return view('recabp23', compact('month','area'));
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
        //
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
