<!DOCTYPE html>
<html>
<head>
	<title>Hahahaha</title>
</head>
<body>
	
	<?php
	

class Vue {
	public function __construct (){
	}

	function affiche_liste($tableau) {
		foreach($tableau as $value) {
			foreach($value as $value2) {
				echo $value2, "\t";
			}
			echo '<br>';
		}
	}

	function menu() {
		echo '<a href="index.php?action=bienvenue">Bienvenue</a>';
		echo '<br>';
		echo '<a href="index.php?action=liste">Liste</a>';
		echo '<br>';
	}
}

?>
</body>
</html>
