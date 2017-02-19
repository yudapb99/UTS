@extends('controller.index')
@section('content'){{$showcontent ['content1']}} 
{{$showcontent ['content2']}}

<body>
	<h2>HALAMAN UTAMA</h2>
	<nav>
				<ul>
					<li><b>MENU</b></li>
					<li><a href="index.php">Beranda</a></li>
					<li><a href="{{URL::to('/tambah')}}">Tambah Data</a></li>
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
	  <td><a href="{{URL::to('/edit')}}">Edit</a>
	  <td><a href="">Delete</a></td>
</tr>      
    </table>
	
@stop