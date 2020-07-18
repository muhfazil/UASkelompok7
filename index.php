<?php
include "koneksi.php";




?>



<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
        <legend>Login Data Relawan</legend>
        <p>
            <label>Username:</label>
            <input type="email" name="email" placeholder="username..." />
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" placeholder="password..." />
        </p>
        <p>
            <label><input type="checkbox" name="remember" value="remember" /> Remember me</label>
        </p>
        <p>
            <input type="submit" name="login" value="Login" />
        </p>
        </fieldset>
    </form>
	<?php
	
	if(isset($_POST['login'])){
		$ambil = $db->query("SELECT * FROM user WHERE email='$_POST[email]'AND password='$_POST[password]'");
		$cek = $ambil->num_rows;
		if($cek==1){
			$_SESSION['admin']=$ambil->fetch_assoc();
			echo"<div class='alert alert-info'>login sukses</div>";
			
		echo"<meta http-equiv='refresh'content='1;url=inputdata.php'>";
		}else {
			echo"<div class='alert alert-info'>login sukses</div>";
			
		echo"<meta http-equiv='refresh'content='1;url=login.php'>";
			
		}
			
			
		}
	
	
	?>
</body>
</html>