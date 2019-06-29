<?php
$servername = "localhost";
$database = "tessoal";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
?>
<style>
    
</style>
<table border="1">
    <thead>
        <tr>
            <th>name</th>
            <th>hobby</th>
            <th>category</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT nama.name, hobi.name, kategori.name FROM (nama LEFT JOIN hobi ON nama.id_hobby = hobi.id) LEFT JOIN kategori ON hobi.id_category = kategori.id";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>