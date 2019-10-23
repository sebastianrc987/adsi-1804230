<?php 
	/*----------------------------------------------------------*/
	//connection data base
	try {
		$conn = new PDO("mysql:host=$host;dbname=$dbnm",$user, $pass);
		$conn->exec('set names utf8');
		$conn->setAttribute(PDO::ATTR_ARRMODE, PDO::ERRMODE_EXEPTION);
		echo "conexion exitosa!";
	} catch (PDOException $e) {
		echo "Error en la conexion: ".$e->getMessage();
	}














	function addStudent($names, $birthdate, $email, $password, $conn) {
		try {
			$sql = "INSERT INTO users (name, birthdate, email, password)
				VALUES(:name, :birthdate, :email, :password)";
			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":names", $names);
			$stmt->bindparam(":birthdate", $birthdate);
			$stmt->bindparam(":email", $email);
			$stmt->bindparam(":password", $password);
			if ($stmt->execute()) {
				return true;
			} else {
				return false;
			}

		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
 ?>