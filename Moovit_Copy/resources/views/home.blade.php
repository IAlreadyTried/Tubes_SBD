@php
    // if(isset($_GET['lokasi'])) {
    //     $lokasinya = $_GET['lokasi'];
    // $conn = mysqli_connect('localhost', 'root', '', 'moovit_database');
    // $result = mysqli_query($conn, "SELECT * FROM stasiuns WHERE lokasi = '$lokasinya'" );
    // $namalokasi = $result['nama'];
    // } else {
    //     $lokasinya = "src='https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d86698.54390503271!2d98.67868151665947!3d3.5884505105432827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1652979364763!5m2!1sid!2sid' width='107%' height='100%' style='border:0;' allowfullscreen=' loading='lazy' referrerpolicy='no-referrer-when-downgrade'";
    //     $namalokasi = "";
    // }
    // $testing = $request->session()->all();
    if(isset($_GET['waktu'])) {
        $awalnya = $_SESSION['awal'];
        $conn = mysqli_connect('localhost', 'root', '', 'moovit_database');
        $result = mysqli_query($conn, "SELECT namajalan FROM locations WHERE nama LIKE '%$awalnya%'" );
        $row = mysqli_fetch_assoc($result);
        $row = $row['namajalan'];
        $halte =  mysqli_query($conn, "SELECT * FROM haltes WHERE namajalan = '$row'" );
        $halteawal = mysqli_fetch_assoc($halte);

        $akhirnya = $_SESSION['akhir'];
        $result = mysqli_query($conn, "SELECT namajalan FROM locations WHERE nama LIKE '%$akhirnya%'" );
        $row = mysqli_fetch_assoc($result);
        $row = $row['namajalan'];
        $halte =  mysqli_query($conn, "SELECT * FROM haltes WHERE namajalan = '$row'" );
        $halteakhir = mysqli_fetch_assoc($halte);


        $halteawalnya = $halteawal['nama'];
        $halteakhirnya = $halteakhir['nama'];
        $result = mysqli_query($conn, "SELECT * FROM kendaraans WHERE halte LIKE '%$halteawalnya%' AND halte LIKE '%$halteakhirnya%'" );
        $row = mysqli_fetch_assoc($result);
        $kendaraan = $row;

        $halte_kendaraan = explode(";",$kendaraan['halte']);
        $waktu_kendaraan = explode(";", $kendaraan['waktu']);

        $first = array_search($halteawalnya, $halte_kendaraan);
        $last = array_search($halteakhirnya, $halte_kendaraan);

        $berangkat = array(
            'berangkat_halte' => $halteawalnya, 
            'berangkat_waktu' =>$waktu_kendaraan[$first],
            'kendaraan' => $kendaraan['nama']
        );
        $sampai = array(
            'sampai_halte' => $halteakhirnya, 
            'sampai_waktu' =>$waktu_kendaraan[$last],
            'kendaraan' => $kendaraan['nama']
        );
    } else {
        $last = "0";
        $berangkat = array(
            'berangkat_halte' => '', 
            'berangkat_waktu' =>'',
            'kendaraan' => ''
        );
        $sampai = array(
            'sampai_halte' => '', 
            'sampai_waktu' =>'',
            'kendaraan' => ''
        );
    }
        if(isset($_GET['awal'])) {
            $tambahan = $_GET['awal'];
            $nama = $_SESSION['username'];
            $conn = mysqli_connect('localhost', 'root', '', 'moovit_database');
            $querynya = ("UPDATE penggunas SET awal= '$tambahan' WHERE username='$nama'");
            mysqli_query($conn, $querynya);
            $_SESSION['sudah'] = 'sudah';
            $_SESSION['awal'] = $tambahan;
            // header("Refresh:0");
        }

    if (isset($_SESSION['awal'])) {
        $awal = $_SESSION['awal'];
    }else {
        $awal = "";
    }

        if(isset($_GET['akhir'])) {
            $tambahan = $_GET['akhir'];
            $nama = $_SESSION['username'];
            $conn = mysqli_connect('localhost', 'root', '', 'moovit_database');
            $querynya = ("UPDATE penggunas SET akhir= '$tambahan' WHERE username='$nama'");
            mysqli_query($conn, $querynya);
            $_SESSION['sudah2'] = 'sudah2';
            $_SESSION['akhir'] = $tambahan;
            // header("Refresh:0");
        }
    if (isset($_SESSION['akhir'])) {
        $akhir = $_SESSION['akhir'];
    }else {
        $akhir = "";
    }
    
    
@endphp

@extends('layout.main')
@section('container-1')
<div class="container-fluid" style="padding:0px;position: relative;background-color:#292a30;">
    <div style="margin: 0px; height:130px;background-color:#292a30;padding:0px;" class="container align-items-center row">
        <div class="col-2 align-items-center justify-content-center" style="background-color:#292a30;padding:0px;">
            <img style="width: 20px;margin-left: 15px;" src="img/destinasi.jpg" alt="">
        </div>
        <div class="col-10" style="background-color:#292a30;padding:0px;">
            <form action="/home" method="POST">
                <div style="display:block;width:92.5%;background-color:white;height:34px;margin-bottom:12.5px;border-radius:5px;padding-top:3px;padding-left:10px;">
                    <span style="font-size:12px;font-weight:bold;width:50px;">Start</span>
                    <input value="<?php echo $awal; ?>" style="float:right;width:75%;margin-right:22.5px;border:none;outline:none;font-size:15px;" type="text" name="" id="Awal" placeholder="Choose starting point">
                </div>
                <div style="display:block;width:92.5%;background-color:white;height:34px;margin-top:12.5px;border-radius:5px;padding-top:3px;padding-left:10px;">
                    <span style="font-size:12px;font-weight:bold;width:50px;">End</span>
                    <input value="<?php echo $akhir; ?>" style="float:right;width:75%;margin-right:22.5px;border:none;outline:none;font-size:15px;" type="text" name="" id="Akhir" placeholder="Choose destination">
                </div>
            </form>
        </div>
    </div>
    <div style="padding: 0px" id="pilihan"></div>
    <div id="recent">
        @php
            if(isset($_SESSION['awal'])&&isset($_SESSION['akhir'])):
        @endphp
        <div class="row align-items-center" style="background-color:rgb(239, 239, 239);margin:0px;padding:0px;height:44px;display:none;">
            <h5 style="font-size: 17px;margin-top:5px;color:rgb(125, 125, 125)">Recent</h5>
        </div>
        <div class="row  bagian-kiri" style="background-color:rgb(255, 255, 255);height:500px;">
            <div style="height: 60px;background-color:#292a30;">
                <h5 style="color: #cecece;display:inline-block;font-size:17px;margin-top:8px;">Set your departure time</h5>
                <div style="display: inline-block;float:right;margin-right:13px;" class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                     @php
                     if(isset($_GET['waktu'])) {
                        echo $_GET['waktu'];
                     } else {
                         echo "12:00 AM";
                     }
                     @endphp
                    </button>
                
                    <ul style="max-height: 200px;overflow-y:scroll;z-index = 100000;" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @php
                        if(isset($_GET['lokasi'])) {
                            $lokasinyabro = $_GET['lokasi'];
                        
                            for($i = 0; $i < 12; $i++) {
                                $menit = 0;
                                if($i == 0) {
                                    $a = 12;
                                } else {
                                    $a = $i;
                                }
                                for ($j=0; $j < 4; $j++) { 
                                    if($j == 0) {
                                        $k = "00";
                                    } else {
                                        $k = $menit;
                                    }
                                    echo "<li><a class='dropdown-item' href='?lokasi=$lokasinyabro&waktu=$a:$k AM'>$a:$k AM</a></li>";
                                    $menit += 15;
                                }
                            }
                            for($i = 0; $i < 12; $i++) {
                                $menit = 0;
                                if($i == 0) {
                                    $a = 12;
                                } else {
                                    $a = $i;
                                }
                                for ($j=0; $j < 4; $j++) { 
                                    if($j == 0) {
                                        $k = "00";
                                    } else {
                                        $k = $menit;
                                    }
                                    echo "<li><a class='dropdown-item' href='?lokasi=$lokasinyabro&waktu=$a:$k PM'>$a:$k PM</a></li>";
                                    $menit += 15;
                                }
                            }
                        }
                        @endphp
                    </ul>
                </div>
            </div>
            <div style="height: 100%;width:100%;padding:0px;">
                <div style="background-color:#ecf0f1;height:35px;">
                    <p style="margin-left:10px;line-height:30px;">Suggested Routes<a href="#" style="float: right;margin-right:20px;text-decoration:none;"><img style="width:20px;margin-bottom:2px;" src="img/sharekan.png">Share</a></p>
                </div>
                @php
                if(isset($_GET['waktu'])) {
                    if($_GET['waktu']!= $berangkat['berangkat_waktu']) {
                        $sembunyikan = "0";
                    } else {
                        $sembunyikan = "1";
                    }
                } else {
                    $sembunyikan = "0";
                }
                @endphp
                @php
                    if($sembunyikan == "0") {
                        echo "<h5 style='margin-left:21px;font-size:20px;margin-top:20px;'>Tidak ada rute pada jam yang dipilih</h5>";
                    }
                @endphp
                <a style="text-decoration: none;" class="link-bus" href="#">
                <div style="opacity:<?= $sembunyikan; ?>;width:100%;height:111.2px;position: relative;padding:0px;margin:0px;" class="container row tampilan-bus">
                    <div class="col-2 align-items-center">
                        <div style="text-align:center;font-size:28px;margin-top:25px;color:black;" class=""><?php echo (($last * 10)+10); ?></div>
                        <div style="text-align:center;margin-top:-10px;font-size:10px;color:black;" class="">MIN</div>
                    </div>
                    <div style="height:111.2px;padding-top:20px;padding-bottom:20px;" class="col-10 align-items-center">
                        <div style="height: 32px;width:231px;" class="row">
                            <div class="col-1"><img style="width: 20px;display:inline-block;float:left;margin-top:1px;" src="img/walking.svg" alt=""></div> 
                            <div class="col-2" style="padding:0px;"><p style="display:inline-block;font-size:15px;margin-top:5px;margin-left:8px;color:black;">11</p><img style="float:right;width:10px;margin-top:12px;" src="img/panahKanan.png" alt=""></div>
                            <div class="col-4" style="padding:0px;text-align:center;"><span style="display: inline-block;color:black;width:90%;height:32px;border-radius:5px 5px 0px 0px;border-top:2px solid rgb(210, 210, 210);border-left:2px solid rgb(210, 210, 210);border-right:2px solid rgb(210, 210, 210);"><img style="float:left;width:25px;margin-top:2px;margin-left:4px;" src="img/bus.svg" alt=""><p style="font-weight: bold;margin-top:1px;"><?= $berangkat['kendaraan']; ?></p></span></div>
                            <div class="col-1" style="padding:0px;"><img style="float:left;width:10px;margin-top:12px;" src="img/panahKanan.png" alt=""></div>
                            <div class="col-2" style="padding:0px;"><img style="width: 20px;display:inline-block;float:left;margin-top:1px;" src="img/walking.svg" alt=""><p style="display:inline-block;font-size:15px;margin-top:5px;margin-left:8px;color:black;">5</p></div>
                        </div>
                        <div style="height: 32px;max-height:32px;" class="row">
                            <div style="font-size:13px;color:#383838;" class="row">Leaves from <?= $berangkat['berangkat_halte'] ?>, arrive at <?= $sampai['sampai_halte']; ?> </div>
                            <div style="font-size:13px;color:#383838;" class="row"><?= $berangkat['berangkat_waktu']; ?> - <?= $sampai['sampai_waktu']; ?></div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
        @php
            else:
        @endphp
        <div class="row align-items-center" style="background-color:rgb(239, 239, 239);margin:0px;padding:0px;height:44px">
            <h5 style="font-size: 17px;margin-top:5px;color:rgb(125, 125, 125)">Recent</h5>
        </div>
        <div class="row  bagian-kiri" style="background-color:rgb(255, 255, 255);height:500px;">
            <h5 style="color: #a1a1a1">No recent locations...</h5>
        </div>
        @php
            endif;
        @endphp
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
            <h5 style="padding:0px;"> <a href="/appsupport">App Support</a></h5>
        </div>
        <a class="link-halaman-pertama" style="width: 100%;height:100%;display:block;position:absolute;" href="/appsupport"></a>
        {{-- <div id="halaman-pertama" style="width: 0px;height:0px;position:absolute;top:0px;left:0px;background-color:salmon;"></div> --}}
    </div>
    <div style="box-shadow: 1px -2px 7px 1px rgb(139, 139, 139);box-shadow: 1px 0px 7px 1px rgb(139, 139, 139);height:40px" class="row align-items-center">
        <h5 style="font-size: 13px;margin-top:7px;">Show more</h5>
    </div>
    <div>
        <img src="img/tambahan.jpg" alt="" style="width:200px;margin-left:-12px">
    </div>
@endsection
