<?php
session_start();
include 'koneksi.php';

$nama = $_POST['nama'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE username='$nama' AND password='$password'";

$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];
    $_SESSION['user_role'] = $user['role'];


    if ($user['role'] === 'admin') {
        $_SESSION['logged_in'] = true;
        $_SESSION['is_admin'] = true;
        echo "login berhasil";
        header('Location: dashboardAdmin.php');
        exit();
    } 
    
    else {
        $_SESSION['logged_in'] = true;
        $_SESSION['is_admin'] = false;
        echo "Login berhasil.";
        header('Location: halo.php');
        exit();
    } 
    
} else {
    $_SESSION['login_error'] = "Email atau password salah. Silakan coba lagi.";
    header('Location: pertemuan1.php');
    exit();
}


// if (isset($_POST['register'])) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $confirm_password = $_POST['confirm_password'];

//     // Validasi input
//     if (empty($username) || empty($password) || empty($confirm_password)) {
//         echo "Semua field harus diisi.";
//         exit;
//     }

//     if ($password !== $confirm_password) {
//         echo "Password dan konfirmasi password tidak cocok.";
//         exit;
//     }

//     // Cek apakah username sudah ada
//     $query = "SELECT * FROM users WHERE username = '$username'";
//     $result = mysqli_query($koneksi, $query);
//     if (mysqli_num_rows($result) > 0) {
//         echo "Username sudah digunakan. Silakan pilih username lain.";
//         exit;
//     }

//     // Hash password sebelum disimpan
//     $hashed_password = password_hash($password, PASSWORD_DEFAULT);

//     // Simpan data pengguna ke database
//     $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
//     if (mysqli_query($koneksi, $query)) {
//         echo "Registrasi berhasil. Anda dapat login sekarang.";
//     } else {
//         echo "Error: " . mysqli_error($koneksi);
//     }
// }



?>