<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tugas Mingguan</title>
</head>
<body>
    <fieldset>
        <h2> Form <h2>
        <form action="action_page.php" method="post">
            Nama : <br> <input type="text" name="fname">
        <br>
        <form action="action_page.php" method="post" id="alamat">
            Alamat : <br> <input type="text"  form="alamat">
        <br>
        <form method="post" action="">
            <label> Jenis Kelamin : </label> <br>
            <select name="Pilih Jenis Kelamin">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select> 
        <br>
        <label>Golongan Darah : </label><br>
		<select name="gd">
		  <option value="A">A</option>
		  <option value="B">B</option>
		  <option value="AB">AB</option>
		  <option value="O">O</option>
		</select><br><br>
		<label>Hobby : </label><br>
		<input type="checkbox" name="hobi1" value="Berenang"> Berenang<br>
		<input type="checkbox" name="hobi2" value="Bulutangkis"> Bulutangkis<br>
		<input type="checkbox" name="hobi3" value="Futsal"> Futsal<br><br>
		<label>Keterangan : </label><br>
		<textarea name="keterangan" rows="5" cols="30"> </textarea><br><br><br>
		<input type="submit" value="Kirim" name="proses">
        <button type ="submit">Simpan</button>
</body>
</html>