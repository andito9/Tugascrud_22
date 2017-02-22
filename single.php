<?php
try{
	$koneksi=new PDO("mysql:host=localhost;port=3306;dbname=project_12;","root","");
	echo"Koneksi Berhasil";
}
catch(PDOException $e){
	echo $e->getmessage();
}


 $id= $_GET['id'];
 $data = $koneksi->prepare("SELECT * FROM  artikel WHERE id='$id'");
 $data->execute();
 $row = $data->fetch(PDO::FETCH_OBJ);

 
//koneksi
// try {
    // $koneksi = new PDO("mysql:host=localhost;port=3306;dbname=project_12;","root","");
// } catch (PDOException $e) {
    // echo $e->GetMessage();
// }

 
?>


<!DOCTYPE html>
<html>


<style>


</style>

    <title></title>
</head>
<body class="background">
<ul>
  <li><a href="index.php"><b>Home</b></a></li>
  <li><a href="blog.php">Blog</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Pilihan</a>
    <div class="dropdown-content">
      <a href="input.php">Tambah Artikel</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>

           
        <div class="panel">
            <div class="heading">
            <h3><?=$row->judul;?></h3>
            </div>
           

            <div class="content">
            
            <div class="isi">
            <h5><?=$row->isi;?></h5>
            </div>
            <hr>
           
           
               
            <div class="bawah"><h5><b> Tanggal :<?=$row->tanggal;?>
                TAG : <?=$row->tag;?></b></h5></div>

            </div>
            
        </div>
	
	<?php
			foreach($data as $key){
				?>
				<tr>
					<td><?= $key['username'];?></td>
					<td><?= $key['komentar'];?></td>
					<td><a onclick="return Confirm('yakin hapus data dengan nama <?=$key['id'];?>?)"
					 href= "delete.php?id=<?=$key['id'];?>">Delete</a></td>
				</tr>
			<?php
			}
		?>
	
	
		<form method="POST" action="save_komentar.php">
	<table>
	<tr>
		<td><span>Komentar</span></td>
		<td><input type="text" name="judul"></td>
	</tr>
	<tr>
		<td></td>
		<td><button type ="submit" name="submit">Done</button></td>
	</tr>
	</form>
	</table>
	
		
           
<br>
<br>

 <div class="footer"></div>
</body>
</html>