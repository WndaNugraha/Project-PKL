@extends('layouts.user2')

@section('content')

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Donasi</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="/home2">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="/zakat2">zakat</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="/infaq2">Infaq</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="/donasi2">Donasi</a></li>
                                </ol>
                            <a href="#donasi2" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Donasi</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <section id="donasi2">
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                    @include('layouts/_flash')
                        <form action="{{ route('donasi2.store') }}" method="post">
                            @csrf
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                                name="nama" autofocus placeholder="Nama" value="{{ old('nama') }}" required autofocus>
                                                <label class="form-label">Nama</label>
                                                    @error('nama')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                                name="email" autofocus placeholder="Email" value="{{ old('email') }}" required autofocus>
                                                <label class="form-label">Email</label>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control  @error('no') is-invalid @enderror"
                                                name="no" autofocus placeholder="No Telp" value="{{ old('no') }}" required autofocus>
                                                <label class="form-label">No Telp</label>
                                                    @error('no')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control  @error('jumlah') is-invalid @enderror"
                                                name="jumlah" autofocus placeholder="Jumlah" value="{{ old('jumlah') }}" type-currency="IDR" required autofocus>
                                                <label class="form-label">Jumlah</label>
                                                    @error('jumlah')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select name="jenis" id="" class="form-select @error('jenis') is-invalid @enderror" required>
                                                <option value="">Jenis Donasi</option>
                                                <option value="Zakat">Zakat</option>
                                                <option value="Infaq">Infaq</option>
                                                <option value="Sedekah">Sedekah</option>
                                            </select>
                                            <label for="subject">Jenis Donasi</label>
                                        </div>
                                        @error('jenis')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pembayaran" value="DANA" id="dana" required>
                                        <label class="form-check-label" for="dana">
                                        <img class="img-flu id" src="aset/img/dana.png" alt="" style="width: 90px; heigth: 50px;">
                                        </label>
                                        <br>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pembayaran" value="BCA" id="bca" required>
                                        <label class="form-check-label" for="bca">
                                        <img class="img-fluid" src="aset/img/BCA.png" alt="" style="width: 90px; heigth: 50px;">
                                        </label>
                                        <br>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pembayaran" value="BNI" id="bni" required>
                                        <label class="form-check-label" for="bni">
                                        <img class="img-fluid" src="aset/img/bni.png" alt="" style="width: 90px; heigth: 50px;">
                                        </label>
                                        <br>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pembayaran" value="Gopay" id="gopay" required>
                                        <label class="form-check-label" for="gopay">
                                        <img class="img-fluid" src="aset/img/gopay.png" alt="" style="width: 90px; heigth: 50px;">
                                        </label>
                                        <br>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pembayaran" value="BJB" id="bjb">
                                        <label class="form-check-label" for="bjb">
                                        <img class="img-fluid" src="aset/img/bjb.png" alt="" style="width: 90px; heigth: 50px;">
                                        </label>
                                        <br>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pembayaran" value="Mandiri" id="mandiri" required>
                                        <label class="form-check-label" for="mandiri">
                                        <img class="img-fluid" src="aset/img/mandiri.png" alt="" style="width: 90px; heigth: 50px;">
                                        </label>
                                        <br>
                                        </div>
                                    </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" name="kirim" type="submit">Kirim Donasi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
        <center><div><b> Silahkan isi data diatas :)</b></div></center>

       
@endsection
