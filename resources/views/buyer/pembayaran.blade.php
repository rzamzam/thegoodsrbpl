@extends('layouts.layout')
@section('isi')

<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card card-product">
                <div class="card-body p-4">
                    <h1 style="font-size:30px; color:#fcda27" class="text-center">
                        <b>Alamat Pengiriman</b>
                    </h1>
                    <div class="mt-1 mb-2">
                        <form>
                            <div class="form-group">
                                <label for="namaPenerima">Nama Penerima</label>
                                <input type="text" class="form-control mt-2" id="namaPenerima" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group mt-3">
                              <label for="noHP">Nomor Handphone</label>
                              <input type="number" class="form-control mt-2" id="noHP" placeholder="08xxxxxxxxxx">
                            </div>
                            <div class="form-group mt-3">
                                <label for="alamat">Alamat Lengkap Tujuan</label>
                                <input type="text" class="form-control mt-2" id="alamat" placeholder="Nama Jalan, Nomor Rumah, Kelurahan, Kecamatan, Kota, Provinsi">
                            </div>
                            <div class="form-group mt-3">
                                <label for="note">Note</label>
                                <input type="text" class="form-control mt-2" id="note" placeholder="Detail Lainnya">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>

    <div class="row mt-3 text-center ">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card card-product">
                <div class="card-body p-4">
                    <h1 style="font-size:30px; color:#fcda27" class="text-center">
                        <b>Metode Pembayaran</b>
                    </h1>
                    <div class="mt-1">
                        <img src="../assets/img/bca.png" style="width:40px">
                        <span class="fs-5">Bank BCA</span>
                    </div>
                    <div class="mt-3">
                        <span class="fs-5">No Rekening: </span>
                    </div>
                    <div class="mt-2">
                        <span class="fs-5">3786371017</span>
                    </div>
                    <div class="mt-2">
                        <span class="fs-5">A/N TheGoods</span>
                    </div>
                    <div class="mt-1 mb-2 ">
                        <button type="button" class="btn btn-warning mt-3 w-50 mb-4 ">Konfirmasi Pembayaran</button>
                        <br><small class="text-muted ">Lakukan konfirmasi pembayaran setelah melakukan pembayaran melalui transfer pada nomor rekening diatas dengan jumlah uang yang sesuai</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>

</div>

@endsection
