@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Shodakoh
                    </div>
                    <div class="card-body">
                        <form action="{{ route('shodakoh.update', $shodakoh1->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                            <label for="">Artikel</label>
                            <input id="artikel" type="hidden" name="artikel" class="form-control  @error('artikel') is-invalid @enderror" value="{!! $zakat->artikel !!}">
                                <trix-editor input="artikel"></trix-editor>
                                @error('artikel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="date" class="form-control  @error('tanggal') is-invalid @enderror"
                                    name="tanggal" value="{{ $shodakoh1->tanggal }}">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection