<?php 
    $kunci = $_GET['kunci'];
$conn = mysqli_connect('localhost', 'root', '', 'moovit_database');
$result = mysqli_query($conn, "SELECT * FROM stasiuns WHERE nama LIKE '%$kunci%'" );
$rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    // var_dump($data);
?>

<?php foreach($rows as $row): ?>
<div class="row" style="margin:0px;width: 100%;height:65px;background-color:rgb(255, 255, 255);border-bottom:1px solid rgb(60, 60, 60);box-sizing:border-box;z-index:1000;">
    <div style="text-align:center;line-height:65px;" class="col-2"><img style="width: 20px" src="../img/location.png" alt=""></div>
    <div style="line-height:17px;" class="col-10 d-flex align-items-center">
        <div class="">
            <div class="row"><?php echo $row['nama'];?></div>
            <div class="row" style="font-size: 12px;color:#868686;"><?php echo $row['peran'];?> . <?php echo $row['namajalan'];?> . <?php echo $row['namakota'];?></div>
        </div>
    </div>
</div>
<?php endforeach; ?>