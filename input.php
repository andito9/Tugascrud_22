<html>
<head>
	<title>Artikel </title>
</head>

<body>
	
	<form method="POST" action="save.php">
	<table>
	<tr>
		<td><span>Judul Artikel </span></td>
		<td><input type="text" name="judul"></td>
	</tr>
		<td><span>Isi Artikel</span></td>
		<td><textarea type="textarea" name="isi" width="40" span="20"></textarea></td>
	<tr>
		<td><span>Tag</span></td>
		<td><input type="text" name="tanda"></td>
	</tr>
	<tr>
		<td><span>Cover</span><td>
		<td><input type="file" name="cover">
	</tr>
	
	<tr>
		<td></td>
		<td><button type ="submit" name="submit">Done</button></td>
	</tr>
	</form>
	</table>
	
</body>
</html>