<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UGM UNIVERSITAS GADJAH MADA</title> <!-- 1.judul di webnya -->

<!-- 2.Mengambil Logo-->
<link href="img/logo ugm.jpg" rel="shortcut icon" type="image/x-icon">

<!-- 3.Mengambil file css etc/eks-->
<link href="etc/eks.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style2 {color: #000000}
-->
</style>
</head>
<body>
<!-- setelah membuat file baru bernama koneksi dan di isi kemudian panggil koneksinya-->
<?php
//panggil koneksi
include "koneksi.php";
?>

<!-- 4.membuat kotak pingggir border manggil di css cari aja container -->
<div id="container">

<!-- manggil haeder/banner -->
 <div id="header">
   <div align="left"></div>
 </div>

<!-- menyediakan tempat untuk menu-->
	<div id="menu">
        <!-- manggil beranda SETELAH MENU.PHP JADI-->
        <?php
		include "menu.php";
		?>
	</div>
    
<!-- membuat jarak -->
	<div id="spasi">
	</div>
    
<!-- mengambil isi -->
	<div id="isi">
    <!-- membuat isi kiri (diantara isi, jangan di bawah divnya isi) -->
    
    <div id="kiri">
    <!-- mengambil isi setelah isi setelah -->
    <?php
	include "isi.php";
	?>
    </div>
    
    <!-- membuat isi kanan) -->
    <div id="kanan">
     <?php
		include "link.php";
		?>
    </div>
	</div>
    
</div>

<div id="spasi">
</div>

<!--mengambil footer) -->
<div id="footer">
<marquee>
<span class="style2"> Copyright &copy; 2021 -<strong> Universitas Gadjah Mada</strong> - By : Rey</span>
</marquee>
</div>

</body>
</html>