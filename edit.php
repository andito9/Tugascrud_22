<?php
//koneksi
try{
	$koneksi=new PDO("mysql:host=localhost;port=3306;dbname=project_12;","root","");
	echo"Koneksi Berhasil";
}
catch(PDOException $e){
	echo $e->getmessage();
}
$id=$_GET['id'];

$data=$koneksi->prepare("select*from artikel where id='$id'");
$data->execute();
$row=$data->fetch(PDO::FETCH_OBJ);

//print_r($row);

?>

<DOCTYPE html>

<html>
	<head>
	
	</head>
	
<body>
	<form method="POST" action="update.php">
	<input type="hidden" name="id" value="<?=$row->id;?>">
	<table>
	<tr>
		<td><span>Judul Artikel </span></td>
		<td><input type="text" name="judul" value="<?=$row->judul;?>"></td>
	</tr>
		<td><span>Isi Artikel </span></td>
		<td><textarea type="textarea" name="isi" width="40" span="20"></textarea></td>
	<tr>
		<td><span>Tag </span></td>
		<td><input type="text" name="tanda" value="<?=$row->tanda;?>"></td>
	</tr>
	<tr>
		<td><span>Cover </span></td>
		<td><input type="file" name="cover" value="<?=$row->cover;?>"></td>
	</tr>
	
	<tr>
		<td></td>
		<td><button type ="submit" name="submit">Update</button></td>
	</tr>
	</form>
	</table>
	
</body>
</html>