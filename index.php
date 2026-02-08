<?php
session_start();
if(isset($_SESSION['user'])) {
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>السيد بلس</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header>
  <h1>السيد بلس</h1>
  <nav>
    <a href="index.php">الرئيسية</a>
    <a href="register.php">تسجيل</a>
    <a href="login.php">تسجيل دخول</a>
  </nav>
</header>

<section class="hero">
  <h2>مرحبا بك في السيد بلس</h2>
  <p>ابدأ رحلتك التعليمية الآن!</p>
</section>

<section class="cards">
  <div class="card">📘 رياضيات</div>
  <div class="card">🧪 كيمياء</div>
  <div class="card">⚛️ فيزياء</div>
</section>

<footer>
  <p>© 2026 السيد بلس</p>
</footer>
</body>
</html>
