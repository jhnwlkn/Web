<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<title>Edit Data</title>
	</head>
	<body>
		<?php
			include 'koneksi.php';
			$id = $_GET['id'];
			$query = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id='$id'");
			$data = mysqli_fetch_array($query);

			if (isset($_POST['alamat'])) {
				$update = mysqli_query($mysqli, "UPDATE mahasiswa SET nama = '".$_POST['nama']."', npm = '".$_POST['npm']."', alamat = '".$_POST['alamat']."', nomor_sepatu = '".$_POST['no_spt']."' WHERE id = '$id'");
				if ($update) {
					header('Location: home.php');
				}
			}
		?>
		<form method="POST">
			<label for="nama">Nama</label><br>
			<input type="text" name="nama" id="nama" value="<?=$data['nama']?>" required><br><br>

			<label for="npm">NPM</label><br>
			<input type="text" name="npm" id="npm" value="<?=$data['npm']?>" required><br><br>

			<label for="alamat">Alamat</label><br>
			<input type="text" name="alamat" id="alamat" value="<?=$data['alamat']?>" required><br><br>

			<label for="no_spt">Nomor Sepatu</label><br>
			<input type="text" name="no_spt" id="no_spt" value="<?=$data['nomor_sepatu']?>" required><br><br>
			<button type="submit" class="btn btn-primary">Simpan</button><br>
		</form>
	</body>
</html>