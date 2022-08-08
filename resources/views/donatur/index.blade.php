@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Donatur
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Donatur</th>
                                        <th>Email</th>
                                        <th>No Telp</th>
                                        <th>Jenis Donasi</th>
                                        <th>Jumlah</th>
                                        <th>Jenis Pembayaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($donatur1 as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->no }}</td>
                                            <td>{{ $data->jenis }}</td>
                                            <td>{{ $data->jumlah }}</td>
                                            <td>{{ $data->pembayaran }}</td>
                                            <td>
                                            <a href="{{ route('donatur.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> 
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection