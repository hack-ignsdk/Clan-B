<?php 
session_start();
include "../include/fungsi2.php";
$sesi	= $_SESSION['sesi'];

if($_SESSION['sesi'] == "" || $_SESSION['sesi']  == NULL || empty($_SESSION['sesi'])){
	echo "<center><font color='red'>Anda tidak diperkenankan memasuki halaman ini, jika anda belum <a href='../index.php'>login</a> !!</font></center>";
	exit;
}
function logout() {
	session_start();
	session_destroy();
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}

$utama="<center><span class='s'>welcome in agipz larcenciels library information system. Untuk menggunakan, silakan memilih menu di samping kiri !. <br><br>Status Anda login sebagai <b>\" $sesi \"</b> Jangan lupa LOG OUT sebelum keluar</span></center>";
?>

<html>
<head>
<title>.:: Agipz Larcenciels Lybrary system Aplication ::.</title>
<link rel="stylesheet" type="text/css" href="../include/style.css" />
<style type="text/css">
<!--
.style6 {
	color: #FF0000;
	font-family: "Times New Roman", Times, serif;
}
.style7 {font-family: "monotype corsiva"}
-->
</style>
</head>

<body>
<table border=0 width="100%" bgcolor="#000000" cellpadding=2 cellspacing=2 >

	<tr>
		<td colspan="2"><img src="../image/logo2.png" width="100%" height="180px"></td>
	</tr>
	<tr>
		<td colspan=2><marquee onMouseOver="this.stop();" behavior="alternate" onMouseOut="this.start();">
		Control Panel Agipz Larcenciels Library Administratns 
		</marquee></td>
	</tr>
	<tr>
	<td width="20%" valign="top">
	<h3 class="style7">Pilih Menu</h3>
	<div class="kotak">
	<ul class="style6">
      <li><a href="index.php">Home</a></li>
      <li><a href="?page=transaksi">Transaksi</a></li>
      <li><a href="?page=buku">Data Buku</a></li>
      <li><a href="?page=anggota">Data Anggota</a></li>
      <li><a href="?page=lap">Laporan</a></li>
      <li><a href="?page=utility">Utility</a></li>
      <li><a href="?page=user">Edit User</a></li>
      <li><a href="?page=logout" onClick="return confirm('Anda yakin ingin Keluar ?')" >Log Out</a></li>
      </ul>
	<br>
	</div></td>
	<td width="80%" valign="top">
	<h3>
		<?php 
			$page	= isset($_GET['page']) ? $_GET['page'] : "";
			
			if(strstr($page,"transaksi")) {
			$j="Menu Transaksi";
			} else if(strstr($page,"buku")) {
			$j="Menu Data Buku";
			} else if(strstr($page,"pengunju")) {
			$j="Menu Data Pengunjung";
			} else if(strstr($page,"user")) {
			$j="<!--<img src='../image/user.png' style='position: absolute;'>-->Menu Data User";
			} else if(strstr($page,"lap")) {
			$j="Menu Laporan";
			} else if(strstr($page,"util")) {
			$j="Menu Utility";
			} else if(strstr($page,"anggo")) {
			$j="Menu Anggota";
			} else {
			$j="Menu Utama";
			} 
			echo $j;
		?>
	  </h3>
			<div class="tengah">
		<?php 
	//menu transaksi
	if($page=="transaksi") {
	include "../transaksi/lihat_transaksi.php";
	} else if($page=="input_transaksi") {
	include "../transaksi/$page.php";
	} else if($page=="act_input_transaksi") {
	include "../transaksi/$page.php";
	} else if($page=="act_kembali") {
	include "../transaksi/$page.php";
	} else if($page=="act_panjang") {
	include "../transaksi/$page.php";
	//======== akhir menu transaksi =========
	
	//menu buku
	} else if($page=="buku") {
	include "../buku/lihat_buku.php";
	} else if($page=="input_buku") {
	include "../buku/$page.php";
	} else if($page=="act_input_buku") {
	include "../buku/$page.php";
	} else if($page=="edit_buku") {
	include "../buku/$page.php";
	} else if($page=="act_edit_buku") {
	include "../buku/$page.php";
	} else if($page=="act_hapus_buku") {
	include "../buku/$page.php";
	} else if($page=="detil_buku") {
	include "../buku/$page.php";
	}
	//======== akhir menu buku ================
	
	//menu pengunjung
	//else if($page=="pengunjung") {
	//include "../pengunjung/lihat_pengunjung.php";
	//======= akhir menu pengunjung ===========
	
	//----menu laporan 
	else if($page=="lap") {
	include "../laporan/$page.php";
	} else if($page=="lap_peminjaman") {
	include "../laporan/$page.php";
	} else if($page=="lap_pengunjung") {
	include "../pengunjung/$page.php";
	} else if($page=="edit_laporan") {
	include "../laporan/$page.php";
	} else if($page=="act_edit_laporan") {
	include "../laporan/$page.php";
	} else if($page=="act_hapus_laporan") {
	include "../laporan/$page.php";
	
	//=============== akhir menu laporan =================
	
	// menu anggota
	} else if($page=="anggota") {
	include "../anggota/lihat_$page.php";
	//============== akhir menu anggota ==================
	
	//menu user
	} else if($page=="user") {
	include "../user/lihat_user.php";
	} else if($page=="input_user") {
	include "../user/$page.php";
	} else if($page=="act_input_user") {
	include "../user/$page.php";
	} else if($page=="edit_user") {
	include "../user/$page.php";
	} else if($page=="act_edit_user") {
	include "../user/$page.php";
	} else if($page=="act_hapus_user") {
	include "../user/$page.php";
	}
	//==========  akhir menu user  =================
	
	//menu ultilty
	else if($page=="utility") {
	include "../utility/link.php";
	} else if($page=="backup") {
	include "../utility/$page.php";
	}
	//========== akhir menu utility ===============
	
	//log out	
	else if($page=="logout") {
	logout();
	} else {
	echo $utama;
	}
	?>
	</div>
	</td><tr>
	<td colspan="2" style="border-top: solid 2px #f9f9f9; font-size: 12px" align="center">trouble Maker <a href="https://www.facebook.com/agip.vegeance" target="_blank">https://www.facebook.com/agip.vegeance</a><br>All Right Reserved</td>
	
	</tr>
</table>
<?php
//}
?>