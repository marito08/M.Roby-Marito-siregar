<?php


//  menghubungkan ke database myql
$server = 'localhost';
$username = 'root';
$password = '';

$konek = mysqli_connect($server,$username,$password);


// membuat database baru
$database = "create database bootcamp";


// membuat koneksi database ke sql
$koneksi = mysqli_query($konek,$database);



// membuat tabel categories
$tabel1 = "CREATE TABLE categories (
			id int auto_increment Primary_key,
			name varchar(100)
			)";

$query_tabel1 = msqli_query($koneksi,$tabel1);


// menginput record ke tabel_categories 

$input_categories = "INSERT INTO categories VALUES 
					('','nurhadi'),
					('','aldo'),
					('','dodi')";

$query_categories = mysqli_query($koneksi,$input_categories);

// membuat tabel hobbies

$tabel2 = "CREATE TABLE hobbies (
			id int auto_increment Primary_key,
			person_id varchar(5),
			name varchar(100))

			";

$quer_tabel2 = mysqli_query($koneksi,$tabel2);


// menginput recode ke tabel_hobbies

$input_hobbies = "INSERT INTO hobbies VALUES 
					('','1','Bird watching'),
					('','1','Martial arts'),
					('','2','Hiing'),
					('','1','Archery'),
					('','2','Beekeeping'),
					('','3','Booke restorarion')";

$query_hobbies = mysqli_query($koneksi,$input_hobbies);


// Membuat query
$query = "SELECT a.id as person_id, a.name, GROUP_CONCAT(b.name) as person_hobbies
    FROM categories a
    INNER JOIn hobbies b
    ON a.id = b.person_id GROUP_BY(a.id) OREDER BY(a.name)";

$query_table = mysqli_query($koneksi, $query);




?>