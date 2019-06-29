<?php
$servername = "localhost";
$database = "tessoal";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

$id = $_GET['id'];
$sql = "DELETE FROM nama WHERE id = '".$id."' ";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('Data telah dihapus')</script>";
    echo "<script>document.location='7c.php'</script>";
}
?>