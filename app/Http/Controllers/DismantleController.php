<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dismantle;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;

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

        return view('dismantle', compact('dismantles'));
    }

    public function indexDashboard()
    {
        $dismantles = Dismantle::all();

        $poe = DB::table('dismantles')->where('poe','=','ada')->count();
        $bracket = DB::table('dismantles')->where('bracket','=','ada')->count();
        $p2 = DB::table('dismantles')->where('candidate','=','p2')->count();
        $p3 = DB::table('dismantles')->where('candidate','=','p3')->count();
        $p23 = $p2 + $p3;
        $unlist = DB::table('dismantles')->where('candidate','=','unlist')->count();

        return view('home', compact('dismantles','poe','bracket','p23', 'unlist'));
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
            Toastr::error('Gagal tambah dismantle', 'Title', ["positionClass" => "toast-top-center"]);
        }else{
            Toastr::success('Berhasil tambah dismantle', 'Title', ["positionClass" => "toast-top-center"]);
        }

        return redirect('/dismantle');

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
        $dismantle = Dismantle::findOrFail($id);

        return view('edit-dismantle', compact('dismantle'));
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

        $coba = "unchecked";
        if(isset($request->evidence)){
            $coba = "checked";
        }

        $update = Dismantle::where('id', $id)->update([
            'area_id' => $request->area_id,
            'month_id' => $request->month_id,
            'sn' => $request->sn,
            'poe' => $request->poe,
            'bracket' => $request->bracket,
            'candidate' => $request->candidate,
            'evidence' => $coba
        ]);

        if (!$update) {
            Toastr::error('Gagal ubah dismantle!', 'Info');
        }else{
            Toastr::success('Berhasil ubah dismantle!', 'Info');
        }

        return redirect('/dismantle');
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

        if (!$dismantle) {
            Toastr::error('Gagal hapus dismantle!', 'Info');
        }else{
            Toastr::success('Berhasil hapus dismantle!', 'Info');
        }

        return redirect('/dismantle');

    }
}
