<?php
	$nama_gambar = $_FILES['upload']['name'];
	$database = new PDO('mysql:host=localhost;dbname=puppies','root','');
	
	$statement = $database->prepare("UPDATE animals SET ID = :ID, PuppyName = :PuppyName, BreedID = :BreedID, Description = :Description, Price = :Price, Picture = '$nama_gambar' WHERE ID = :ID");
	
	$statement->bindValue(':ID', $_POST['ID']);
	$statement->bindValue(':PuppyName', $_POST['PuppyName']);
	$statement->bindValue(':BreedID', $_POST['BreedID']);
	$statement->bindValue(':Description', $_POST['Description']);
	$statement->bindValue(':Price', $_POST['Price']);
	$statement->bindValue(':Picture', ':Picture');
	$statement->execute();
	
	include 'DatabaseTP3.php';
?>
