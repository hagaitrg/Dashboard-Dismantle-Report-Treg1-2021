@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">DISMANTLING AP P2 & P3 TR1 - 2021 Monthly </h6>
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
                                            $poe = App\Models\Dismantle::where('area_id','=', $v)->where('month_id','=', $j)->where('poe','=','ada')->count();
                                            $brc = App\Models\Dismantle::where('area_id','=', $v)->where('month_id','=', $j)->where('bracket','=','ada')->count();
                                            $p2 = App\Models\Dismantle::where('area_id','=', $v)->where('month_id','=', $j)->where('evidence','=','p2')->count();
                                            $p3 = App\Models\Dismantle::where('area_id','=', $v)->where('month_id','=', $j)->where('evidence','=','p3')->count();
                                            $evidence = App\Models\Dismantle::where('area_id','=', $v)->where('month_id','=', $j)->where('evidence','=','checked')->count();
                                            
                                            $p23 = $p2+$p3;
                                            $ap = $p23+$evidence;
                                            $sum_poe = $poe +$p23;
                                            $sum_brc = $brc+$p23;
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