<?php
//session_start();
// if (!isset($_SESSION['username'])) {
  // header('location: login.php');
// }
// else {
  // $username = $_SESSION['username'];
// }

try{
    $koneksi = new PDO("mysql:host=localhost;port=3306;dbname=project_12;","root","");
    //echo "koneksi berhasil";
}catch(PDOException$e){
    echo $e->getMessage();
}

$id = $_GET['id'];

$data = $koneksi->prepare("SELECT * FROM artikel WHERE id='$id'");
$data->execute();
$row = $data->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/primary.css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="css/secondary.css" media="screen" title="no title" charset="utf-8">
<title>Read More | <?=$row->judul;?></title>

</head>
<body>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="input.php">Artikel Baru</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

<br>

<div class="div-pri-content">

  <div class="div-card" style="width:100%;">
    <header class="div-pri-content header-colour">
      <center><h3><?=$row->judul;?></h3></center>
    </header>
    <div class="div-pri-content">
      <p><?=$row->tanggal;?></p>
      <hr>
      <div style="display:block;width:100%;"><?=$row->isi;?></div>
      <br>
</div>
<table style="width: 100%;color: #fff; background-color: #616161;">
<tr>
<td><a class="button button-green" href="edit.php?id=<?=$row->id;?>">Ubah</a></td>
<td><a class="button button-red" onclick="return confirm('Sure want to delete <?=$row->judul;?> ?')" href="delete.php?id=<?=$row->id;?>">Hapus</a></td>
</tr>
</table></div>
</div>

<form method="POST" action="komentar/postkomentar.php">
	<input type="hidden" name="id_artikel" value="<?=$row->id;?>">
	<input type="hidden" name="komentator" value="<?=$_POST['username'];?>">
	<table>
		<tr>
			<td><span style="color:blue;font-size: 25px;"></td>Komentar</span>
			<td><textarea name="komentar" style="width:600px; height:150px;"></textarea></td>
		</tr>
		<tr>
			<td<br></td>
		</tr>
		<tr>
			<td><button name="submit" type="submit" class="button">Post</td>
		</tr>
	</table>
</form>

<br>
<?php	
	include'komentar/komentar.php';

?>
<br>

</body>
</html>
