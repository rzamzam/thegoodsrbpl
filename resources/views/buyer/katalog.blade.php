@extends('layouts.layout')
@section('isi')

<div class="container">
    <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
        <div class="col">
            <div class="card card-product">
                <div class="card-body">
                    <div class="text-center position-relative">
                        <img src="../assets/img/shoes.png" class="mb-3 img-fluid">
                    </div>
                    <h2 class="fs-6">
                        <b>Sepatu</b>
                    </h2>
                    <div class="align-items-center mt-3">
                        <div>
                            <span class="text-dark">Rp 300.000</span>
                        </div>
                        <div class="pt-3 text-center row">
                            <div class="col-3">
                                <a type="button" id="down_sepatu" class="sepatu" onclick="down(this.className)"><img src="{{asset('../assets/img/min.png')}}" alt="min" style="width: 20px"></a>
                            </div>
                            <div class="col-6">
                                <input type="hidden" id="kuantitas_sepatu" value="0" name="jumlah_sepatu">
                                <span class="" id="jumlah_sepatu">0 pcs</span>
                            </div>
                            <div class="col-3">
                                <a type="button" id="up_sepatu" class="sepatu" onclick="up(this.className)"><img src="{{asset('../assets/img/plus.png')}}" alt="plus" style="width: 20px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-product">
                <div class="card-body">
                    <div class="text-center position-relative">
                        <img src="../assets/img/sandal.png" class="mb-3 img-fluid mb-5 mt-4">
                    </div>
                    <h2 class="fs-6 pt-3">
                        <b>Sandal</b>
                    </h2>
                    <div class="align-items-center mt-3">
                        <div>
                            <span class="text-dark">Rp 175.000</span>
                        </div>
                        <div class="pt-3 text-center row">
                            <div class="col-3">
                                <a type="button" id="down_sandal" class="sandal" onclick="down(this.className)"><img src="{{asset('../assets/img/min.png')}}" alt="min" style="width: 20px"></a>
                            </div>
                            <div class="col-6">
                                <input type="hidden" id="kuantitas_sandal" value="0" name="jumlah_sandal">
                                <span class="" id="jumlah_sandal">0 pcs</span>
                            </div>
                            <div class="col-3">
                                <a type="button" id="up_sandal" class="sandal" onclick="up(this.className)"><img src="{{asset('../assets/img/plus.png')}}" alt="plus" style="width: 20px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-product">
                <div class="card-body">
                    <div class="text-center position-relative pt-1">
                        <img src="../assets/img/snack.png" class="mb-3 mt-2 img-fluid">
                    </div>
                    <h2 class="fs-6 pt-2">
                        <b>Lays</b>
                    </h2>
                    <div class="align-items-center mt-3">
                        <div>
                            <span class="text-dark">Rp 20.000</span>
                        </div>
                        <div class="pt-3 text-center row">
                            <div class="col-3">
                                <a type="button" id="down_lays" class="lays" onclick="down(this.className)"><img src="{{asset('../assets/img/min.png')}}" alt="min" style="width: 20px"></a>
                            </div>
                            <div class="col-6">
                                <input type="hidden" id="kuantitas_lays" value="0" name="jumlah_lays">
                                <span class="" id="jumlah_lays">0 pcs</span>
                            </div>
                            <div class="col-3">
                                <a type="button" id="up_lays" class="lays" onclick="up(this.className)"><img src="{{asset('../assets/img/plus.png')}}" alt="plus" style="width: 20px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-product">
                <div class="card-body">
                    <div class="text-center position-relative pt-1">
                        <img src="../assets/img/cocacola.png" class="mb-4 mt-4 img-fluid">
                    </div>
                    <h2 class="fs-6 pt-2">
                        <b>Coca Cola Kaleng</b>
                    </h2>
                    <div class="align-items-center mt-3">
                        <div>
                            <span class="text-dark">Rp 10.000</span>
                        </div>
                        <div class="pt-3 text-center row">
                            <div class="col-3">
                                <a type="button" id="down_cocacola" class="cocacola" onclick="down(this.className)"><img src="{{asset('../assets/img/min.png')}}" alt="min" style="width: 20px"></a>
                            </div>
                            <div class="col-6">
                                <input type="hidden" id="kuantitas_cocacola" value="0" name="jumlah_cocacola">
                                <span class="" id="jumlah_cocacola">0 pcs</span>
                            </div>
                            <div class="col-3">
                                <a type="button" id="up_cocacola" class="cocacola" onclick="up(this.className)"><img src="{{asset('../assets/img/plus.png')}}" alt="plus" style="width: 20px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-product">
                <div class="card-body">
                    <div class="text-center position-relative">
                        <img src="../assets/img/tisu.png" class="mb-2 img-fluid">
                    </div>
                    <h2 class="fs-6 pt-1">
                        <b>Paseo</b>
                    </h2>
                    <div class="align-items-center mt-3">
                        <div>
                            <span class="text-dark">Rp 13.000</span>
                        </div>
                        <div class="pt-3 text-center row">
                            <div class="col-3">
                                <a type="button" id="down_paseo" class="paseo" onclick="down(this.className)"><img src="{{asset('../assets/img/min.png')}}" alt="min" style="width: 20px"></a>
                            </div>
                            <div class="col-6">
                                <input type="hidden" id="kuantitas_paseo" value="0" name="jumlah_paseo">
                                <span class="" id="jumlah_paseo">0 pcs</span>
                            </div>
                            <div class="col-3">
                                <a type="button" id="up_paseo" class="paseo" onclick="up(this.className)"><img src="{{asset('../assets/img/plus.png')}}" alt="plus" style="width: 20px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-product">
                <div class="card-body">
                    <div class="text-center position-relative">
                        <img src="../assets/img/oil.png" class="mb-3 mt-1 img-fluid">
                    </div>
                    <h2 class="fs-6 pt-1">
                        <b>Vionelli Oil</b>
                    </h2>
                    <div class="align-items-center mt-3">
                        <div>
                            <span class="text-dark">Rp 50.000</span>
                        </div>
                        <div class="pt-3 text-center row">
                            <div class="col-3">
                                <a type="button" id="down_oil" class="oil" onclick="down(this.className)"><img src="{{asset('../assets/img/min.png')}}" alt="min" style="width: 20px"></a>
                            </div>
                            <div class="col-6">
                                <input type="hidden" id="kuantitas_oil" value="0" name="jumlah_oil">
                                <span class="" id="jumlah_oil">0 pcs</span>
                            </div>
                            <div class="col-3">
                                <a type="button" id="up_oil" class="oil" onclick="up(this.className)"><img src="{{asset('../assets/img/plus.png')}}" alt="plus" style="width: 20px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-product">
                <div class="card-body">
                    <div class="text-center position-relative">
                        <img src="../assets/img/gula.png" class="mb-3 img-fluid">
                    </div>
                    <h2 class="fs-6 pt-1">
                        <b>Gulaku</b>
                    </h2>
                    <div class="align-items-center mt-3">
                        <div>
                            <span class="text-dark">Rp 17.000</span>
                        </div>
                        <div class="pt-3 text-center row">
                            <div class="col-3">
                                <a type="button" id="down_gulaku" class="gulaku" onclick="down(this.className)"><img src="{{asset('../assets/img/min.png')}}" alt="min" style="width: 20px"></a>
                            </div>
                            <div class="col-6">
                                <input type="hidden" id="kuantitas_gulaku" value="0" name="jumlah_gulaku">
                                <span class="" id="jumlah_gulaku">0 pcs</span>
                            </div>
                            <div class="col-3">
                                <a type="button" id="up_gulaku" class="gulaku" onclick="up(this.className)"><img src="{{asset('../assets/img/plus.png')}}" alt="plus" style="width: 20px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-product">
                <div class="card-body">
                    <div class="text-center position-relative">
                        <img src="../assets/img/odol.png" class="mb-3 mt-1 img-fluid">
                    </div>
                    <h2 class="fs-6 pt-1">
                        <b>Pepsodent</b>
                    </h2>
                    <div class="align-items-center mt-3">
                        <div>
                            <span class="text-dark">Rp 15.000</span>
                        </div>
                        <div class="pt-3 text-center row">
                            <div class="col-3">
                                <a type="button" id="down_odol" class="odol" onclick="down(this.className)"><img src="{{asset('../assets/img/min.png')}}" alt="min" style="width: 20px"></a>
                            </div>
                            <div class="col-6">
                                <input type="hidden" id="kuantitas_odol" value="0" name="jumlah_odol">
                                <span class="" id="jumlah_odol">0 pcs</span>
                            </div>
                            <div class="col-3">
                                <a type="button" id="up_odol" class="odol" onclick="up(this.className)"><img src="{{asset('../assets/img/plus.png')}}" alt="plus" style="width: 20px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-product">
                <div class="card-body">
                    <div class="text-center position-relative">
                        <img src="../assets/img/mama.png" class="mb-3 mt-1 img-fluid">
                    </div>
                    <h2 class="fs-6 pt-1">
                        <b>Mama Lemon</b>
                    </h2>
                    <div class="align-items-center mt-3">
                        <div>
                            <span class="text-dark">Rp 12.500</span>
                        </div>
                        <div class="pt-3 text-center row">
                            <div class="col-3">
                                <a type="button" id="down_mama" class="mama" onclick="down(this.className)"><img src="{{asset('../assets/img/min.png')}}" alt="min" style="width: 20px"></a>
                            </div>
                            <div class="col-6">
                                <input type="hidden" id="kuantitas_mama" value="0" name="jumlah_mama">
                                <span class="" id="jumlah_mama">0 pcs</span>
                            </div>
                            <div class="col-3">
                                <a type="button" id="up_mama" class="mama" onclick="up(this.className)"><img src="{{asset('../assets/img/plus.png')}}" alt="plus" style="width: 20px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-product">
                <div class="card-body">
                    <div class="text-center position-relative">
                        <img src="../assets/img/deterjen.png" class="mb-3 mt-1 img-fluid">
                    </div>
                    <h2 class="fs-6 pt-1">
                        <b>Tide Deterjen</b>
                    </h2>
                    <div class="align-items-center mt-3">
                        <div>
                            <span class="text-dark">Rp 275.000</span>
                        </div>
                        <div class="pt-3 text-center row">
                            <div class="col-3">
                                <a type="button" id="down_tide" class="tide" onclick="down(this.className)"><img src="{{asset('../assets/img/min.png')}}" alt="min" style="width: 20px"></a>
                            </div>
                            <div class="col-6">
                                <input type="hidden" id="kuantitas_tide" value="0" name="jumlah_tide">
                                <span class="" id="jumlah_tide">0 pcs</span>
                            </div>
                            <div class="col-3">
                                <a type="button" id="up_tide" class="tide" onclick="up(this.className)"><img src="{{asset('../assets/img/plus.png')}}" alt="plus" style="width: 20px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
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
    <div class="row text-center mt-5">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card card-product">
                <div class="card-body">
                    <h1 style="font-size:35px; color:#fcda27">
                        <b>Total Price</b>
                    </h1>
                    <div class="align-items-center mt-1 mb-2">
                        <div>
                            <span class="text-dark fs-3" id="totalPrice">Rp 0</span>
                        </div>
                    </div>
                    <button type="button" class="btn btn-warning mt-3 w-50 mb-4">Order</button>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
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

<script>
    function down(className){
        let text = document.getElementById('jumlah_' + className).textContent; //mendapatkan text dari jumlah barang
        let jumlah = parseInt(text); //mendapatkan angka spesifik jumlah

        //antisipasi jumlah bersifat negatif
        if(jumlah>0){
            jumlah--;
            document.getElementById('kuantitas_' + className).value = jumlah; //masukkan perubahan ke input value

            //decrement karena fungsi down
            document.getElementById('jumlah_' + className).innerHTML = jumlah + " pcs";

            let totalHarga = document.getElementById('totalPrice').textContent;
            let harga = totalHarga.split('Rp');

            //hitung harga baru sesuai dengan jenis sampah yang diubah
            let hargaBaru = parseInt(harga[1]);

            switch(className){
                case 'sepatu':
                hargaBaru-=300000;
                break;
                case "sandal":
                hargaBaru-=175000;
                break;
                case "lays":
                hargaBaru-=20000;
                break;
                case "cocacola":
                hargaBaru-=10000;
                break;
                case "paseo":
                hargaBaru-=13000;
                break;
                case "oil":
                hargaBaru-=50000;
                break;
                case "gulaku":
                hargaBaru-=17000;
                break;
                case "odol":
                hargaBaru-=15000;
                break;
                case "mama":
                hargaBaru-=12500;
                break;
                case "tide":
                hargaBaru-=275000;
                break;
            }

            //update total price dan bpoints
            document.getElementById('totalPrice').textContent = 'Rp' + hargaBaru;
        }
    }

    function up(className){
        let text = document.getElementById('jumlah_' + className).textContent; //mendapatkan text dari jumlah barang
        let jumlah = parseInt(text); //mendapatkan angka spesifik jumlah
        jumlah++; //increment karena fungsi up
        document.getElementById('kuantitas_' + className).value = jumlah; //masukkan perubahan ke input value
        document.getElementById('jumlah_' + className).innerHTML = jumlah + " pcs";

        //ambil data harga
        let totalHarga = document.getElementById('totalPrice').textContent;
        let harga = totalHarga.split('Rp');

        //hitung harga baru sesuai dengan jenis sampah yang diubah
        let hargaBaru = parseInt(harga[1]);

        switch(className){
            case 'sepatu':
            hargaBaru+=300000;
            break;
            case "sandal":
            hargaBaru+=175000;
            break;
            case "lays":
            hargaBaru+=20000;
            break;
            case "cocacola":
            hargaBaru+=10000;
            break;
            case "paseo":
            hargaBaru+=13000;
            break;
            case "oil":
            hargaBaru+=50000;
            break;
            case "gulaku":
            hargaBaru+=17000;
            break;
            case "odol":
            hargaBaru+=15000;
            break;
            case "mama":
            hargaBaru+=12500;
            break;
            case "tide":
            hargaBaru+=275000;
            break;
        }
        //update total price dan bpoints
        document.getElementById('totalPrice').textContent = 'Rp' + hargaBaru;
    }
</script>
@endsection
