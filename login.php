<?php
session_start();
require "db.php";
$msg="";
if(isset($_POST['login'])){
    $u=$_POST['username']; $p=md5($_POST['password']);
    $res=$conn->query("SELECT * FROM users WHERE username='$u' AND password='$p'");
    if($res->num_rows){ $_SESSION['user']=$u; header("Location:index.php"); exit; }
    else{ $msg="Invalid Login!"; }
}
?>
<!doctype html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
</head>
<body>
<div class="container">
<h2>Login</h2>
<?php if($msg) echo "<p class='error'>$msg</p>"; ?>
<form method="post" onsubmit="return validateLogin()">
<input name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>
</div>
</body>
</html>
