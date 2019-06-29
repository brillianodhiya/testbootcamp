<!DOCTYPE html>
<?php
$servername = "localhost";
$database = "tessoal";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>7c</title>
</head>
<style>
    .ww{
        padding-top: 150px;
    }
</style>
<body>
    <nav class="white">
        <div class="nav-wrapper">
           <a href="#" class="brand-logo"><img src="https://yt3.ggpht.com/-TCAxPj4b4PA/AAAAAAAAAAI/AAAAAAAAAAA/UcBASWF0q0k/nd/photo.jpg" alt="" width="60" height="auto"></a>
        </div>
    </nav>
<div class="container">
    <div class="row ww">
        <div class="col s11"></div>
        <a class="waves-effect waves-light btn modal-trigger yellow darken-2" href="#add">ADD</a>
            <div id="add" class="modal">
                <div class="modal-content">
                    <h5>ADD DATA</h5>
                    <form action="add.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Nama" id="nama" type="text" class="validate" name="nama">
                            <label for="nama">Name</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="hobi">
                                <option value="" disabled selected>Hobby ...</option>
                            <?php 
                                $sql2 = "SELECT * FROM hobi";
                                $ress = mysqli_query($conn,$sql2);
                                while($zz = mysqli_fetch_array($ress)){
                            ?>
                                <option value="<?php echo $zz[0] ?>"><?php echo $zz[1] ?></option>
                            <?php 
                                }
                            ?>
                            </select>
                            <label>Pilih Hobby</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="kategori">
                                <option value="" disabled selected>Category ...</option>
                                <?php 
                                $sql3 = "SELECT * FROM kategori";
                                $res = mysqli_query($conn,$sql3);
                                while($kt = mysqli_fetch_array($res)){
                                ?>
                                <option value="<?php echo $kt[0] ?>"><?php echo $kt[1] ?></option>
                                <?php } ?>
                            </select>
                            <label>Pilih Category</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="modal-close waves-effect waves-light btn yellow darken-2">ADD</button>
                    </form>
                </div>
            </div>
        <table class="responsive-table highlight col s12">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Hobby</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT nama.id, nama.name, hobi.name, kategori.name FROM (nama LEFT JOIN hobi ON nama.id_hobby = hobi.id) LEFT JOIN kategori ON hobi.id_category = kategori.id";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><a class="waves-effect waves-light btn red accent-3" href="hapus.php?id=<?php echo $row[0]; ?>"><i class="material-icons">delete</i></a>
                        <a class="waves-effect waves-light btn modal-trigger light-blue lighten-2" href="#edit<?php echo $row[0]; ?>"><i class="material-icons">edit</i></a>
                            <div id="edit<?php echo $row[0]; ?>" class="modal">
                                <div class="modal-content">
                                    <h5>EDIT DATA</h5>
                                    <form action="edit.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input value="<?php echo $row[1]; ?>" id="nama" type="text" class="validate" name="nama">
                                        <label for="nama">Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input value="<?php echo $row[2]; ?>" id="hobi" type="text" class="validate" name="hobi">
                                        <label for="hobi">Hobby</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input value="<?php echo $row[3]; ?>" id="kategori" type="text" class="validate" name="kategori">
                                        <label for="kategori">Category</label>
                                    </div>
                                    <input type="text" class="hide" value="<?php echo $row[0]?>" name="id">
                                </div>
                                </div>
                                    <div class="modal-footer">
                                        <button class="modal-close waves-effect waves-light btn yellow darken-2">EDIT</button>
                                         </form>
                                    </div>
                            </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>   
    </div>
</div>
</body>
<script>
$(document).ready(function(){
    $('.modal').modal();
});
$(document).ready(function(){
    $('select').formSelect();
});
</script>
</html>