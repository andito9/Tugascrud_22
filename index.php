<?php

	session_start();
	if(isset($_SESSION['username'])){
		header('location:login.php');
	}
	else{
		$username = $_SESSION['username'];
	}
	try{
		$koneksi=new PDO("mysql:host=localhost;port=3306;dbname=project_12;","root","");
	}
	catch(PDOException $e){
		
	}
	
$hasil=$koneksi->prepare("select*from artikel");
$hasil->Execute();
$data=$hasil->fetchAll();

// function excerpt($string){
	// $string = substr($string 0,250);
	// return $string . "...";
// }

?>

<!DOCTYPE html>

<html>
<head>
	<title>CRUD</title>
</head>
	
<body>

<div>
	<ul>
		<li><a href="index1.php">Home</li>
		<li><a href="input.php">Isi Artikel</a>
		<li><a href="login.php">Sign In</li>
		<li><a href="register.php">Sign Up</li>
		<a href="logout.php"><button type="button" style="margin-left:93% ; width: 100px">LOGOUT</button></a>
	</ul>
</div>
<table border="1">
	<thead>
		<tr>
			<th>Judul</th>
			<th>Isi</th>
			<th>Tag</th>
			<th>Cover</th>
			<th>Tanggal</th>
			<th colspan="3">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach($data as $key){
				?>
				<tr>
					<td><?= $key['judul'];?></td>
					<td><?= $key['isi'];?></td>
					<td><?= $key['tanda'];?></td>
					<td><?= $key['cover'];?></td>
					<td><?= $key['tanggal'];?></td>
					<td><a href="read_more.php?id=<?=$key['id'];?>"><button class="button-darkgrey">Lihat Artikel</td>
					<td><a href= "edit.php?id=<?=$key['id'];?>">Edit</a></td>
					<td><a onclick="return Confirm('yakin hapus data dengan nama <?=$key['id'];?>?)"
					 href= "delete.php?id=<?=$key['id'];?>">Delete</a></td>
				</tr>
			<?php
			}
		?>
	</tbody>
	</div>
	
	
	</body>

</html>