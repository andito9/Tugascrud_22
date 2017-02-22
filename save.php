<?php

try{
	$koneksi=new PDO("mysql:host=localhost;port=3306;dbname=project_12;","root","");
	echo"Koneksi Berhasil";
}
catch(PDOException $e){
	echo $e->getmessage();
}

if(isset($_POST['submit'])){
	$judul =$_POST['judul'];
	$isi=$_POST['isi'];
	$tanda=$_POST['tanda'];
	$cover=$_POST['cover'];

	
	
	$insert_table="insert into artikel(judul,isi,tanda,cover) value('$judul','$isi','$tanda','$cover')";
	
	$insert=$koneksi->prepare($insert_table);
	$insert->execute();

	if($insert){
		header("location:index.php");
	}else{
		echo"Gagal Memasukan Data";
	}
	
	$lokasi_file=$_FILES[]
	
	
	
	}

?>
