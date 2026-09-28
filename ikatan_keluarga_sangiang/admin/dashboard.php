<?php
session_start();
if (empty($_SESSION['admin'])) { header('Location: login.php'); exit; }
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Dashboard Admin</title>
<link rel="stylesheet" href="../assets/style.css">
<style>
body{background:#f4f7fb}.dash{display:flex;min-height:100vh}.side{width:235px;background:#062f5e;color:#fff;padding:25px 18px}.side h2{font:700 17px Montserrat;margin-bottom:25px}.side a{display:block;color:#d9e7f5;text-decoration:none;font-size:12px;padding:11px 13px;border-radius:7px;margin:4px 0}.side a:hover{background:#ffffff18}.main{flex:1;padding:30px}.top{display:flex;justify-content:space-between;align-items:center;margin-bottom:25px}.top h1{font:700 25px Montserrat;color:#073d78}.logout{background:#fff;border:1px solid #dbe6f1;padding:9px 15px;border-radius:7px;color:#073d78;text-decoration:none;font-size:11px}.cards{display:grid;grid-template-columns:repeat(4,1fr);gap:15px}.card{background:#fff;padding:20px;border-radius:10px;box-shadow:0 5px 18px #123e6510}.card small{color:#7b8ea1;font-size:10px}.card strong{display:block;color:#073d78;font:700 28px Montserrat;margin-top:5px}.panel{background:#fff;margin-top:20px;padding:22px;border-radius:10px}.panel h2{font:700 17px Montserrat;color:#073d78;margin-bottom:8px}@media(max-width:800px){.side{width:70px}.side h2{font-size:0}.side a{font-size:0;text-align:center}.main{padding:18px}.cards{grid-template-columns:1fr 1fr}}
</style></head>
<body>
<div class="dash">
<aside class="side">
    <div class="brand-logo">IKS</div>
    <h2>Admin IKS</h2>
    <a href="../index.php">⌂ &nbsp; Website</a>
    <a href="#">▣ &nbsp; Dashboard</a>
    <a href="#">▤ &nbsp; Berita</a>
    <a href="#">◈ &nbsp; Kegiatan</a>
    <a href="#">▧ &nbsp; Galeri</a>
    <a href="#">♙ &nbsp; Pengurus</a>
    <a href="#">◷ &nbsp; Agenda</a>
    <a href="logout.php">↪ &nbsp; Logout</a>
</aside>
<main class="main">
<div class="top"><h1>Dashboard Admin</h1><a class="logout" href="logout.php">Keluar</a></div>
<div class="cards">
<div class="card"><small>Total Berita</small><strong>12</strong></div>
<div class="card"><small>Total Kegiatan</small><strong>18</strong></div>
<div class="card"><small>Foto Galeri</small><strong>36</strong></div>
<div class="card"><small>Data Pengurus</small><strong>15</strong></div>
</div>
<div class="panel"><h2>Selamat Datang, Admin 👋</h2><p style="font-size:12px;color:#6d7f92">Dashboard ini nantinya dapat dikembangkan menjadi CRUD lengkap untuk mengelola berita, kegiatan, galeri, agenda, dan struktur pengurus.</p></div>
</main>
</div>
</body></html>
