
<?php

try{
	$koneksi=new PDO("mysql:host=localhost;port=3306;dbname=project_12;","root","");
	
}
catch(PDOException $e){
	echo $e->getmessage();
}

if(isset($_POST['submit'])){
	$username =$_POST['username'];
	$password=$_POST['password'];
	
	
	$select_table="select*from admin where  username='$username' and password='$password'";
	
	$select=$koneksi->prepare($select_table);
	$select->execute();
	$data=$select->fetch();
	
	if($data['username']!=$username and $data['password']!=$password){
		echo"Username dan Password  salah";
		//header("location:input.php");
	}else if($data['username']==$username and $data['password']==$password){
		$_SESSION['username']=$data['username'];
		$_SESSION['password']=$data['password'];
		header("location:index.php");
		//echo"Gagal Memasukan Data";
	}
	
	
	
	}

?>
