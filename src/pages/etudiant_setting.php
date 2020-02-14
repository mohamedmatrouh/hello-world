<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../styles/etudiant_setting.css">
</head>
<body>
	<div id="container">
		<div align="center" id="student_informations">
			<img src="../images/profil.jpg" width="150px" height="150px"><br>
			<div><h1 id="nom_prenom"><strong>Matrouh<br>Mohamed</strong></h1>
			<p id="CNE">K11111111</p></div>
			<a href="#" id="setting">Setting</a>
		</div>
			<div id="modifications">
				<p>Setting</p>
				<hr>
				<dl>
					<dt>Change password</dt>
					<form action="" method = "POST">
						<dd>
							<table>
								<tr>
									<td>CNE :</td>
									<td><input type="TEXT" name="CNE"></td>
								</tr>
								<tr>
									<td>New password :</td>
									<td><input type="password" name="new_password"></td>
								</tr>
								<tr>
									<td>Confirm password :</td>
									<td><input type="password" name="confirm_password"></td>
								</tr>		
							</table>
						</dd>
						<input type="submit" name="valide_confirmation_password" value ="Valide">
					</form>
					<?php
					include "connection.php";

					$conn = OpenCon();


					If($_POST){
						$cne = $_POST["CNE"];
						$new_pass = $_POST["new_password"];
						$confirmPass = $_POST["confirm_password"];

						if(isset($cne) && isset($confirmPass) && isset($new_pass)){

							$sql = "SELECT * from login WHERE cne = '$cne'";
							$result = $conn->query($sql); //on pose le reulstat de la query dans un string
							if(!$result) die("Fatal Error");
							$rows = $result->num_rows; //donne le nombre de ligne dans le tableau
							 //this will give the value of each cell
							if($rows == 1){
								$updat = "UPDATE login Set pass = '$confirmPass' where cne = '$cne' and ";
								if ($conn->query($updat) === TRUE and $new_pass === $confirmPass) {
									echo "Record updated successfully";
								} else {
									echo "Error updating record: " . $conn->error;
								}
							}
						}
					}
					?>
					<dt>Change profile picture</dt>
					<dd id="save_img">
						<form action="" method = "POST">
						<input type="file" name="image">
						<input type="submit" name="insert" value="Enregistrer" id="enregistrer">
					</form>
					</dd>
					
				</dl>
			</div>
	</div>
</body>
</html>