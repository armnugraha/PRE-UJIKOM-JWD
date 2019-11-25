<?php

// error_reporting(0);

include('../connection/connection.php');

// Function FOR EDIT siswa

if(isset($_POST['save']) && !empty($_POST["nis"]) && !empty($_POST["nama"]) && !empty($_POST["alamat"]) && !empty($_POST["tgl_lhr"]) ){

  $nis = mysqli_real_escape_string($koneksi,$_POST['nis']);
  $nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
  $alamat = mysqli_real_escape_string($koneksi,$_POST['alamat']);
  $tgl_lhr = mysqli_real_escape_string($koneksi,$_POST['tgl_lhr']);


   
    //melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
    $input = mysqli_query($koneksi, "INSERT INTO siswa VALUES(NULL, '$nis', '$nama', '$alamat', '$tgl_lhr')");
    
	if($input){
    	echo "Berhasil Disimpan";
	    header("Refresh:1; url= ../index.php");
    
	}else{
		echo 'Gagal menambahkan data! ';    //Pesan jika proses tambah gagal
		header("Refresh:1; url= ../index.php?page=views/home/create");
  	}

}else if(isset($_POST['edit-siswa']) && !empty($_POST["nis"]) && !empty($_POST["nama"]) && !empty($_POST["alamat"]) && !empty($_POST["tgl_lhr"]) ){

	$id = mysqli_real_escape_string($koneksi, $_POST['get_id']);
	$nis = mysqli_real_escape_string($koneksi,$_POST['nis']);
	$nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
	$alamat = mysqli_real_escape_string($koneksi,$_POST['alamat']);
	$tgl_lhr = mysqli_real_escape_string($koneksi,$_POST['tgl_lhr']);

	$update = mysqli_query($koneksi, "UPDATE siswa SET nis='$nis', nama='$nama', alamat='$alamat', tgl_lhr='$tgl_lhr' WHERE id='$id'");


	//jika query update sukses
	if($update){
		echo "Berhasil Diubah";
		header("Refresh:1; url= ../index.php");
		
	}else{
		
		echo 'Gagal menyimpan data!';
		header("Refresh:1; url= ../index.php?page=views/home/edit&get_id='.$id.'");
		
	}


//Function For Delete siswa
}else if (isset($_GET['get_id'])){
	
	$id = $_GET['get_id'];
	
	$cek = mysqli_query($koneksi,"SELECT id FROM siswa WHERE id='$id'");
	
	if(mysqli_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		$del = mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");

		if($del){
			echo "Berhasil Dihapus";
			header("Refresh:1; url= ../index.php");
			
		}else{
			
			echo 'Gagal menghapus data! ';
			header("Refresh:1; url= ../index.php");
		}
		
	}

}else{

	echo '<script>window.history.back()</script>';

}

?>