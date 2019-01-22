<form name="" method="POST">

<input type="number" name="jumlah" placeholder="Jumlah orang">

<input type="submit" name="submit" value="Proses">

<br> <br>
<?php  

function jabattangan() {

$total = 0;
$b = $_POST['jumlah'];
for($a=1;$a<$b;$a++){

$total = $total + $a ;
}
return $total;
}

?>


<?php
if (isset($_POST['submit'])){


echo "<strong> Jumlah jabat tangan  = </strong> " .jabattangan();
}

?>
