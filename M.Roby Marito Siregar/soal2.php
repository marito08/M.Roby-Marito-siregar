<?php  


function validasi(){
$username = '_jakarta';
$password = 'aaa05AA#';

$panjang_username = (strlen($username)==8);
$validasi_username  = preg_match('/^(?=.*[a-z])(?=.*[_])/', $username);

$panjang_password = (strlen($password)==8);
$validasi_password = preg_match('/^(?=.*[a-z])(?=.*[0-9])(?=.*[A-Z])(?=.*\W)/', $password);



if ( !$validasi_password || !$panjang_password) {

	echo "<font color='red'>password harus huruf kecil, besar, angka dan karakter spesial serta panjang karakter 8 </font>";
	echo "<br>";
}
else if (!$panjang_username || !$validasi_username){

	echo "<font color='red'>Username harus angka dan _ serta panjang karakter 8</font>";

	
}
else{
	
	echo "<strong>Username dan password benar</strong>";
	
}


}


echo validasi();
?>





