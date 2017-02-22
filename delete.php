<?php

try{
	$koneksi=new PDO("mysql:host=localhost;port=3306;dbname=project_12;","root","");
	//echo"Koneksi Berhasil";
}
catch(PDOException $e){
	echo $e->getmessage();
}


$id=$_GET['id'];
	
	
	$delete_table=("DELETE from artikel where id='$id'");
	
	$delete=$koneksi->prepare($delete_table);
	$delete->execute();

	if($insert){
		header("location:index.php");
	}
	
	
	
	

?>
