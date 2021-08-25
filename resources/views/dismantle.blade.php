@extends('layouts.admin')

@section('content')
<div class="container-fluid">
<div class="d-flex justify-content-end">
<a class="btn btn-primary mb-3" href="/tambah-dismantle" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
</svg> Add Data</a>
</div>
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-danger">
            <h6 class="m-0 font-weight-bold text-white">LAPORAN DISMANTLE AP TR1 -2021</h6>
        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-center bg-danger text-white">
                                        <tr>
                                            <th>No</th>
                                            <th>Area</th>
                                            <th>Month</th>
                                            <th>Serial Name</th>
                                            <th>PoE</th>
                                            <th>Bracket</th>
                                            <th>Candidate</th>
                                            <th>Evidence</th>
                                            <th>Action</th>
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
                                            <td class="text-center">
                                                <form action="/delete-dismantle/{{$d->id}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                    <a class="btn btn-warning mr-1" href="/edit-dismantle/{{$d->id}}" role="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                        </svg> Edit
                                                    </a>
                                                    <button class="btn btn-danger ml-1" role="button" type="submit" onclick="confirm('Yakin hapus data?')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                        </svg> Delete
                                                    </button>
                                                </form>
                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
</div>
</div>
@endsection