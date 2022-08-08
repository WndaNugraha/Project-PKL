@extends('layouts.user2')

@if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">   
        </button>
      </div>
    @endif
    
    <?php
            if (isset($_POST['kirim'])) {
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $no = $_POST['no'];
                $jenis = $_POST['jenis'];
                $jumlah = $_POST['jumlah'];
                $pembayaran = $_POST['pembayaran'];
        ?>

        <section>
        <div class="row justify-content-center">
            <div class="col-lg-7">
             @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">   
                </button>
                </div>
            @endif
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="card">
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <th>Nama</th>
                                            <td>{{$donatur->nama}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        
        <?php
            }
        ?>