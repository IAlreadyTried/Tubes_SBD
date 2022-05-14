@extends('layout.main')
@section('container-1')
<div class="container-fluid" style="padding:0px;position: relative;">
    <div style="margin: 0px; height:130px;color:#292a30;padding:0px;" class="container row bg-dark">
        <div class="col-2" style="background-color:aqua;">
            <h2>keren</h2>
        </div>
    </div>
    <div class="row align-items-center" style="background-color:rgb(239, 239, 239);margin:0px;padding:0px;height:44px">
        <h5 style="font-size: 17px;margin-top:5px;color:rgb(125, 125, 125)">Recent</h5>
    </div>
    <div class="row  bagian-kiri" style="background-color:rgb(255, 255, 255);height:500px;">
        <h5 style="color: #a1a1a1">No recent search...</h5>
    </div>
    <div id="mau-dihilangkan-kiri" class="row align-self-end bagian-kiri" style="background-color:#e5f8fe;position:sticky;bottom:0px;padding:0px;height:70px;width:100%;box-shadow:inset 0px 0px 3px 0px rgb(87, 87, 87);overflow:hidden">
        <div class="col-9">
            <span class="row" style="margin-top: 10px;">
                <h5 style="font-size: 15px">Improve public transit information for your city</h5>
                <h1>mantav</h1>
            </span>
            <span class="row" style="margin-top: -5px;">
                <h5 style="font-size:13.5px">Join the Mooviter Community</h5>
            </span>
        </div>
        <div class="col-2 offset-1" style="position:relative;">
            <img style="position: absolute;top:-10px;right:-20px;" src="img/moovit_globe.png" alt="">
        </div>
    </div>
</div>
@endsection
@section('container-2')
    <div class="row navbar-kanan-atas">
        <div class="col-3 align-self-center">
            <img id="panah-kanan" onclick="geserKanan()" style="width: 13px;margin-bottom:5px;margin-left:7px;transition:0.3s;" src="img/panahKanan.png" alt="">
        </div>
    </div>
    <div style="background-color:blueviolet;height:10.5%;" class="row">
        <h1>Hello, World!</h1>
    </div>
    <div style="box-shadow: 1px 0px 7px 1px rgb(139, 139, 139);height:35px" class="row align-items-center">
        <h5 style="font-size: 13px;margin-top:7px;">Show more</h5>
    </div>
@endsection