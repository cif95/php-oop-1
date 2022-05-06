<?php

include('data/Movie.php');

$piratesOfCaribbean = new Movie(
	'I pirati dei Caraibi: La maledizione della prima luna', 
	'Caraibi, 1720[2]. La piccola Elizabeth Swann e suo padre, il Governatore Weatherby Swann, sono sulla nave inglese HMS Dauntless che li porta a Port Royal, 
	quando un ragazzino di nome Will Turner viene portato a bordo. Quando Elizabeth si accorge che Will ha al collo un medaglione d\'oro con inciso un teschio, 
	lei glielo sottrae e lo nasconde perché può essere la prova dell\'appartenenza di Will alla pirateria. 
	Nel frattempo tra la nebbia gli inglesi vedono allontanarsi una nave dalle vele nere.', 
	2003, 
	['Johnny Depp', 'Orlando Bloom', 'Keira Knightley', 'Geoffrey Rush'],
  4.5
);

$interstellar = new Movie(
	'Interstellar', 
	'In un futuro non precisato, un drastico cambiamento climatico colpisce duramente l\'agricoltura.
	Il granturco è l\'unica coltivazione ancora in grado di crescere ed un gruppo di scienziati è intenzionato ad attraversare lo spazio per trovare nuovi luoghi adatti a coltivarlo.', 
	2014, 
	['Matthew McConaughey', 'Anne Hathaway', 'Jessica Chastain', 'Michael Caine'],
	3.8
);


$shutterIsland = new Movie(
	'Shutter Island', 
	'Rachel Salado, paziente del manicomio criminale sull\'isola di Shutter, scompare all\'improvviso.
	L\'agente federale Teddy Daniels, affiancato dall\'ufficiale Chuck Aule, deve indagare per risolvere il mistero.', 
	2010, 
	['Leonardo DiCaprio', 'Andrew Laeddis', 'Mark Ruffalo', 'Ben Kingsley'],
	3.9
);


$movies = array();

array_push($movies, $piratesOfCaribbean, $interstellar, $shutterIsland);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Php oop 1</title>
</head>
<body>
	<main>
		<section>
			<h2>Movies: </h2>
			<div class="container">
				<ul class="card">

					<?php
					foreach($movies as $movie) { ?>
					<li>
						<h3>
							<?= $movie->title ; ?>
						</h3>
						<p>
							<?= $movie->description  ; ?>
						</p>
					</li>
					<?php } ; ?>
					
				</ul>
			</div>
		</section>
	</main>
</body>
</html>

