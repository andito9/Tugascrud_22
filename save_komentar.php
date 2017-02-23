<?php
	try{
	$koneksi=new PDO("mysql:host=localhost;port=3306;dbname=project_12;","root","");
	echo"Koneksi Berhasil";
}
catch(PDOException $e){
	echo $e->getmessage();
}

if(isset($_POST['submit'])){
	$id =$_POST['id'];
	$id_artikel=$_POST['id_artikel'];
	$komentar=$_POST['komentar'];

$komentar=$_GET['komentar'];
$query=$koneksi->prepare("insert into komentar(id,id_komentar,komentar) value('$id','$id_komentar','$tanda','$cover'");
$hasil=$query->execute();

if($hasil){
		header("location:index.php");
	}else{
		echo"Gagal Memasukan Data";
	}
?>