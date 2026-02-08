<?php
session_start();
include "config/db.php";
if($_POST){
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $res = $conn->query("SELECT * FROM users WHERE email='$email'");
  $user = $res->fetch_assoc();
  if($user && password_verify($pass, $user['password'])){
    $_SESSION['user'] = $user['name'];
    header("Location: dashboard.php");
  } else {
    echo "بيانات غير صحيحة";
  }
}
?>
<form method="post">
<h2>تسجيل دخول – السيد بلس</h2>
<input name="email" type="email" placeholder="الايميل">
<input name="password" type="password" placeholder="كلمة المرور">
<button>دخول</button>
</form>
