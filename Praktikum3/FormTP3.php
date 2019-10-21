<?php
	if($_REQUEST['ID']){
		$_POST['ID'] = $_REQUEST['ID'];
		$_POST['PuppyName'] = $_REQUEST['PuppyName'];
		$_POST['Description'] = $_REQUEST['Description'];
		$_POST['Price'] = $_REQUEST['Price'];
	}
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<title> Tampilan Form </title>
		<link href = "CSSTP3.css" rel =stylesheet type = "text/css"/>
	</head>
	<body>
		<fieldset>
			<legend> Animals Details </legend>
			<form name = "myFormTP3" action = "UpdateTP3.php" method = "POST" enctype = "multipart/form-data">
				<table>
					<tr>
						<td class = "posisi"><label id = "PuppyName"> Puppy Name </label>&nbsp;&nbsp;</td>
						<td><input class = "lebar" type = "text" name = "PuppyName" value = "<?php if(isset($_POST['reset'])) echo ' '; else echo htmlspecialchars ($_POST['PuppyName'])?>"/></td>
						<td><input type = "hidden" value = "<?php echo htmlspecialchars ($_POST['ID']) ?>" name = "ID"/></td>
					</tr>
					<tr>
						<td class = "posisi"><label for = "BreedID"> Breed ID </label>&nbsp;&nbsp;</td>
						<td>
							<select id = "BreedID" name = "BreedID">
							<?php 
								$database = new PDO('mysql:host=localhost;dbname=puppies','root','');
								$statement = $database->query("SELECT Breed, BreedName FROM breeds");	
								foreach ($statement as $breed){
									echo "<option value = {$breed['Breed']}> {$breed['BreedName']} </option>";
								}
							?>
							</select>
						</td>
						<td></td>
					</tr>
					<tr>
						<td class = "posisi"><label id = "Description"> Description </label>&nbsp;&nbsp;</td>
						<td><input class = "lebar" type = "text" name = "Description" value = "<?php if(isset($_POST['reset'])) echo ' '; else echo htmlspecialchars ($_POST['Description']) ?>"/></td>
						<td></td>
					</tr>
					<tr>
						<td class = "posisi"><label id = "Price"> Price </label>&nbsp;&nbsp;</td>
						<td><input class = "lebar" type = "text" name = "Price" value = "<?php if(isset($_POST['reset'])) echo ' '; else echo htmlspecialchars ($_POST['Price']) ?>"/></td>
						<td></td>
					</tr>
					<tr>
						<td class = "posisi"><label id = "Picture"> Picture </label>&nbsp;&nbsp;</td>
						<td><input type = "file" name = "upload"/></td>
						<td></td>
					</tr>
					<tr>
						<td class = "posisi">&nbsp;&nbsp;</td>
						<td><input type = "submit" value = "Update" name = "update"/>&nbsp;&nbsp;<input type = "reset" value = "Reset" name = "reset"/></td>
						<td></td>
					</tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>