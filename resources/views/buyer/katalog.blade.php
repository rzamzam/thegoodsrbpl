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
