@extends('layout.main')
@section('container-1')
<div class="container-fluid" style="padding:0px;position: relative;background-color:#292a30;">
    <div style="margin: 0px; height:130px;background-color:#292a30;padding:0px;" class="container align-items-center row">
        <div class="col-2 align-items-center justify-content-center" style="background-color:#292a30;padding:0px;">
        </div>
        <div class="col-6" style="background-color:#292a30;padding:0px;">
            <form class="form-inline">
                <div class="input-group" style="width: 225px">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><img src="https://openclipart.org/image/2400px/svg_to_png/185356/1382519138.png" alt="" width="25px"></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </form>
        </div>
    </div>
    <div style="padding: 0px" id="pilihan"></div>
    <div id="recent">
        <div class="row align-items-center" style="background-color:rgb(239, 239, 239);margin:0px;padding:0px;height:44px">
            <h5 style="font-size: 17px;margin-top:5px;color:rgb(125, 125, 125)">Temanbus Medan</h5>
        </div>
        <div class="row  bagian-kiri" style="background-color:rgb(255, 255, 255);">
            <div class="bullet">
                <img style="display: inline-block" src="https://th.bing.com/th/id/R.1aa09fcd2e6add0f83b59fb1f310a154?rik=BuC%2fXTPRMETwVw&riu=http%3a%2f%2fwww.animationxpress.com%2fwp-content%2fuploads%2f2017%2f05%2fTayo-logo.jpg&ehk=89qFQr4ZfOupyWEqCSNBtX7mXh%2byVKCi8kJf%2btswCJY%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1" width="25px" />
                <p style="display: inline-block">Pinang Baris - Lapangan Merdeka</p>
            </div>
            <div class="bullet">
                <img style="display: inline-block" src="https://th.bing.com/th/id/R.1aa09fcd2e6add0f83b59fb1f310a154?rik=BuC%2fXTPRMETwVw&riu=http%3a%2f%2fwww.animationxpress.com%2fwp-content%2fuploads%2f2017%2f05%2fTayo-logo.jpg&ehk=89qFQr4ZfOupyWEqCSNBtX7mXh%2byVKCi8kJf%2btswCJY%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1" width="25px" />
                <p style="display: inline-block">Pinang Baris - Lapangan Asyik</p>
            </div>
            <div class="bullet">
                <img style="display: inline-block" src="https://th.bing.com/th/id/R.1aa09fcd2e6add0f83b59fb1f310a154?rik=BuC%2fXTPRMETwVw&riu=http%3a%2f%2fwww.animationxpress.com%2fwp-content%2fuploads%2f2017%2f05%2fTayo-logo.jpg&ehk=89qFQr4ZfOupyWEqCSNBtX7mXh%2byVKCi8kJf%2btswCJY%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1" width="25px" />
                <p style="display: inline-block">Pinang Baris - Lapangan Hore</p>
            </div>
        </div>
        <div class="row  bagian-kiri" style="background-color:rgb(255, 255, 255);height:500px;">
        </div>
        <div id="mau-dihilangkan-kiri" class="row align-self-end bagian-kiri" style="background-color:#e5f8fe;position:sticky;bottom:0px;padding:0px;height:70px;width:100%;box-shadow:inset 0px 0px 3px 0px rgb(87, 87, 87);overflow:hidden">
            <div class="col-9">
                <span class="row" style="margin-top: 10px;">
                    <h5 style="font-size: 15px">Improve public transit information for your city</h5>
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
</div>
@endsection
@section('container-2')
    <div class="row navbar-kanan-atas">
        <div class="col-3 align-self-center">
            <img id="panah-kanan" onclick="geserKanan()" style="width: 13px;margin-bottom:5px;margin-left:7px;transition:0.3s;" src="img/panahKanan.png" alt="">
        </div>
    </div>
    <div style="background-color:rgb(234, 232, 232);position: relative;" class="row">
        <hr>
        <div class="pilihan-halaman" style="padding-left:20px;padding-top:12.5px;">
            <div style="width: 25px;height:5px;position:absolute;top:25px;left:20px;background-color:#f3471a;border-radius:5px;"></div>
            <h5 style="padding:0px;"> <a href="/about"> About Moovit</a> </h5>
            <p style="padding:0px;">Mobility as a Service products for Cities & Transit Agencies</p>
        </div>
        <a class="link-halaman-pertama" style="width: 100%;height:100%;display:block;position:absolute;" href="/about"></a>
        {{-- <div id="halaman-pertama" style="width: 0px;height:0px;position:absolute;top:0px;left:0px;background-color:salmon;"></div> --}}
    </div>
    <div style="background-color:rgb(234, 232, 232);position: relative;" class="row">
        <hr>
        <div class="pilihan-halaman" style="padding-left:20px;padding-top:12.5px;">
            <div style="width: 25px;height:5px;position:absolute;top:25px;left:20px;background-color:#1db969;border-radius:5px;"></div>
            <h5 style="padding:0px;"> <a href="/about">News & Press</a> </h5>
            <p style="padding:0px;">In the News, Press Releases, Case Studies</p>
        </div>
        <a class="link-halaman-pertama" style="width: 100%;height:100%;display:block;position:absolute;" href="/newspress"></a>
        {{-- <div id="halaman-pertama" style="width: 0px;height:0px;position:absolute;top:0px;left:0px;background-color:salmon;"></div> --}}
    </div>
    <div style="background-color:rgb(234, 232, 232);position: relative;" class="row">
        <hr>
        <div class="pilihan-halaman" style="padding-left:20px;padding-top:12.5px;">
            <div style="width: 25px;height:5px;position:absolute;top:25px;left:20px;background-color:#f7a20c;border-radius:5px;"></div>
            <h5 style="padding:0px;"> <a href="/community">Community</a> </h5>
            <p style="padding:0px;">Mapping the World of Transportation Together</p>
        </div>
        <a class="link-halaman-pertama" style="width: 100%;height:100%;display:block;position:absolute;" href="community"></a>
        {{-- <div id="halaman-pertama" style="width: 0px;height:0px;position:absolute;top:0px;left:0px;background-color:salmon;"></div> --}}
    </div>
    <div style="background-color:rgb(234, 232, 232);position: relative;" class="row">
        <hr>
        <div class="pilihan-halaman" style="padding-left:20px;padding-top:25px;">
            <div style="width: 25px;height:5px;position:absolute;top:35px;left:20px;background-color:#003e54;border-radius:5px;"></div>
            <h5 style="padding:0px;"> <a href="/about">App Support</a></h5>
        </div>
        <a class="link-halaman-pertama" style="width: 100%;height:100%;display:block;position:absolute;" href="#"></a>
        {{-- <div id="halaman-pertama" style="width: 0px;height:0px;position:absolute;top:0px;left:0px;background-color:salmon;"></div> --}}
    </div>
    <div style="box-shadow: 1px -2px 7px 1px rgb(139, 139, 139);box-shadow: 1px 0px 7px 1px rgb(139, 139, 139);height:40px" class="row align-items-center">
        <h5 style="font-size: 13px;margin-top:7px;">Show more</h5>
    </div>
    <div>
        <img src="img/tambahan.jpg" alt="" style="width:200px;margin-left:-12px">
    </div>
@endsection
