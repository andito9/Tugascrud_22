<?php

try{
	$koneksi=new PDO("mysql:host=localhost;port=3306;dbname=project_12;","root","");
	echo"Koneksi Berhasil";
}
catch(PDOException $e){
	echo $e->getmessage();
}

if(isset($_POST['submit'])){
	$username =$_POST['username'];
	$password=$_POST['password'];

	
	
	$insert_table="insert into admin(username,password) value('$username','$password')";
	
	$insert=$koneksi->prepare($insert_table);
	$insert->execute();

	if($insert){
		header("location:login.php");
	}else{
		echo"Gagal Memasukan Data";
	}
	
	
	
	}

?>
