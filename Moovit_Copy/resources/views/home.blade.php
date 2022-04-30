@extends('layout.main')
@section('container-1')
    <div style="margin: 0px; height:125px;color:rgb(41, 41, 41);" class="container row bg-dark">
        <div class="col-2">
            <h1>Hi</h1>
        </div>
    </div>
@endsection
@section('container-2')
    <div class="row navbar-kanan-atas">
        <div class="col-3 align-self-center">
            <img id="panah-kanan" onclick="geserKanan()" style="width: 13px;margin-bottom:5px;margin-left:7px;transition:0.3s;" src="img/panahKanan.png" alt="">
        </div>
    </div>
@endsection