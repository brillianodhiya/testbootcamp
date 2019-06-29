<?php
$servername = "localhost";
$database = "tessoal";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

$nama = $_POST['nama'];
$hobi = $_POST['hobi'];
$kategori = $_POST['kategori'];
$sql = "INSERT INTO nama (name, id_hobby, id_category) VALUES ('".$nama."','".$hobi."','".$kategori."')";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('Data $nama telah ditambahkan')</script>";
    echo "<script>document.location='7c.php'</script>";
}
?>