<?php 
 ?>
 <h2><center>Registrasi Mahasiswa</center></h2>
 <form action="prosesregis.php" method="post" enctype="multipart/form-data">
	<center>
		<table>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="number" name="nim" pattern="\d*" maxlength="10" placeholder="Masukkan Nim Anda" required></td>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" minlength="3" maxlength="25" placeholder="Masukkan Nama Anda" required></td>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jk" value="Laki-Laki">Laki-Laki
					<input type="radio" name="jk" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td>
					<select name="program">
						<option value="D3 Manajemen Infirmatika">D3 Manajemen Informatika</option>
						<option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
						<option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
						<option value="D3 Perhotelan">D3 Perhotelan</option>
						<option value="D3 Komputerisasi Akuntansi">D3 Komputerisasi Akuntansi</option>
						<option value="D4 Sistem Multimedia">D4 Sistem Multimedia</option>
						<option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
						<option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>
						<option value="S1 Ilmu Komunikasi">S1 Ilmu Komunikasi</option>
						<option value="S1 Akuntansi">S1 Akuntansi</option>
						<option value="S1 Desain Interior">S1 Desain Interior</option>
						<option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
						<option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
						<option value="S1 Teknik Telekomunikasi">S1 Teknik Telekomunikasi</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
						<option value="FIT">FIT</option>
						<option value="FKB">FKB</option>
						<option value="FIK">FIK</option>
						<option value="FEB">FEB</option>
						<option value="FRI">FRI</option>
						<option value="FTE">FTE</option>
						<option value="FIF">FIF</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="hobi" value="Bersepeda">Bersepeda<br>
					<input type="checkbox" name="hobi" value="Travelling">Travelling<br>
					<input type="checkbox" name="hobi" value="Berenang">Berenang<br>
					<input type="checkbox" name="hobi" value="Basket">Basket<br>
					<input type="checkbox" name="hobi" value="Sepak Bola">Sepak Bola<br>
				</td>
			</tr>
			<tr>
				<td>Upload Gambar</td>
				<td>:</td>
				<td><input type="file" name="file_gbr"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" pattern="[a-z0-9._-]+@+[a-z]+.com"  placeholder="example@gmail.com" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="Kirim"></td>
			</tr>
		</table>
	</center>
</form>
</body>
</html>
