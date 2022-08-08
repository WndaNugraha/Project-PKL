@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Artikel Donatur
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                            <table class="table align-middle " id="dataTable">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Telphone</th>
                                <th>Jenis</th>
                                <th>Jumlah Donasi</th>
                                <th>Jenis Pembayaran</th>
                            </tr>
                            <tr>
                                <td>{{$donatur1->nama}}</td>
                                <td>{{$donatur1->email}}</td>
                                <td>{{$donatur1->no}}</td>
                                <td>{{$donatur1->jenis}}</td>
                                <td>{{$donatur1->jumlah}}</td>
                                <td>{{$donatur1->pembayaran}}</td>
                            </tr>
                            
                        </table>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('donatur.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection