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
    <div class="row mt-4">
        <div class="col-11"></div>
        <div class="col-1">
            <div class="card card-product text-center" style="border:#fcda27;">
                    <a href="https://api.whatsapp.com/" type="button" ><svg xmlns="http://www.w3.org/2000/svg" height="4em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fcda27}</style><path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"/></svg></a>
            </div>
        </div>
    </div>
</div>

@endsection
