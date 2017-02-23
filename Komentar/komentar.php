<?php
	$id = $_GET['id'];

	$data = $koneksi->prepare("SELECT * FROM komentar WHERE id_artikel='$id'");
$data->execute();
$komen = $data->fetchAll();
?>
<br>
<div class="div-pri-content">

  <div class="div-card" style="width:100%;">
    <header class="div-pri-content header-colour">
      <center><h3>================ Komentar ================</h3></center>
    </header>
    </div>
    </div>
<?php
foreach ($komen as $key) {
?>
<br>
<div class="div-pri-content">
  <div class="div-card" style="width:100%;">
    <div class="div-pri-content div-colour">
      <hr>
      <div style="display:block;width:100%;">Komentar : <?= $key['komentar'];?></div>
      <br>
    </div>
  </div>
</div>
<br>
<?php
}
?>