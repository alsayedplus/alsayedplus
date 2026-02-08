<?php
session_start();
if(!isset($_SESSION['user'])){
  header("Location: login.php");
}
?>
<h1>أهلاً <?php echo $_SESSION['user']; ?> 👋</h1>
<a href="logout.php">تسجيل خروج</a>
