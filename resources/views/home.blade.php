@extends('layouts.admin')

@section('content')
<div class="container-fluid">
<h1 class="h3 mb-0 text-secondary-800 mb-4"><strong>Dashboard</strong></h1>
<div class="row mb-4">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total PoE</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Ada = {{$poe}} </div>
                                        </div>
                                        <div class="col-auto">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Bracket</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Ada = {{$bracket}}</div>
                                        </div>
                                        <div class="col-auto">
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Total Candidate (P2 & P3)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$p23}}</div>
                                        </div>
                                        <div class="col-auto">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Candidate (Unlist)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$unlist}}</div>
                                        </div>
                                        <div class="col-auto">
                                     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">LAPORAN DISMANTLE AP TR1 -2021</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Area</th>
                            <th>Month</th>
                            <th>Serial Name</th>
                            <th>PoE</th>
                            <th>Bracket</th>
                            <th>Candidate</th>
                            <th>Evidence</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dismantles as $value => $d)
                        <tr>
                            <td class="text-center">{{$value+1}}</td>
                            <td>{{$d->area->name}}</td>
                            <td>{{$d->month->name}}</td>
                            <td>{{$d->sn}}</td>
                            <td>{{$d->poe}}</td>
                            <td>{{$d->bracket}}</td>
                            <td>{{$d->candidate}}</td>
                            <td>{{$d->evidence}}</td>
                    @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DISMANTLING AP P2 & P3 TR1 - 2021 Monthly </h6>
        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead class="text-center">
                                        <tr>
                                            <th rowspan="2" class="text-center align-middle">Area</th>
                                            @foreach($month as $value => $m)
                                            <th colspan="3">{{$m->name}}</th>
                                            @endforeach
                                        </tr>
                                        <tr>
                                        @for ($i = 0; $i < count($month); $i++)
                                            <th>AP</th>
                                            <th>PoE</th>
                                            <th>BRC</th>
                                        @endfor
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($area as $v => $a)
                                        <tr>
                                            <td><strong>{{$a->name}}</strong></td>
                                            @for ($j = 1; $j <= count($month); $j++)

                                        
                                            @php 
                                            $PoE = App\Models\Dismantle::where('area_id','=', $v)->where('month_id','=', $j)->where('poe','=','ada')->count();
                                            $brc = App\Models\Dismantle::where('area_id','=', $v)->where('month_id','=', $j)->where('bracket','=','ada')->count();
                                            $P2 = App\Models\Dismantle::where('area_id','=', $v)->where('month_id','=', $j)->where('evidence','=','p2')->count();
                                            $P3 = App\Models\Dismantle::where('area_id','=', $v)->where('month_id','=', $j)->where('evidence','=','p3')->count();
                                            $evidence = App\Models\Dismantle::where('area_id','=', $v)->where('month_id','=', $j)->where('evidence','=','checked')->count();

                                            $P23 = $P2 + $P3;
                                            $ap = $P23+$evidence;
                                            $sum_poe = $PoE +$P23;
                                            $sum_brc = $brc+$P23;
                                            @endphp

                                            <td>{{$ap}}</td>
                                            <td>{{$sum_poe }}</td>
                                            <td>{{$sum_brc}}</td>
                                            @endfor
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
</div>
</div>
@endsection