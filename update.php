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

	$id=$_POST['id'];
	
	$sql ="update artikel set judul='$judul', isi='$isi',tanda='$tanda' where id='$id';";
	
	$insert=$koneksi->prepare($sql);
	$insert->execute();
	
	if($insert){
		header("location:index.php");
	}else{
		echo"Gagal Memasukan Data";
	}
	
	}

?>
