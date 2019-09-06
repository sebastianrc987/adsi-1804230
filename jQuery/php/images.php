<?php
	if($_POST) {
		$img = $_POST['img'];
		switch ($img) {
			case '1':
				echo "../imgs/rick.png";
				break;
			case '2':
				echo "../imgs/morty.png";
				break;
			case '3':
				echo "../imgs/summer.png";
				break;
		}
	}

 ?>