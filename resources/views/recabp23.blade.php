@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Recab P23 </h6>
        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                        @foreach ($area as $value => $a)
                                        <tr>
                                            <td>{{$a->name}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
</div>
</div>
@endsection