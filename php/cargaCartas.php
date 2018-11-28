<?php

$c = 1;

if(isset($_POST['dif']))
{
	$dif = $_POST['dif'];
}

for ($i=1; $i <= $dif ; $i++) { 

	echo"<br>";

	for ($j=1; $j <= $dif ; $j++) {



		echo
		"

			<div id=\"carta$i$j\" onclick=\"giraCarta(this)\">

			<div id=\"front$i$j\">$i$j</div>
			<div id=\"back$i$j\"></div>

			</div>
		";

		$c++;

	}
}


?>


