<?php
include "koneksi.php";
session_start();

if (isset($_POST['upload'])) {

	$directori = 'ebook/';
	$nama_file = $_FILES['file']['name'];
	$extensi = strtolower(substr($nama_file,strpos($nama_file, '.') + 1));
	$tipe = $_FILES['file']['type'];
	$ukuran = $_FILES['file']['size'];
	$maks_ukuran = 25000000;
	$tmp_nama = $_FILES['file']['tmp_name'];
	$judul=$_POST['judul'];
	$deskripsi=$_POST['deskripsi'];
	$kategori=$_POST['kategori'];

	if (!empty($nama_file)) {
		if(($extensi =='pdf' || $extensi =='doc' || $extensi =='ppt' || $extensi =='pptx' || $extensi =='docx')&&$ukuran<$maks_ukuran){
			$upload = copy($tmp_nama, "ebook/".$nama_file);

			if(!$upload){
				echo "Ebook dengan judul".$nama_file."gagal diupload";
			}else{

				$cari_id_user=mysql_query("select (id_user)as id_user from tb_user where npm='".$_SESSION['npm']."'");
				$ambil_id_user=mysql_fetch_array($cari_id_user);
				$id_user=$ambil_id_user['id_user'];
				
				$simpan_file=mysql_query("insert into tb_file 
		values('','$id_user','$judul','$kategori','$nama_file','$deskripsi',NOW())");


			if($simpan_file){
			echo '<script> alert("Ebook berhasil terupload")</script>';
			if($_SESSION['level']==1 ){
			header("location:admin/?hal=kelolabuku");
			}else if($_SESSION['level'] == 2){
			echo '<script> alert("Ebook berhasil diupload");</script>';
			header("location:user/index.php?pilih=uploadebook");}
			
		}else{
			echo "Ebook Terupload namun Ebook gagal tersimpan!!! <br> Silahkan upload Ebook file anda";
			unlink("ebook/".$nama_file);
		}

			}
	   } else{
	   	echo '<script> alert ("ekstensi file harus pdf atau document tex seperti doc, ppt"); </script>';
		 $z = "select * from tb_user where npm = '".$_SESSION['npm']."'";
		 $n = mysql_query($z);
		 $l = mysql_fetch_array($n);
		 $level = $l['level'];
		 if($level == 1){
		 echo '<script> alert ("ekstensi file harus pdf atau document tex seperti doc, ppt"); </script>';
			header("location:admin/?hal=kelolabuku");
			}else{
			echo '<script> alert ("ekstensi file harus pdf atau document tex seperti doc, ppt"); </script>';
			header("location:user/index.php?pilih=uploadebook");
			}
	   }

    }
}
?>