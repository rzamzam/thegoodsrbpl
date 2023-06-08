@extends('layouts.layout')
@section('css')
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
@endsection
@section('isi')

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
                                <p class="m-0  text-bold w-100">Invoice Id - <span class="gray-color">#1</span></p>
                                <p class="m-0  text-bold w-100">Order Id - <span class="gray-color">AB123456A</span></p>
                                <p class="m-0  text-bold w-100">Order Date - <span class="gray-color">22-01-2023</span></p>
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
                                            <p> 410 Terry Ave N,</p>
                                            <p>Seattle WA 98109,</p>
                                            <p>United States</p>
                                            <p>Contact: 1-206-266-1000</p>
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
                                <tr align="center">
                                    <td>Andoid Smart Phone</td>
                                    <td>3</td>
                                </tr>
                                <tr align="center">
                                    <td>Andoid Smart Phone</td>
                                    <td>3</td>
                                </tr>
                                <tr align="center">
                                    <td>Andoid Smart Phone</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        <div class="total-part" >
                                            <div class="total-left w-85 float-left" align="right">
                                                <p class="mt-3">Total Price</p>
                                            </div>
                                            <div class="total-right w-15 float-left text-bold" align="right">
                                                <p class="mt-3">$8000.00</p>
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
</div>

@endsection
