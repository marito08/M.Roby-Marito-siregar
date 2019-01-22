<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="table-responsive " border="1px">
<table class="table">

	
<tr class="info">
<th > person_id </th>
<th> name </th>
<th> person_hobbies </th>

<?php 

include("koneksi.php");

$no = 1;
$tabel = "SELECT a.id,a.name,GROUP_CONCAT(b.name)
		FROM categories a
		INNER JOIN hobbies b
		ON a.id = b.person_id GROUP BY (a.id) ORDER BY(a.name)
		";

$query = mysqli_query($koneksi,$tabel);

while($data=mysqli_fetch_row($query)){
?>

<tr class="active">
	<td> <?php echo $data[0];"."; ?> </td>
	<td> <?php echo $data[1]; ?> </td>
	<td> <?php echo $data[2]; ?> </td>

<?php } ?>
</body>
</html>


