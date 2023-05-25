<?php
require "koneksi.php";
$aksi = $_GET['action'];

switch ($aksi) {
    // aksi untuk insert ke data tiket
    case 'insert_train':
        //insertBook($nama_tiket,$tujua_stasiun)
        $nama_makanan = $_POST['nama_tiket'];
        $harga = $_POST['tujuan_stasiun'];
        $result = insertBook($nama_tiket,$tujuan_stasiun);
        if ($result) {
            $msg = "Tambah Makanan Berhasil";
            $loc = "data_makanan.php";
        } else {
            $msg = "Tambah Makanan Gagal";
            $loc = "data_makanan.php";
        }
        break;

    // aksi untuk edit data makanan
    case 'update_book':
        // $id_makanan = $_POST['id_makanan'];
        // $nama_makanan = $_POST['nama_makanan'];
        // $harga = $_POST['harga'];
        // $jumlah = $_POST['jumlah'];
        // $result = updateBook($id_makanan, $nama_makanan, $harga, $jumlah);
        $result = updateBook($_POST['id_makanan'], $_POST['nama_makanan'], $_POST['harga']);
        if ($result) {
            $msg = "Edit Makanan Berhasil";
            $loc = "data_makanan.php";
        } else {
            $msg = "Edit Makanan Gagal";
            $loc = "data_makanan.php";
        }
        break;
    //aksi untuk delete data makanan
    case 'delete_book':
        $result = deleteBook($_GET['id_makanan']);
        if ($result) {
            $msg = "Hapus Makanan Berhasil";
            $loc = "data_makanan.php";
        } else {
            $msg = "Hapus Makanan Gagal";
            $loc = "data_makanan.php";
        }
        break;
    //aksi untuk insert data pembeli
    case 'insert_customer':
        $result = insertCustomers($_POST['nama_pembeli'], $_POST['alamat'], $_POST['email'], $_POST['no_telp']);
        if ($result) {
            $msg = "Tambah Pembeli Berhasil";
            $loc = "data_pembeli.php";
        } else {
            $msg = "Tambah Pembeli Gagal";
            $loc = "data_pembeli.php";
        }
        break;
    //aksi untuk edit data pelanggan
    case 'update_customer':
        $result = updateCustomer($_POST['id_pembeli'], $_POST['nama_pembeli'], $_POST['alamat'], $_POST['email'], $_POST['no_telp']);
        if ($result) {
            $msg = "Edit Pembeli Berhasil";
            $loc = "data_pembeli.php";
        } else {
            $msg = "Edit Pembeli Gagal";
            $loc = "data_pembeli.php";
        }
        break;
    //aksi untuk delete data pelanggan
    case 'delete_customer':
        $result = deleteCustomer($_GET['id_pembeli']);
        if ($result) {
            $msg = "Hapus Pembeli Berhasil";
            $loc = "data_pembeli.php";
        } else {
            $msg = "Hapus Pembeli Gagal";
            $loc = "data_pembeli.php";
        }
        break;
    //aksi untuk insert data transaksi
    case 'insert_transaction':
        $id_makanan = $_POST['id_makanan'];
        $row = getHargaBuku($id_makanan);
        $harga = $row['harga'];
        $total_pembayaran = $harga * $_POST['jumlah'];
        $result = insertTransaction($_POST['id_makanan'], $_POST['id_pembeli'], $_POST['jumlah'], $harga, $total_pembayaran);
        if ($result) {
            $msg = "Tambah Transaksi Berhasil";
            $loc = "data_transaksi.php";
        } else {
            $msg = "Tambah Transaksi Gagal";
            $loc = "data_transaksi.php";
        }
        break;
    //aksi untuk edit data transaksi
    case 'update_transaction':
        $id_makanan = $_POST['id_makanan'];
        $row = getHargaBuku($id_makanan);
        $harga = $row['harga'];
        $total_pembayaran = $harga * $_POST['jumlah'];
        $result = updateTransaction($_POST['id_transaksi'], $_POST['id_makanan'], $_POST['id_pembeli'], $_POST['jumlah'], $harga, $total_pembayaran);
        if ($result) {
            $msg = "Edit Transaksi Berhasil";
            $loc = "data_transaksi.php";
        } else {
            $msg = "Edit Transaksi Gagal";
            $loc = "data_transaksi.php";
        }
        break;       
    //aksi untuk delete data transaksi
    case 'delete_transaction':
        $result = deleteTransaction($_GET['id_transaksi']);
        if ($result) {
            $msg = "Hapus Transaksi Berhasil";
            $loc = "data_transaksi.php";
        } else {
            $msg = "Hapus Transaksi Gagal";
            $loc = "data_transaksi.php";
        }
        break; 
    //aksi untuk insert data user
    case 'insert_user':
        // BUAT NYIMPEN DATA
        $nama_lengkap = $_POST['nama_lengkap'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $repeat_password = md5($_POST['password-repeat']);
        $role = $_POST['role'];

        $user = getUserByEmail($email);
        if (mysqli_num_rows($user) > 0) {
            $msg = "Email sudah terdaftar"; 
            $loc = "register.php";
        } else if ($password != $repeat_password) {
            $msg = "Password Tidak Sama";
            $loc = "register.php";
        } else {
            $result = insertUser($nama_lengkap, $email, $password, $role);
            if ($result) {
                $msg = "Tambah User Berhasil";
                $loc = "login_form.php";
            } else {
                $msg = "Tambah User Gagal";
                $loc = "register.php";
            }
        } 
        break;
    //aksi untuk login
    case 'login_user':
        $email = $_POST['email'];    
        $password = md5($_POST['password']);
        $result = cekLogin($email, $password);
        if (mysqli_num_rows($result)> 0){    
            $row = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $row['email'];
            $msg = "Login Berhasil";
            $loc = "home.php";
        } else {
            $msg = "Login Gagal";
            $loc = "login_form.php";
        }
        break;
 }

if (!empty($msg)){
    echo "<script>
        alert('$msg');
        location.href = '$loc';
    </script>";
}

?>