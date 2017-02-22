<?php

//menampilkan artikel
$id=$_GET['id'];
$query=$koneksi->prepare("select * from artikel");
$hasil=$query->execute(); 
$hasil->fetchAll();

//menampilkan komentar
$komentar=$koneksi->prepare("select * from artikel where id_komentar = '".$id."'");
$result=$komentar->execute();
?>
<form method="POST" action="insert_komentar.php">
	<div>
		<input type="text-area" name="komentar">
		<input type="submit">
	</div>
</form>
<?php
foreach($result as $komentar){

?>
<div class="komentar">
	<p class="text"><?php echo $komentar['komentar'] ?></p>
	<p class="text"><?php echo $komentar['user'] ?></p>
</div>