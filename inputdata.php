<?php 

include "koneksi.php";

?>


<!DOCTYPE html>
<html>
<head>
    <title>Data</title>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
        <legend>Data Relawan Covid-19</legend>
		
		<p>
            <label>Nama Lengkap:</label>
            <input type="text" name="namalengkap" placeholder="Nama..." />
        </p>
		<p>
            <label>Alamat:</label>
            <textarea  name="alamat" placeholder="Alamat..." ></textarea>
        </p>
        <label>Nama Wilayah Provinsi:</label>
            <select name="provinsi">
                <option value="DKI Jakarta">DKI Jakarta</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Banten">Banten</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
            </select>
        
        
        <p>
            <label>Email:</label>
            <input type="email" name="email" placeholder="Email..." />
        </p>
        <p>
            <label>No HP:</label>
            <input type="number" name="nohp" placeholder="Nomor..." />
        </p>
		<p>
            <label>Bidang Keahlian:</label>
            <input type="text" name="keahlian" placeholder="Keahlian." />
        </p>
            <input type="submit" name="simpan" value="Send" />
        </p>
        </fieldset>
    </form>
	
	<?php   
	if(isset($_POST['simpan'])){
	$sql = "INSERT INTO datainput(nama_lengkap,alamat,nama_provinsi,email,no_hp,bidang_keahlian) values ('$_POST[namalengkap]','$_POST[alamat]','$_POST[provinsi]','$_POST[email]','$_POST[nohp]','$_POST[keahlian]')";
	
	$query = mysqli_query($db, $sql);
	
	if($query){
		header('Location:tampil.php?status=sukses');
	
	}
	else{
		header('Location:inputdata.php?status=gagal');
	}
	
	}
	?>
</body>
</html>