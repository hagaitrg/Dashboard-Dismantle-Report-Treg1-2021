<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dismantle;
use Brian2694\Toastr\Facades\Toastr;

class DismantleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dismantles = Dismantle::all();

        return view('home', compact('dismantles'));
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

        $coba = "unchecked";
        if(isset($request->evidence)){
            $coba = "checked";
        }
        $dismantle = Dismantle::insert([
            'area_id' => $request->area_id,
            'month_id' => $request->month_id,
            'sn' => $request->sn,
            'poe' => $request->poe,
            'bracket' => $request->bracket,
            'candidate' => $request->candidate,
            'evidence' => $coba
        ]);

        

        if (!$dismantle) {
            Toastr::error('Gagal tambah dismantle!', 'Info');

            return redirect('/');
        }else{
            Toastr::success('Berhasil tambah dismantle!', 'Info');

            return redirect('/');
        }

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
        $dismantle = Dismantle::findOrFail($id);

        $dismantle->delete();

        return redirect('/');

    }
}
