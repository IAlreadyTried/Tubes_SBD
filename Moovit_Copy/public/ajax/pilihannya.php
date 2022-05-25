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
<div style="width: 100%;height:55px;background-color:salmon;border-bottom:5px black;box-sizing:border-box;"><?php echo $row['nama'];?></div>
<?php endforeach; ?>