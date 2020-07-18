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
		 <legend>Login Data Relawan</legend>
        <p>
            <label>Username:</label>
            <input type="text" name="nama" placeholder="username..." />
        </p>
        <p>
            <label>Email:</label>
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
	   
	if(isset($_POST['simpan'])){
	$sql = "INSERT INTO datainput(nama,email,password) values ('$_POST[nama]','$_POST[email]','$_POST[password]')";
	
	$query = mysqli_query($db, $sql);
	
	if($query){
		header('Location:login.php?status=sukses');
	
	}
	else{
		header('Location:daftar.php?status=gagal');
	}
	
	}

	
	?>
</body>
</html>