<?php
session_start();
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['admin'] = true;
        header('Location: dashboard.php');
        exit;
    }
    $error = 'Username atau password salah.';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Login Admin - IKS Jabodetabek</title>
<link rel="stylesheet" href="../assets/style.css">
<style>
body{min-height:100vh;background:linear-gradient(135deg,#052f5f,#0c5a9b);display:grid;place-items:center}
.login{width:min(400px,90%);background:#fff;border-radius:18px;padding:35px;box-shadow:0 20px 60px #001b3d66}
.login h1{font-family:Montserrat;color:#073d78;font-size:24px}.login p{font-size:12px;color:#708197;margin:5px 0 25px}
label{display:block;font-size:11px;font-weight:700;color:#365674;margin:12px 0 5px}
input{width:100%;padding:12px;border:1px solid #d8e3ee;border-radius:8px;outline:none}
button{width:100%;border:0;background:#073d78;color:#fff;padding:12px;border-radius:8px;margin-top:20px;font-weight:700;cursor:pointer}
.error{background:#fff0f0;color:#b32626;padding:9px;border-radius:7px;font-size:11px}
.back{display:block;text-align:center;margin-top:18px;font-size:11px;color:#073d78}
</style>
</head>
<body>
<div class="login">
    <div class="brand-logo">IKS</div>
    <h1>Login Admin</h1>
    <p>Kelola website Ikatan Keluarga Sangiang Jabodetabek.</p>
    <?php if($error): ?><div class="error"><?= htmlspecialchars($error) ?></div><?php endif; ?>
    <form method="post">
        <label>Username</label><input name="username" required>
        <label>Password</label><input type="password" name="password" required>
        <button type="submit">Masuk ke Dashboard</button>
    </form>
    <a class="back" href="../index.php">← Kembali ke website</a>
</div>
</body>
</html>
