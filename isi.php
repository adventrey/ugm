<!-- memanggil css -->
<link href="etc/eks.css" rel="stylesheet" type="text/css" />

<!-- mengambil kalender -->
<script language="JavaScript" src="etc/CalendarPopup.js"></script>
<script language="JavaScript" id="js1">
	var cal1 = new CalendarPopup();
</script>


<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>


<!--beranda-->
<?php
// ambil variabel dari halaman menu.php
$menu = $_REQUEST["menu"];
if ($menu == "beranda" || empty($menu))
{
?>

<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style><table width="100%" border="0" cellpadding="3" id="info-tabel">
  <tbody>
      <tr id="info-judul">
      <td bordercolor="#000000" bgcolor="#3399FF">BERANDA</td>
    </tr>
    <tr>
      <td bordercolor="#000000" bgcolor="#0000FF" id="info-isi"> SELAMAT DATANG
      
        <p>UNIVERSITAS GADJAH MADA</p>
        <p>&nbsp;</p>
        <p align="justify" class="style2">Universitas Gadjah Mada resmi didirikan pada tanggal 19 Desember 1949 dan merupakan Universitas yang bersifat nasional. Selain itu Universitas Gadjah Mada juga berperan sebagai pengemban Pancasila dan Universitas pembina di Indonesia Pada saat didirikan, Universitas Gadjah Mada hanya memiliki enam fakultas, sekarang memiliki 18 Fakultas, satu sekolah Pascasarjana (S-2 dan S-3), dan satu Sekolah Vokasi. Universitas Gadjah Mada termasuk universitas yang tertua di Indonesia, berlokasi di Kampus Bulaksumur Yogyakarta. Sebagian besar fakultas dalam lingkungan Universitas Gadjah Mada terdiri atas beberapa jurusan/bagian dan atau program studi. Kegiatan Universitas Gadjah Mada dituangkan dalam bentuk Tri Dharma Perguruan Tinggi yang terdiri atas Pendidikan dan Pengajaran, Penelitian dan Pengabdian kepada Masyarakat </p>
      </table>
      <p class="style3">&nbsp;</p></td>
    </tr>
  </tbody>
</table>
<?php
}
?>


<!--beranda-->
<?php
// ambil variabel dari halaman menu.php
$menu = $_REQUEST["menu"];
if ($menu == "biaya" || empty($menu))
{
?>

<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style><table width="100%" border="0" cellpadding="3" id="info-tabel">
  <tbody>
      <tr id="info-judul">
      <td bordercolor="#FF9933" bgcolor="#3399FF">RINCIAN PEMBAYARAN</td>
    </tr>
    <tr>
        <table width="100%" border="1" cellspacing="0" cellpadding="3">
        <tr>
          <td width="25%" colspan="2" rowspan="2" bgcolor="#3399FF" class="style10"><div align="center"><strong>PROGRAM STUDI </strong></div></td>
          <td width="5%" rowspan="2" bgcolor="#3399FF" class="style10"><div align="center"><strong>JENJANG</strong></div></td>
          <td colspan="2" bgcolor="#3399FF" class="style10"><div align="center"><strong>BIAYA VARIABEL </strong></div></td>
          <td colspan="2" bgcolor="#3399FF" class="style10"><div align="center"><strong>BIAYA TETAP / SEMESTER </strong></div></td>
          </tr>
        <tr>
          <td width="8%" bgcolor="#3399FF" class="style10"><div align="center"><strong>Prodikti* </strong></div></td>
          <td width="8%" bgcolor="#3399FF" class="style10"><div align="center"><strong>Pembangunan**</strong></div></td>
          <td width="8%" bgcolor="#3399FF" class="style10"><div align="center"><strong>BPP</strong></div></td>
          <td width="8%" bgcolor="#3399FF" class="style10"><div align="center"><strong>SKS</strong></div></td>
        </tr>
        <tr>
          <td rowspan="2" bordercolor="#000000" bgcolor="#99FF00" class="style10"><div align="center" class="style11">STMIK</div></td>
          <td bordercolor="#000000" bgcolor="#99FF00" class="style10"><div align="left">Sistem Informasi </div></td>
          <td bordercolor="#000000" bgcolor="#99FF00" class="style10"><div align="center">S-1</div></td>
          <td bordercolor="#000000" bgcolor="#99FF00" class="style10"><div align="center">Rp 650.000-, </div></td>
          <td bordercolor="#000000" bgcolor="#99FF00" class="style10"><div align="center">Rp 600.000-, </div></td>
          <td bordercolor="#000000" bgcolor="#99FF00" class="style10"><div align="center">Rp 2.500.000-, </div></td>
          <td bordercolor="#000000" bgcolor="#99FF00" class="style10"><div align="center">Rp 1.500.000-,</div></td>
        </tr>
        <tr>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="left">Teknik Informatika </div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">S-1</div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 650.000-, </div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 600.000-, </div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 2.500.000-,</div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 1.500.000-,</div></td>
        </tr>
        <tr>
          <td rowspan="3" bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center" class="style11">AMIK</div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="left">Komputerisasi Akuntansi </div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">D-3</div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 650.000-, </div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 600.000-, </div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 2.300.000-,</div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 1.500.000-,</div></td>
        </tr>
        <tr>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="left">Manajemen Informatika </div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">D-3</div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 650.000-, </div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 600.000-, </div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 2.300.000-,</div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 1.500.000-,</div></td>
        </tr>
        <tr>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="left">Teknik Komputer </div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">D-3</div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 650.000-, </div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 600.000-, </div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 2.300.000-,</div></td>
          <td bordercolor="#FF9900" bgcolor="#99FF00" class="style10"><div align="center">Rp 1.500.000-,</div></td>
        </tr>
      </table>      
      <table width="100%" border="1" cellspacing="0" cellpadding="3">
        <tr bgcolor="#FF9900">
          <td colspan="2" bgcolor="#3399FF" class="style10"><span class="style12">CATATAN</span></td>
        </tr>
        <tr>
          <td width="5%" rowspan="4" bgcolor="#99FF00" class="style10"><div align="center" class="style13">1</div>            <div align="center"></div>            <div align="center"></div>            <div align="center"></div></td>
          <td bgcolor="#99FF00" class="style10"><span class="style13">- Biaya sudah termasuk jas almamater dan buku pedoman </span></td>
        </tr>
        <tr>
          <td bgcolor="#99FF00" class="style10"><span class="style13">- Biaya pembangunan </span></td>
        </tr>
        <tr>
          <td bgcolor="#99FF00" class="style10"><blockquote class="style13"><p>Jenjang S-1 6x @Rp 600.000-,/smt </p>
          </blockquote></td>
        </tr>
        <tr>
          <td bgcolor="#99FF00" class="style10"><blockquote class="style13">Jenjang D-3 5x @Rp 600.000-,/smt </blockquote></td>
        </tr>
        <tr>
          <td bgcolor="#99FF00" class="style10"><div align="center" class="style13">2</div></td>
          <td bgcolor="#99FF00" class="style10"><span class="style13">Biaya KTM (Kartu Tanda Mahasiswa) Rp 30.000-, </span></td>
        </tr>
        <tr>
          <td bgcolor="#99FF00" class="style10"><div align="center" class="style13">3</div></td>
          <td bgcolor="#99FF00" class="style10"><span class="style13">Dana Kemahasiswaan Rp 100.000-, /smt </span></td>
        </tr>
        <tr>
          <td bgcolor="#99FF00" class="style10"><div align="center" class="style13">4</div></td>
          <td bgcolor="#99FF00" class="style10"><span class="style13">Dana Asuransi Kecelakaan Rp 5.000-,/smt </span></td>
        </tr>
        <tr>
          <td bgcolor="#99FF00" class="style10"><div align="center" class="style13">5</div></td>
          <td bgcolor="#99FF00" class="style10"><span class="style13">Perpustakaan Rp 75.000-,/smt </span></td>
        </tr>
        <tr bgcolor="#FF9900">
          <td colspan="2" bgcolor="#3399FF" class="style10"><span class="style13"><strong>POTONGAN BIAYA </strong></span></td>
        </tr>
        <tr>
          <td bordercolor="#66FFFF" bgcolor="#99FF00" class="style10"><div align="center" class="style13">1</div></td>
          <td bordercolor="#66FFFF" bgcolor="#99FF00" class="style10"><span class="style13">Gelombang 1 sebesar 10% dari uang pembangunan </span></td>
        </tr>
      </table>
      <p class="style3">&nbsp;</p><td bordercolor="#FF9933"></td>
    </tr>
  </tbody>
</table>
<?php
}
?>




<!--data mahasiswa-->
<?php
if ($menu =="mahasiswa")
{
	$cari = $_REQUEST["txt_cari"];
	
	//jika cari = kosong
	if(empty($cari))
	{
		//tampilkan semua data
		$pencarian = "";
		$cari_data = "select * from tbl_mahasiswa order by npm";
	}
	//jika ada nilainya
	else
	{
		//cari data berdasrkan no ktp
		$pencarian = $_REQUEST["txt_cari"];
		$cari_data = "select * from tbl_mahasiswa where npm like '%$pencarian%' or nama like '%$pencarian%' order by npm";
	}
		//eksekusi koneksi
		$hasil = mysqli_query($conn, $cari_data);
?>
<table width="100%" border="0" cellpadding="3" id="info-tabel">
  <tbody>
      <tr id="info-judul">
      <td bgcolor="#99FF00">Data Mahasiswa</td>
    </tr>
    <tr>
      <td id="info-isi"><form name="form1" method="post" action="">
        <table width="100%" border="0" cellpadding="3">
          <tr>
            <td width="35%" align="left"><a href="?menu=input_anggota" class="link"><input type="button" name="btn_tambah" id="tombol-input" value="Tambah"/></td>
            <td width="65%"><label for="textfield"></label>
              Cari Data Berdasarkan NPM / Nama  
                <input type="text" name="txt_cari" id="komponen-cari">
                <input type="submit" name="btn_cari" id="tombol-cari" value=""></td>
          </tr>
          <tr>
            <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="3">
              <tr id="tabel-judul">
                <td width="10%" bordercolor="#FF9933" bgcolor="#99FF00" id="tabel-judul-teks">NPM</td>
                <td width="16%" bordercolor="#FF9933" bgcolor="#99FF00" id="tabel-judul-teks">Nama Mahasiswa</td>
                <td width="15%" bordercolor="#FF9933" bgcolor="#99FF00" id="tabel-judul-teks">Jurusan</td>
                <td width="14%" bordercolor="#FF9933" bgcolor="#99FF00" id="tabel-judul-teks">Tanggal Lahir</td>
                <td width="13%" bordercolor="#FF9933" bgcolor="#99FF00" id="tabel-judul-teks">Jenis Kelamin</td>
                <td width="15%" bordercolor="#FF9933" bgcolor="#99FF00" id="tabel-judul-teks">Alamat</td>
                <td width="10%" bordercolor="#FF9933" bgcolor="#99FF00" id="tabel-judul-teks">Agama</td>
                <td width="7%" bordercolor="#FF9933" bgcolor="#99FF00" id="tabel-judul-teks-nongaris">Actions</td>
              </tr>
       
            <?php 
			while($data = mysqli_fetch_array($hasil))
			{
				
				$npm = $data["npm"];
				$nama = $data["nama"];
				$jurusan = $data["jurusan"];
				$tgl_lahir = $data["tgl_lahir"];
				$jenis_kelamin = $data["jenis_kelamin"];
				$alamat = $data["alamat"];
				$agama = $data["agama"];
			?>
              <tr id="tabel-isi-genap">
                <td bordercolor="#FF9933" bgcolor="#E5E1DA" id="tabel-isi-teks-lb"><?php echo $npm; ?> </td>
                <td bordercolor="#FF9933" bgcolor="#E5E1DA" id="tabel-isi-teks-lb"> <?php echo $nama; ?> </td>
                <td bordercolor="#FF9933" bgcolor="#E5E1DA" id="tabel-isi-teks-lb"><?php echo $jurusan; ?> </td>
                <td bordercolor="#FF9933" bgcolor="#E5E1DA" id="tabel-isi-teks-lb"> <?php echo $tgl_lahir; ?></td>
                <td bordercolor="#FF9933" bgcolor="#E5E1DA" id="tabel-isi-teks-lb"> <?php echo $jenis_kelamin; ?></td>
                <td bordercolor="#FF9933" bgcolor="#E5E1DA" id="tabel-isi-teks-lb"> <?php echo $alamat; ?></td>
                <td bordercolor="#FF9933" bgcolor="#E5E1DA" id="tabel-isi-teks-lb"> <?php echo $agama; ?></td>
                <td bordercolor="#FF9933" bgcolor="#E5E1DA" id="tabel-isi-teks-lbr">  <a href="<?php echo "?menu=ubah_mahasiswa&npm=$npm"?>" title="Ubah Mahasiswa " class="link"><img src="img/ubah.png" width="16" height="16"/>&nbsp; <a href="<?php  echo "?menu=hapus_mahasiswa&npm=$npm" ?>" class="link" onClick="return hapus('<?php  echo $npm ?>')"> <img src="img/hapus.png" width="16" height="16" border="0" /></td>
              </tr>
             <?php
			}
			 ?>  
            </table></td>
            </tr>
        </table>
      </form></td>
    </tr>
  </tbody>
</table>
<?php
}
?>


<!-- hapus data mahasiswa -->
<?php
	if($menu == "hapus_mahasiswa")
	{
		$npm = $_REQUEST["npm"];
		//hapus data anggota berdasarkan n0_ktp
		$query = mysqli_query($conn,"delete from tbl_mahasiswa where npm = '$npm'");
		//refresh halaman
		echo "<script>location.href='?menu=mahasiswa';</script>";
	}
?>


<!--data registrasi-->
<?php
if ($menu == "registrasi")
{
	$cari = $_REQUEST["txt_cari"];
	//jika cari = kosong
	if(empty($cari))
	{
		//tampilkan semua data
		$pencarian = "";
		$cari_data = "SELECT tbl_pembayaran.no_transaksi
    					, tbl_mahasiswa.npm
    					, tbl_mahasiswa.nama
    					, tbl_pembayaran.tgl_pembayaran
    					, tbl_pembayaran.jenis_pembayaran
    					, (b_pendaftaran + b_pembangunan + b_produksi + bpp_semester + sks + lain_lain) as total_pembayaran
    					, tbl_pembayaran.keterangan
					 FROM
    					db_pembayaran.tbl_pembayaran
    				 INNER JOIN db_pembayaran.tbl_mahasiswa 
        			 ON (tbl_pembayaran.npm = tbl_mahasiswa.npm) order by tgl_pembayaran";
	}
	//jika ada nilainya
	else
	{
		//cari data berdasrkan no_registrasi
		$pencarian = $_REQUEST["txt_cari"];
		$cari_data = "SELECT tbl_pembayaran.no_transaksi
    					, tbl_mahasiswa.npm
    					, tbl_mahasiswa.nama
    					, tbl_pembayaran.tgl_pembayaran
    					, tbl_pembayaran.jenis_pembayaran
    					, (b_pendaftaran + b_pembangunan + b_produksi + bpp_semester + sks + lain_lain) as total_pembayaran
    					, tbl_pembayaran.keterangan
					 FROM
    					db_pembayaran.tbl_pembayaran
    				 INNER JOIN db_pembayaran.tbl_mahasiswa 
        			 ON (tbl_pembayaran.npm = tbl_mahasiswa.npm) where tbl_pembayaran.no_transaksi like '%$pencarian%' or tbl_pembayaran.npm like '%$pencarian%' order by tgl_pembayaran";
	}
		//eksekusi koneksi
		$hasil = mysqli_query($conn, $cari_data);	
?>

<table width="100%" border="0" cellpadding="3" id="info-tabel">
  <tbody>
      <tr id="info-judul">
      <td bgcolor="#99FF00">Data Registrasi PEMBAYARAN </td>
    </tr>
    <tr>
      <td id="info-isi"><form id="fregistrasi" name="fregistrasi" method="post">
      <table width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr>
          <td width="35%">
          <a href="?menu=input_registrasi" class="link"><input type="button" name="btn_tambah" id="tombol-input" value="Tambah" /></td>
          <td width="65%">Cari Data Berdasarkan No Registrasi / NPM
          <input type="text" name="txt_cari" id="komponen-cari">
          <input type="submit" name="btn_cari" id="tombol-cari" value="">
          </td>
        </tr>
        <tr>
          <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr id="tabel-judul">
              <td width="10%" bgcolor="#99FF00" id="tabel-judul-teks">No Registrasi</td>
              <td width="10%" bgcolor="#99FF00" id="tabel-judul-teks">NPM</td>
              <td width="20%" bgcolor="#99FF00" id="tabel-judul-teks">Nama Mahasiswa</td>
              <td width="10%" bgcolor="#99FF00" id="tabel-judul-teks">Tanggal Pembayaran</td>
              <td width="15%" bgcolor="#99FF00" id="tabel-judul-teks">Jenis Pembayaran</td>
              <td width="15%" bgcolor="#99FF00" id="tabel-judul-teks">Total Pembayaran</td>
              <td width="10%" bgcolor="#99FF00" id="tabel-judul-teks">Keterangan</td>
              <td width="10%" bgcolor="#99FF00" id="tabel-judul-teks-nongaris">Action</td>
            </tr>
            
            <?php
			while($data = mysqli_fetch_array($hasil))
			{
				$no_transaksi = $data["no_transaksi"];
				$npm = $data["npm"];
				$nama = $data["nama"];
				$tgl_pembayaran = $data["tgl_pembayaran"];
				$jenis_pembayaran = $data["jenis_pembayaran"];
				$total_pembayaran = $data["total_pembayaran"];
				$keterangan = $data["keterangan"];
			?>
            <tr id="tabel-isi-genap">
              <td id="tabel-isi-teks-lb"><?php echo $no_transaksi; ?></td>
              <td id="tabel-isi-teks-lb"><?php echo $npm; ?></td>
              <td id="tabel-isi-teks-lb"><?php echo $nama; ?></td>
              <td id="tabel-isi-teks-lb"><?php echo $tgl_pembayaran; ?></td>
              <td id="tabel-isi-teks-lb"><?php echo $jenis_pembayaran; ?></td>
              <td id="tabel-isi-teks-lb"><?php echo $total_pembayaran; ?></td>
              <td id="tabel-isi-teks-lb"><?php echo $keterangan; ?></td>                 
              <td id="tabel-isi-teks-lbr"><a href="<?php echo "?menu=ubah_registrasi&no_transaksi=$no_transaksi"?>" title="Ubah Registrasi " class="link"><img src="img/ubah.png" width="16" height="16"/>&nbsp;</td>
            </tr>
            <?php
			}
			 ?>  
          </table></td>
          </tr>
      </table>
      </form>
      </td>
    </tr>
  </tbody>
</table>
<?php
}
?>


<!--input data registrasi-->
<?php
if($menu == "input_registrasi")
{//ambil nilai dari masing2 komponen form
	   $no_transaksi = $_REQUEST["txt_notransaksi"];
	   $npm = $_REQUEST["txt_npm"];
	   $nama = $_REQUEST["txt_nama"];
	   $tgl_bayar = $_REQUEST["tgl_pembayaran"];
	   $jenis = $_REQUEST["txt_jenis"];
	   $pendaftaran = $_REQUEST["txt_pendaftaran"];
	   $prodikti = $_REQUEST["txt_prodikti"];
	   $pembangunan = $_REQUEST["txt_pembangunan"];
	   $bpp = $_REQUEST["txt_bpp"];
	   $sks = $_REQUEST["txt_sks"];
	   $lain_lain = $_REQUEST["txt_lain_lain"];
	   $keterangan = $_REQUEST["radio"];
	   $btn_simpan = $_REQUEST["btn_simpan"];
	   //jika tombol simpan dipilih
	   if(isset($btn_simpan))
	   {
		   //jika data belum lengkap
		   if(empty($no_transaksi) || empty($npm) || empty($tgl_bayar) || empty($jenis) || empty($pendaftaran) || empty($prodikti) || empty($pembangunan) || empty($bpp) || empty($sks) || empty($lain_lain) || empty($keterangan))
		    {
			   $pesan = "Lengkapi Seluruh Data";
			}
			else //jika data sudah lengkap
			{
				//cek apakah no_ktp sudah atau belum di dalam databsenya
				$query = mysqli_query($conn, "select * from tbl_pembayaran where no_transaksi = '$no_transaksi'");
				//jika no_ktp sudah ada
				if(mysqli_num_rows($query)!=0)
				{
					$pesan = "No Transaksi Sudah Ada !!!";
				}
				else //jika no_ktp belum ada
				{
					//simpan kedalam database
					$query = mysqli_query($conn,"insert into tbl_pembayaran values('$no_transaksi','$npm','$tgl_bayar','$jenis','$pendaftaran','$prodikti','$pembangunan','$bpp','$sks','$lain_lain','$keterangan')");
					//refresh halaman
					echo "<script>location.href='?menu=registrasi';</script>";
				}
			}
	   }
?>
<table width="100%" border="0" cellpadding="3" id="info-tabel">
  <tbody>
      <tr id="info-judul">
      <td bgcolor="#99FF00">Input Data Registrasi</td>
    </tr>
    <tr>
      <td id="info-isi"><form id="form3" name="form3" method="post" action="">
        <table width="100%" border="0" cellspacing="0" cellpadding="3">
          <tr>
            <td colspan="2" id="error"><?php echo $pesan; ?></td>
            </tr>
          <tr>
            <td width="20%">No Registrasi</td>
            <td width="80%"><label for="txt_npm"></label>
              <input type="text" name="txt_notransaksi" id="komponen-text" /></td>
          </tr>
          <tr>
            <td>NPM</td>
            <td><label for="txt_nama"></label>
              <input type="text" name="txt_npm" id="komponen-text" /></td>
          </tr>
          <tr>
            <td>Tanggal Pembayaran </td>
            <td><input type="text" name="tgl_pembayaran" id="komponen-text"><a href="#" onClick="cal1.select(document.forms[0].tgl_pembayaran,'anchor1','yyyy-MM-dd'); return false;" name="anchor1" id="anchor1">&nbsp;<img src="img/cari.png" width="16" height="16" border="0" align="texttop" /></td>
          </tr>
          <tr>
            <td>Jenis Pembayaran</td>
            <td><label for="txt_pendaftaran"></label>
              <input type="text" name="txt_jenis" id="komponen-text" /></td>
          </tr>
          <tr>
            <td>Biaya Pendaftaran</td>
            <td><label for="txt_prodikti"></label>
              <input type="text" name="txt_pendaftaran" id="komponen-text" /></td>
          </tr>
          <tr>
            <td>Biaya Prodikti</td>
            <td><label for="txt_pembangunan"></label>
              <input type="text" name="txt_prodikti" id="komponen-text" /></td>
          </tr>
          <tr>
            <td>Biaya Pembangunan</td>
            <td><label for="txt_bpp"></label>
              <input type="text" name="txt_pembangunan" id="komponen-text" /></td>
          </tr>
          <tr>
            <td>Biaya BPP</td>
            <td><label for="txt_sks"></label>
              <input type="text" name="txt_bpp" id="komponen-text" /></td>
          </tr>
          <tr>
            <td>SKS Semester</td>
            <td><label for="txt_lain_lain"></label>
              <input type="text" name="txt_sks" id="komponen-text" /></td>
          </tr>
          <tr>
            <td>Biaya Lain - lain</td>
            <td><label for="textfield11"></label>
              <input type="text" name="txt_lain_lain" id="komponen-text" /></td>
          </tr>
          <tr>
            <td>Keterangan</td>
            <td><input name="radio" type="radio" value="Lunas" checked="1" />
              Lunas 
              <input type="radio" name="radio" value="Belum Lunas" />
              Belum Lunas</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="btn_simpan" id="tombol-simpan" value="Simpan" />
              <input type="reset" name="Reset" id="tombol-batal" value="Reset" /></td>
          </tr>
        </table>
      </form></td>
    </tr>
  </tbody>
</table>

  <?php
}
?>


<!--ubah data registrasi-->
<?php
if($menu == "ubah_registrasi")
{
	   $btn_ubah = $_REQUEST["btn_ubah"];
	   $no_transaksi = $_REQUEST["no_transaksi"];
	   $query = mysqli_query($conn,"select * from tbl_pembayaran where no_transaksi='$no_transaksi'");
	   $data = mysqli_fetch_array($query);
	   if(!isset($btn_ubah))
	   {
		   $txt_notransaksi = $data["no_transaksi"];
		   $txt_npm = $data["npm"];
		   $tgl_pembayaran = $data["tgl_pembayaran"];
		   $txt_jenis = $data["jenis_pembayaran"];
		   $txt_pendaftaran = $data["b_pendaftaran"];
		   $txt_prodikti = $data["b_produksi"];
		   $txt_pembangunan = $data["b_pembangunan"];
		   $txt_bpp = $data["bpp_semester"];
		   $txt_sks = $data["sks"];
		   $txt_lain_lain = $data["lain_lain"];
		   $radio = $data["keterangan"];
	   }
	   else
	   {
		   	$txt_notransaksi = $_REQUEST["txt_notransaksi"];
	   	   	$txt_npm = $_REQUEST["txt_npm"];
	   	   	$txt_nama = $_REQUEST["txt_nama"];
	  	  	$tgl_pembayaran = $_REQUEST["tgl_pembayaran"];
	   		$txt_jenis = $_REQUEST["txt_jenis"];
	   		$txt_pendaftaran = $_REQUEST["txt_pendaftaran"];
	  		$txt_prodikti = $_REQUEST["txt_prodikti"];
	  		$txt_pembangunan = $_REQUEST["txt_pembangunan"];
	  		$txt_bpp = $_REQUEST["txt_bpp"];
	   		$txt_sks = $_REQUEST["txt_sks"];
	   		$txt_lain_lain = $_REQUEST["txt_lain_lain"];
	   		$radio = $_REQUEST["radio"];
		   
		   //jika data masih kosong
		   if(empty($txt_notransaksi))
		   {
			   $pesan = "Data Masih kosong !!";
		   }
		   else
		   {
			   $query = mysqli_query($conn, "update tbl_pembayaran set npm='$txt_npm', tgl_pembayaran='$tgl_pembayaran', jenis_pembayaran='$txt_jenis', b_pendaftaran='$txt_pendaftaran', b_produksi='$txt_prodikti', b_pembangunan='$txt_pembangunan', bpp_semester='$txt_bpp', sks='$txt_sks', lain_lain='$txt_lain_lain', keterangan='$radio' where no_transaksi='$txt_notransaksi'");
			   //refresh halaman
			   echo "<script>location.href='?menu=registrasi';</script>";
		   }
	   }
?>
<table width="100%" border="0" cellpadding="3" id="info-tabel">
  <tbody>
      <tr id="info-judul">
      <td bgcolor="#99FF00">Ubah Data Registrasi</td>
    </tr>
    <tr>
      <td id="info-isi"><form id="fubahregistrasi" name="fubahregistrasi" method="post" action="">
        <table width="100%" border="0" cellspacing="0" cellpadding="3">
          <tr>
            <td width="20%">&nbsp;</td>
            <td width="80%">&nbsp;</td>
          </tr>
          <tr>
            <td>No Registrasi</td>
            <td><label for="txt_npm"></label>
              <input name="txt_notransaksi" type="text" id="komponen-text" value="<?php echo $no_transaksi; ?>" /></td>
          </tr>
          <tr>
            <td>NPM</td>
            <td><label for="txt_nama"></label>
              <input name="txt_npm" type="text" id="komponen-text" value="<?php echo $txt_npm; ?>" /></td>
          </tr>
          <tr>
            <td>Tanggal Pembayaran</td>
            <td> <input type="text" name="tgl_pembayaran" id="komponen-text" value="<?php echo $tgl_pembayaran; ?>" /><a href="#" onClick="cal1.select(document.forms[0].tgl_pembayaran,'anchor1','yyyy-MM-dd'); return false;" name="anchor1" id="anchor1">&nbsp;<img src="img/cari.png" width="16" height="16" border="0" align="texttop" /></td>
          </tr>
          <tr>
            <td>Jenis Pembayaran</td>
            <td><label for="txt_pendaftaran"></label>
              <input name="txt_jenis" type="text" id="komponen-text" value="<?php echo $txt_jenis; ?>" /></td>
          </tr>
          <tr>
            <td>Biaya Pendaftaran</td>
            <td><label for="txt_prodikti"></label>
              <input name="txt_pendaftaran" type="text" id="komponen-text" value="<?php echo $txt_pendaftaran; ?>" /></td>
          </tr>
          <tr>
            <td>Biaya Prodikti</td>
            <td><label for="txt_pembangunan"></label>
              <input name="txt_prodikti" type="text" id="komponen-text" value="<?php echo $txt_prodikti; ?>" /></td>
          </tr>
          <tr>
            <td>Biaya Pembangunan</td>
            <td><label for="txt_bpp"></label>
              <input name="txt_pembangunan" type="text" id="komponen-text" value="<?php echo $txt_pembangunan; ?>" /></td>
          </tr>
          <tr>
            <td>Biaya BPP</td>
            <td><label for="txt_sks"></label>
              <input name="txt_bpp" type="text" id="komponen-text" value="<?php echo $txt_bpp; ?>" /></td>
          </tr>
          <tr>
            <td>SKS Semester</td>
            <td><label for="txt_lain_lain"></label>
              <input name="txt_sks" type="text" id="komponen-text" value="<?php echo $txt_sks; ?>" /></td>
          </tr>
          <tr>
            <td>Biaya Lain - lain</td>
            <td><label for="textfield11"></label>
              <input name="txt_lain_lain" type="text" id="komponen-text" value="<?php echo $txt_lain_lain; ?>" /></td>
          </tr>
          <tr>
            <td>Keterangan</td>
            <td><input name="radio" type="radio" value="Lunas" checked="1" />
              <label for="radio"></label>
              Lunas 
              <input type="radio" name="radio" value="Belum Lunas" />
              Belum Lunas</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="btn_ubah" id="tombol-ubah" value="Ubah" />
              <input type="reset" name="Reset" id="tombol-batal" value="Reset" /></td>
          </tr>
        </table>
      </form></td>
    </tr>
  </tbody>
</table>

  <?php
}
?>


<!--input data mahasiswa-->
<?php
if($menu == "input_anggota")
{
	$npm = $_REQUEST["txt_npm"];
	$nama = $_REQUEST["txt_nama"];
	$jurusan = $_REQUEST["cmb_jurusan"];
	$tgl_lahir = $_REQUEST["tanggal"];
 	$jenis_kelamin = $_REQUEST["radio"];
	$alamat =$_REQUEST["txt_alamat"];
	$agama =$_REQUEST["cmb_agama"];
	$btn_simpan = $_REQUEST["btn_simpan"];
	
	if(isset($btn_simpan))
	{
		//jika dat belum lengkap
		if (empty($npm) || empty($nama) || empty($jurusan) || empty($tgl_lahir)|| empty($jenis_kelamin)|| empty($alamat)|| empty($agama))
		{
			$pesan ="lengkapi Seluruh Data !!!";
			}
			
		else //jika data sudah lengkap
		{
			//cek apakah no ktp sudah ada atau belum di dalam database
			$query = mysqli_query($conn,"select * from tbl_mahasiswa where npm = '$npm'");
			//jika no ktp sudah ada
			if(mysqli_num_rows($query)!=0)
			{
				$pesan="NPM  Sudah ada !!!";
								}
								
			else //jika no ktp belum ada
			{
				///simpan kedalam database
				
				$query =mysqli_query($conn, "insert into tbl_mahasiswa values('$npm',
				'$nama','$jurusan','$tgl_lahir','$jenis_kelamin','$alamat','$agama')");
				
				//refresh halaan
				echo "<script> location.href='?menu=mahasiswa';</script>";
				}
			}
		}
?>

<table width="100%" border="0" cellpadding="3" id="info-tabel">
  <tbody>
      <tr id="info-judul">
      <td bgcolor="#99FF00"> INPUT DATA MAHASISWA </td>
    </tr>
    <tr>
      <td id="info-isi"><form id="form2" name="form2" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr>
          <td colspan="2">&nbsp;</td>
          </tr>
        <tr>
          <td width="30%">NPM</td>
          <td>
            <input type="text" name="txt_npm" id="txt_npm" />
          </td>
          </tr>
        <tr>
          <td>Nama Mahasiswa</td>
          <td>
            <label for="txt_nama"></label>
            <input type="text" name="txt_nama" id="txt_nama" />
          </td>
          </tr>
        <tr>
          <td>Jurusan</td>
          <td>
            <select name="cmb_jurusan" id="cmb_jurusan">
              <option>--Pilih jurusan--</option>
              <option>Sistem Informasi</option>
              <option>Teknik Informatika</option>
              <option>Sastra Inggris</option>
              <option>Teknik Komputer</option>
              <option>Komputer Akuntansi</option>
              <option>Menejemen Informatika</option>
              </select>
          </td>
          </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td> <input name="tanggal" type="date" id="komponen-text" /><a href="#" onClick="cal1.select(document.forms[0].tanggal,'anchor1','yyyy-MM-dd'); return false;" name="anchor1" id="anchor1">&nbsp;<img src="img/cari.png" width="16" height="16" border="0" align="texttop" /></a></td>
          </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
            <input type="radio" name="radio" value="Pria" checked="1"/>
            Laki-laki
            <input type="radio" name="radio" value="Wanita" />
            Wanita
          </td>
          </tr>
        <tr>
          <td>Alamat</td>
          <td>
            <label for="txt_alamat"></label>
            <input type="text" name="txt_alamat" id="txt_alamat" />
          </td>
          </tr>
        <tr>
          <td>Agama</td>
          <td>
            <label for="cmb_agama"></label>
            <select name="cmb_agama" id="cmb_agama">
              <option>--Pilih Agama--</option>
              <option>Islam</option>
              <option>Kristen</option>
              <option>Hindu</option>
              <option>Budha</option>
              </select>
          </td>
          </tr>
        <tr>
          <td colspan="2">
            <input type="submit" name="btn_simpan" id="tombol-simpan" value="Submit" />
            <input type="reset" name="Reset" id="tombol-batal" value="Reset" />
          </td>
          </tr>
      </table>
      </form></td>
    </tr>
  </tbody>
</table>
<?php
}
?>


<!--ubah data mahasiswa-->
<?php
if($menu == "ubah_mahasiswa")
{
	
		$btn_ubah = $_REQUEST["btn_ubah"];
	   $npm = $_REQUEST["npm"];
	   $query = mysqli_query($conn, "select * from tbl_mahasiswa where npm='$npm'");
	   $data = mysqli_fetch_array($query);
	   if(!isset($btn_ubah))
	   {
		  		$txt_npm = $data["npm"];
				$txt_nama = $data["nama"];
				$cmb_jurusan = $data["jurusan"];
				$tanggal = $data["tgl_lahir"];
				$radio = $data["jenis_kelamin"];
				$txt_alamat = $data["alamat"];
				$cmb_agama = $data["agama"];
	   }
	   else
	   {
		   	$txt_npm = $_REQUEST["txt_npm"];
			$txt_nama = $_REQUEST["txt_nama"];
			$cmb_jurusan = $_REQUEST["cmb_jurusan"];
			$tanggal = $_REQUEST["tanggal"];
 			$radio = $_REQUEST["radio"];
			$txt_alamat =$_REQUEST["txt_alamat"];
			$cmb_agama =$_REQUEST["cmb_agama"];
	
		   //jika data masih kosong
		   if(empty($txt_npm))
		   {
			   $pesan = "Data Masih Ada Yang Kosong !!!";
		   }
		   else
		   {
			   $query = mysqli_query($conn,"update tbl_mahasiswa set nama='$txt_nama', jurusan='$cmb_jurusan', tgl_lahir='$tanggal' , jenis_kelamin='$radio' , alamat='$txt_alamat', agama='$cmb_agama' where npm='$txt_npm'");
			   //refresh halaman
			   echo "<script>location.href='?menu=mahasiswa';</script>";
		   }
	   }
?>
<table width="100%" border="0" cellpadding="3" id="info-tabel">
  <tbody>
      <tr id="info-judul">
      <td bgcolor="#99FF00"> UBAH DATA MAHASISWA </td>
    </tr>
    <tr>
      <td id="info-isi"><form id="fubahmahasiswa" name="fubahmahasiswa" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr>
          <td id="error"><?php echo $pesan; ?>&nbsp;</td>
          </tr>
        <tr>
          <td width="30%">NPM</td>
          <td width="40%">
            <input name="txt_npm" type="text" id="txt_npm" value="<?php echo $txt_npm; ?>" />
          </td>
          <td width="30%">&nbsp;</td>
        </tr>
        <tr>
          <td>Nama Mahasiswa</td>
          <td>
            <label for="txt_nama"></label>
            <input name="txt_nama" type="text" id="txt_nama" value="<?php echo $txt_nama; ?>" />
          </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td>
            <select name="cmb_jurusan" id="cmb_jurusan" value="<?php echo $cmb_jurusan; ?>"  />
              <option>--Pilih jurusan--</option>
              <option>Sistem Informasi</option>
              <option>Teknik Informatika</option>
              <option>Sastra Inggris</option>
              <option>Teknik Komputer</option>
              <option>Komputer Akuntansi</option>
              <option>Menejemen Informatika</option>
            </select>
          </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td>  <input name="tanggal" type="date" id="komponen-text" value="<?php echo $tanggal; ?>"  /><a href="#" onClick="cal1.select(document.forms[0].tanggal,'anchor1','yyyy-MM-dd'); return false;" name="anchor1" id="anchor1">&nbsp;<img src="img/cari.png" width="16" height="16" border="0" align="texttop" /></a></td>
          </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
            <input type="radio" name="radio" value="Laki-laki" checked="1" />
            Laki-laki
            <input type="radio" name="radio" value="Wanita" />
			Wanita
          </td>
          <td>
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>
            <label for="txt_alamat"></label>
            <input name="txt_alamat" type="text" id="txt_alamat" value="<?php echo $txt_alamat; ?>" />
          </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Agama</td>
          <td>
            <label for="cmb_agama"></label>
            <select name="cmb_agama" id="cmb_agama">
              <option>--Pilih Agama--</option>
              <option>Islam</option>
              <option>Kristen</option>
              <option>Hindu</option>
              <option>Budha</option>
            </select>
          </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3">
            <input type="submit" name="btn_ubah" id="tombol-ubah" value="Ubah" />
            <input type="reset" name="Reset" id="tombol-batal" value="Reset" />
          </td>
          </tr>
      </table>
      </form></td>
    </tr>
  </tbody>
</table>
<?php
}
?>




