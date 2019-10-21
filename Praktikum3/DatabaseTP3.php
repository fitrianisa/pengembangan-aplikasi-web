<?php
	$database = new PDO('mysql:host=localhost;dbname=puppies','root','');
	$statement = $database->prepare("SELECT animals.ID, animals.PuppyName, breeds.BreedName, animals.Description, animals.Price, animals.Picture FROM animals, breeds WHERE breeds.Breed = animals.BreedID");
	$statement->bindValue(':ID', ':ID');
	$statement->bindValue(':PuppyName', ':PuppyName');
	$statement->bindValue(':Breed', ':BreedID');
	$statement->bindValue(':Description', ':Description');
	$statement->bindValue(':Price', ':Price');
	$statement->bindValue(':Picture', ':Picture');
	$statement->execute();
	$judul = Array('Name','Breed','Description','Price','Picture','Action');
	echo "<h2 align = \"center\"> Puppies Data </h2>";
	echo "<table align = \"center\" border = \"1\">";
		echo "<tr>";
			foreach ($judul as $a){
				echo "<th> $a </th>";
			}
		echo "</tr>";
		foreach ($statement as $b){	
			echo "<tr>";
				echo "<td> {$b['PuppyName']} </td>";
				echo "<td> {$b['BreedName']} </td>";
				echo "<td> {$b['Description']} </td>";
				echo "<td> $ {$b['Price']} </td>";
				echo "<td><img width = \"150\" src = \"./puppies_images/{$b['Picture']}\" alt = \"gambar\"/> </td>";
				echo "<td><a href = \"FormTP3.php?ID={$b['ID']}&PuppyName={$b['PuppyName']}&Description={$b['Description']}&Price={$b['Price']}&Picture={$b['Picture']}\"> Edit </a></td>";
			echo "</tr>";
		}
	echo "</table>";
	
?>