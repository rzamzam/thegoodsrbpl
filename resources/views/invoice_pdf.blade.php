



<html>
    <style>
        .m-0{
    margin: 0px;
}
.p-0{
    padding: 0px;
}
.pt-5{
    padding-top:5px;
}
.mt-10{
    margin-top:10px;
}
.text-center{
    text-align:center !important;
}
.w-100{
    width: 100%;
}
.w-50{
    width:50%;
}
.w-85{
    width:85%;
}
.w-15{
    width:15%;
}
.gray-color{
    color:#5D5D5D;
}
.text-bold{
    font-weight: bold;
}
.border{
    border:1px solid black;
}
table tr,th,td{
    border: 1px solid #d2d2d2;
    border-collapse:collapse;
    padding:7px 8px;
}
table tr th{
    background: #F4F4F4;
    font-size:15px;
}
table tr td{
    font-size:13px;
}
table{
    border-collapse:collapse;
}
.box-text p{
    line-height:10px;
}
.float-left{
    float:left;
}
.total-part{
    font-size:16px;
    line-height:12px;
}
.total-right p{
    padding-right:20px;
}

    </style>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card card-product">
                    <div class="card-body p-4">
                            <div class="head-title">
                                <h1 style="font-size:30px; " class="text-center">
                                    <b>Invoice</b>
                                </h1>
                            </div>
                            <div class="add-detail mt-10">
                                <div class="w-50 float-left mt-10">
                                    <p class="m-0  text-bold w-100">Order Id - <span class="gray-color">{{$purchases->purchase_id}}</span></p>
                                    <p class="m-0  text-bold w-100">Order Date - <span class="gray-color">{{$purchases->created_at->format('Y-m-d')}}</span></p>
                                </div>
                                <div class="w-50 float-left mt-10">
                                    <span class="logo fs-1" style="color:#fcda27">THEGOODS</span>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                            <div class="table-section bill-tbl w-100 mt-10 mt-4">
                                <table class="table w-100 mt-10">
                                    <tr class="text-center">
                                        <th class="w-50">From</th>
                                        <th class="w-50">To</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="box-text">
                                                <p>Sukolilo Dian Regency</p>
                                                <p>Surabaya</p>
                                                <p>Jawa Timur</p>
                                                <p>Contact: +62812 3456 7890</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="box-text">
                                                <p>{{$purchases->alamat}}</p>
                                                <p>{{Auth::user()->telepon}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="table-section bill-tbl w-100 mt-10">
                                <table class="table w-100 mt-10 text-center">
                                    <tr>
                                        <th class="w-50">Product Name</th>
                                        <th class="w-50">Qty</th>
                                    </tr>
                                    @if ($purchases->sepatu > 0)
                                    <tr align="center">
                                        <td>Sepatu</td>
                                        <td>{{$purchases->sepatu}}</td>
                                    </tr>
                                    @endif
                                    @if ($purchases->sandal > 0)
                                    <tr align="center">
                                        <td>Sandal</td>
                                        <td>{{$purchases->sandal}}</td>
                                    </tr>
                                    @endif
                                    @if ($purchases->lays > 0)
                                    <tr align="center">
                                        <td>Lays</td>
                                        <td>{{$purchases->lays}}</td>
                                    </tr>
                                    @endif
                                    @if ($purchases->cocacola > 0)
                                    <tr align="center">
                                        <td>Coca Cola</td>
                                        <td>{{$purchases->cocacola}}</td>
                                    </tr>
                                    @endif
                                    @if ($purchases->tissue > 0)
                                    <tr align="center">
                                        <td>Tissue</td>
                                        <td>{{$purchases->tissue}}</td>
                                    </tr>
                                    @endif
                                    @if ($purchases->oil > 0)
                                    <tr align="center">
                                        <td>Oil</td>
                                        <td>{{$purchases->oil}}</td>
                                    </tr>
                                    @endif
                                    @if ($purchases->gula > 0)
                                    <tr align="center">
                                        <td>Gula</td>
                                        <td>{{$purchases->gula}}</td>
                                    </tr>
                                    @endif
                                    @if ($purchases->pasta_gigi > 0)
                                    <tr align="center">
                                        <td>Pasta Gigi</td>
                                        <td>{{$purchases->pasta_gigi}}</td>
                                    </tr>
                                    @endif
                                    @if ($purchases->sabun_piring > 0)
                                    <tr align="center">
                                        <td>Sabun Piring</td>
                                        <td>{{$purchases->sabun_piring}}</td>
                                    </tr>
                                    @endif
                                    @if ($purchases->detergen > 0)
                                    <tr align="center">
                                        <td>Deterjen</td>
                                        <td>{{$purchases->detergen}}</td>
                                    </tr>
                                    @endif
                                    
                                    <tr>
                                        <td colspan="7">
                                            <div class="total-part" >
                                                <div class="total-left w-85 float-left" align="right">
                                                    <p class="mt-3">Total Price</p>
                                                </div>
                                                <div class="total-right w-15 float-left text-bold" align="right">
                                                    <p class="mt-3">Rp{{number_format($purchases->totalprice)}}</p>
                                                </div>
                                                <div style="clear: both;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
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
                        <a target="_blank" href="https://api.whatsapp.com/" type="button" ><svg xmlns="http://www.w3.org/2000/svg" height="4em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fcda27}</style><path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"/></svg></a>
                </div>
            </div>
        </div>
        <input type="button" onclick="window.print();" value="print a div!" />
    </div>
</html>


