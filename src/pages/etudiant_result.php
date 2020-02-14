<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../styles/etudiant_result.css">
</head>
<body>
	<div id="container">
		<div align="center" id="student_informations">
			<img src="../images/profil.jpg" width="150px" height="150px"><br>
			<div><h1 id="nom_prenom"><strong>Matrouh<br>Mohamed</strong></h1>
			<p id="CNE">K11111111</p></div>
			<a href="etudiant_setting.php" id="setting">Setting</a>
		</div>
		<div id="notes">
		<form action=" " method = "POST">

			<div id="choices">

				<div class="custom-select" style="width:200px;">
 					 <select name = "etude">
  					 	<option value="0">choisir l'annee</option>
  						<option value="1">premiere cycle preparatoire</option>
  						<option value="2">dexieme cycle preparatoire</option>
  						<option value="3">premiere cycle ingenieur</option>
  						<option value="4">dexieme cycle ingenieur</option>
  						<option value="5">troisieme cycle ingenieur</option>
  					</select>
					  
				</div>
				
				<div class="custom-select" style="width:200px;">
 					 <select name = "semet">
  					 	<option value='0'>choisir le semestre</option>
  						<option value='1'>semestre 1</option>
  						<option value='2'>semestre 2</option>
  					</select>

				</div>
				<script src ="etudiant_result.js"></script>





				<input type="submit" name="submit" value="Afficher les notes" id="notes_disp">
				 <?php
				 include "connection.php";
				 $conn = OpenCon();
				 session_start();
				 $studId = $_SESSION["cne"] ;
				$sql = "SELECT * FROM module WHERE cne = '$studId'";
				$module = $conn->query($sql);
				$note = $conn->query($sql);
				?>
				<script src = "etudiant_result.js"></script>
			</div>
			</form>
			<br><div class="ligne"></div><br>
			<div id="notes_table">
				<table id="column1">
					<tr><th>Matiere</th></tr>
					<?php 
						while($row = $module->fetch_assoc()) {
							echo '<tr><td>'.$row["nom_module"].'</td></tr>';
						} 
					?>
				</table>
				<table id="column2">
					<tr><th>Note</th></tr>
					<?php 
						while($row = $note->fetch_assoc()) {
							echo '<tr><td>'.$row["note"].'</td></tr>';
						}  
					?>
				</table>
				<table id="column3">
					<tr><th>Remarque</th></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>