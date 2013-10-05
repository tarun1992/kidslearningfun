<?php
if (isset($_GET["view"])) {
	switch ($_GET["view"]) {
		case "home":
			include "home.php";
		break;
		case "subject":
			include "subject.php";
		break;
		case "funtime":
			include "funtime.php";
		break;
		case "aboutus":
			include "aboutus.php";
		break;
		case "english":
		  include "english.php";
		  break;
		
		default:
		?>
			<p>This doesn't exist.</p>
		<?php
		break;
		}
	} 

	?>
	