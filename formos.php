<!DOCTYPE html>
<html>
<head>
	<title>Formos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Formos</h1>
			<div class="row">
				<div class="col">
				<form>
					<input type="text" name="vardas">
					<input type="text" name="pavarde">
					<button>Go!</button>
				</form>	
				</div>
				<div class="col">
					Rezultatas: <br/>
					<?php
						print_r ($_GET); // arba echo $_GET ['vardas']

						//prie <forms method="POST", o rezultatas : rasyti reikia echo $_POST ['vardas'] . " " . ['pavarde']; reikalinga tam kad nesimatytu duomenu kur ivedam adresa.

					?>
				</div>
			</div>
	</div>
</body>
</html>