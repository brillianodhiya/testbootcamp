<?php 
if(empty($_POST['email'])){
    echo "<script>alert('Email Tidak Boleh Kosong!')</script>";
} else {
    $email = test_input($_POST['email']);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Format Email Salah!')</script>";
    }
}
if(empty($_POST['phone'])){
    echo "<script>alert('Nomor Hp Tidak Boleh Kosong!')</script>";
} else {
    $phone = $_POST['phone'];
    if(!preg_match('/[^+0-9{8,15}]/',trim($phone))){
        if(substr(trim($phone), 0, 3)=='+62'){
            $hp = trim($phone);
        } else {
            echo "<script>alert('Format Nomor HP harus Menggunakan +62')</script>";
        }
    }
}
if(empty($_POST['username'])){
    echo "<script>alert('Username Tidak Boleh Kosong!')</script>";
} else {
    $user = $_POST['username'];
    if(preg_match('/[a-z]{5,9}/',trim($user))){
        $username = trim($username);
    } else {
        echo "<script>alert('Format Username Harus Menggunakan Huruf Kecil Dan Panjang Tidak Boleh Kurang dari 5 Lebih Dari 9')</script>";
    }
}
if(empty($_POST['password'])){
    echo "<script>alert('Username Tidak Boleh Kosong!')</script>";
} else {
    $pass = $_POST['password'];
    if(preg_match('/[a-zA-Z0-9#\]{8}/',trim($pass))){
        $password = trim($pass);
    } else {
        echo "<script>alert('Format Username Harus Menggunakan Huruf Kecil, Besar, Angka, tanda # dan panjang minimal 8')</script>";
    }
}
?>