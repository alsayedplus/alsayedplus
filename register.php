<?php
include "config/db.php";
if($_POST){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $conn->query("INSERT INTO users (name,email,password) VALUES ('$name','$email','$pass')");
  header("Location: login.php");
}
?>
<form method="post">
<h2>تسجيل حساب – السيد بلس</h2>
<input name="name" placeholder="الاسم" required>
<input name="email" type="email" placeholder="الايميل" required>
<input name="password" type="password" placeholder="كلمة المرور" required>
<button>تسجيل</button>
</form>
