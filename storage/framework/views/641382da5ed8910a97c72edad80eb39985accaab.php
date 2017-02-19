<?php $__env->startSection('content'); ?>
<body>
	<h2>Edit Data</h2>
	
	<nav>
				<ul>
					<li><b>MENU</b></li>
					<li><a href="">Beranda</a></li>
					<li><a href="">Tambah Data</a></li>
					<li><a href="../login/logout.php">Logout</a></li>
				</ul>
			</nav>
	
	<h3>Edit Data Siswa</h3>
	<table cellpadding="3" cellspacing="0" align="center">
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis" value="" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<select name="kelas" required>
						<option value="">Pilih Kelas</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan" required>
						<option value="">Pilih Jurusan</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>

<?php echo $__env->make('UTS.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>