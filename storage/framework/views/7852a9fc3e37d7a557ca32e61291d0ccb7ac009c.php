<?php $__env->startSection('content'); ?><?php echo e($showcontent ['content1']); ?> 
<?php echo e($showcontent ['content2']); ?>


<body>
	<h2>HALAMAN UTAMA</h2>
	<nav>
				<ul>
					<li><b>MENU</b></li>
					<li><a href="index.php">Beranda</a></li>
					<li><a href="<?php echo e(URL::to('/tambah')); ?>">Tambah Data</a></li>
					<li><a href="../login/logout.php">Logout</a></li>
				</ul>
			</nav>
	<h3>Data Siswa</h3>
	
	<table cellpadding="5" cellspacing="0" border="1" align="center">
      <tr bgcolor="#FF0000">
        <th>No.</th>
        <th>NIS</th>
        <th>Nama Lengkap</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Opsi</th>
      </tr>
	  <tr>
	  <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
	  <td><a href="<?php echo e(URL::to('/edit')); ?>">Edit</a>
	  <td><a href="">Delete</a></td>
</tr>      
    </table>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('controller.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>