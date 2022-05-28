<?php 
// Ini yang kedua guysnah

    $kunci = $_GET['kunci'];
$conn = mysqli_connect('localhost', 'root', '', 'moovit_database');
$result = mysqli_query($conn, "SELECT * FROM locations WHERE nama LIKE '%$kunci%'" );
$rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    // var_dump($data);
?>

<?php foreach($rows as $row): ?>
    <?php
$perannya = $row['peran'];
$gambarnya = "";
switch ($perannya) {
    case "Universitas":
        $gambarnya = "14.png";
        break;
    case "Restaurant":
        $gambarnya = "restaurant.png";
        break;
    default:
        $gambarnya = "location.png";
} 
?>
<a style="text-decoration: none;" href="/?lokasi=<?php echo htmlspecialchars($row['lokasi']);?>&akhir=<?php echo $row['nama'];?>">
    <div class="row" style="margin:0px;width: 100%;height:65px;background-color:rgb(255, 255, 255);border-bottom:1px solid #ababab;box-sizing:border-box;z-index:1000;">
        <div style="text-align:center;line-height:65px;" class="col-2"><img style="width: 20px" src="../img/<?php echo $gambarnya; ?>" alt=""></div>
        <div style="line-height:17px;" class="col-10 d-flex align-items-center">
            <div class="">
                <div class="row" style="color: black;"><?php echo $row['nama'];?></div>
                <div class="row" style="font-size: 12px;color:#868686;"><?php echo $row['peran'];?> . <?php echo $row['namajalan'];?> . <?php echo $row['namakota'];?></div>
            </div>
        </div>
    </div>
</a>
<?php endforeach; ?>