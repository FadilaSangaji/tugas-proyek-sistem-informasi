<?php
session_start();
include 'koneksi.php';

if (empty($_SESSION['sid_admin'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantor Bersama</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div style="width: 200px;" class=" bg-gray-800 p-4 h-full">
            <h2 class="text-white text-xl mb-6">Dashboard</h2>
            <ul>
                <li class="mb-4">
                    <a href="index.php?ke=beranda" class="text-white flex items-center">
                        <i class="fas fa-home mr-2"></i> Beranda
                    </a>
                </li>
                <li class="mb-4">
                    <a href="index.php?ke=pendaftaran" class="text-white flex items-center">
                        <i class="fas fa-box mr-2"></i> Pendaftaran
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="text-white flex items-center">
                        <i class="fas fa-users mr-2"></i> Laporan
                    </a>
                </li>
                <li>
                    <a href="logout.php" class="text-white flex items-center">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="w-4/5 p-6 overflow-auto">
            <div style="width: 1200px;" class="bg-gray-200 p-4 rounded shadow">
                <h1 class="text-2xl font-bold">KANTOR BERSAMA</h1>
                <p class="mt-2">Selamat datang di sistem informasi NAWP</p>
            </div>
            <div style="width: 1200px;" class="mt-4 bg-white p-4 rounded shadow">
                <?php
                $hal = (isset($_GET['ke'])) ? $_GET['ke'] : "main";
                switch ($hal) {
                    case 'beranda': include "beranda.php"; break;
                    case 'pendaftaran': include "pendaftaran.php"; break;
                    case 'daftar_tambah': include "daftar_tambah.php"; break;
                    case 'ubah': include "daftar_ubah.php"; break;
                     default: include "beranda.php";
                }
                ?>
            </div>
        </div>
    </div>
    <div id="foot" class="bg-gray-800 text-center p-4 text-white">
        <p>Copyright @ 2024 - Create by kelompok-6</p>
    </div>
</body>
</html>