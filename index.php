<?php

include('data/Movie.php');

$piratesOfCaribbean = new Movie(
	'I pirati dei Caraibi: La maledizione della prima luna', 
	'La figlia del governatore viene rapita da un pirata malvagio.
		Will Turner, amico d\'infanzia della ragazza segretamente innamorato di lei,
		si unisce a Jack Sparrow, un pirata vagabondo, per portare in salvo la fanciulla.', 
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
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Php oop 1</title>
</head>
<body>
	<main>
		<section id="movies">
			<h1>Film: </h1>
			<div class="container">
				<ul class="movies-list">
					<?php
					foreach($movies as $movie) { ?>

						<li class="movie">
							<h3>
								Titolo: <span><?= $movie->title; ?></span> 
							</h3>
							<p>
								Trama: <span><?= $movie->description; ?></span>
							</p>
							<p>
								Anno: <span><?= $movie->year; ?></span> 
							</p>
							<p>
								Attori: <span><?= implode(', ' , $movie->actors); ?></span>
							</p>
							<p>
								Voto: <span><?= $movie->vote; ?></span>
							</p>
						</li>

					<?php } ; ?>
				</ul>
			</div>
		</section>
	</main>
</body>
</html>

