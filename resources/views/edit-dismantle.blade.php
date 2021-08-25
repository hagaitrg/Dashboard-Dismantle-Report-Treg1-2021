@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Edit data Dismantle AP</h6>
        </div>
            <div class="card-body">
            <form method="POST" action="/update-dismantle/{{$dismantle->id}}">
            @csrf
            @method('patch')
                <div class="form-group">
                    <label for="area_id">Area</label>
                    <select class="form-control" id="area_id" name="area_id"require>
                        <option value="{{$dismantle->area_id}}">-- {{$dismantle->area->name}} --</option>
                        <option value="1">Aceh</option>
                        <option value="2">Bable</option>
                        <option value="3">Bengkulu</option>
                        <option value="4">Jambi</option>
                        <option value="5">Lampung</option>
                        <option value="6">Medan</option>
                        <option value="7">Ridar</option>
                        <option value="8">Rikep</option>
                        <option value="9">Sumbar</option>
                        <option value="10">Sumsel</option>
                        <option value="11">Sumut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="month_id">Bulan</label>
                    <select class="form-control" id="month_id" name="month_id" require>
                        <option value="{{$dismantle->month_id}}">-- {{$dismantle->month->name}} --</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sn">Serial Name</label>
                    <input type="text" class="form-control" id="sn" name="sn" value="{{$dismantle->sn}}" require>
                </div>
                <div class="form-group">
                    <label for="poe">PoE</label>
                    <select class="form-control" id="poe" name="poe" value="{{$dismantle->poe}}" require>
                        <option value="{{$dismantle->poe}}">-- {{$dismantle->poe}} --</option>
                        <option value="ada">Ada</option>
                        <option value="tidak">Tidak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bracket">Bracket</label> 
                    <select class="form-control" id="bracket" name="bracket" value="{{$dismantle->bracket}}" require>
                        <option value="{{$dismantle->bracket}}">-- {{$dismantle->bracket}} --</option>
                        <option value="ada">Ada</option>
                        <option value="tidak">Tidak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="candidate">Candidate</label>
                    <select class="form-control" id="candidate" name="candidate" value="{{$dismantle->bracket}}" require>
                        <option value="{{$dismantle->candidate}}">-- {{$dismantle->candidate}} --</option>
                        <option value="p1">P1</option>
                        <option value="p2">P2</option>
                        <option value="p3">P3</option>
                        <option value="unlist">Unlist</option>
                    </select>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="evidence" name="evidence">
                    <label class="form-check-label" for="evidance">Evidance</label>
                </div>
                <button type="submit" class="btn btn-danger rounded-pill btn-block">Update</button>
            </form>
            </div>  
        </div>
    </div>
</div>

@endsection