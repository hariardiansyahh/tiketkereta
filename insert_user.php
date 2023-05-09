<?php 
require "koneksi.php";

$error_input = 0;
$error_msg ="<ul>";


$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$password_repeat = md5($_POST['password-repeat']);
// $password_repeat = password_hash($_POST['password-repeat'], PASSWORD_BCRYPT);
$password_repeat = md5($_POST['password-repeat']);


$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn(), $sql);
if (mysqli_num_rows($result) > 0) {
    $error_input++;
    $error_msg.="<li>Email sudah terdaftar</li>"; 
} else if ($_POST['password'] != $_POST['password-repeat']) {
    $error_input++;
    $error_msg.="<li>Password Tidak Sama</li>";
} else if ($error_input > 0) {
    $error_msg.="</ul>";
    header("location:form_register.php?error_msg= . $error_msg");
} else if ($error_input == 0) {
    $sql = "INSERT INTO users VALUES ('', '$nama_lengkap', '$email', '$password')";
    $run_sql = mysqli_query($conn(), $sql);
    if ($run_sql == true) {
        echo "<script>alert('Registrasi Berhasil')</script>"; 
        header ("location:login_form.php");
    }
    else {
        echo "<script>alert('Registrasi Gagal')</script>";
    }  

};

?>