<?php 
class Movie {

	public $title;
	public $description;
	public $year;
	public $actors;
	public $vote;

	function __construct( $title, $description, $year, $actors, $vote ) {
		$this->title = $title;
		$this->description = $description;
		$this->year = $year;
		$this->actors = $actors;
		$this->vote = $vote;
	}

	public function setVote($vote) {
		if ( is_numeric($vote) && $vote >= 0 && $vote <= 5 ) {
			$this->vote = $vote;
		}
	}

	public function setDescription($text) {
		if ( ctype_alpha($text) && strlen($text) < 1000 ) {
			$this->description = $text;
		}
	}

	public function getYear() {
		return $this->year;
	}

	public function getActors() {
		return $this->actors;
	}

	public function getDescription() {
		return $this->description;
	}

};

$pirateMovie = new Movie('I pirati dei Caraibi: La maledizione della prima luna', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 2003, ['Johnny Depp', 'Orlando Bloom', 'Keira Knightley', 'Geoffrey Rush'],  4,5);
$interstellarMovie = new Movie('Interstellar', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 2014, ['Matthew McConaughey', 'Anne Hathaway', 'Jessica Chastain', 'Michael Caine'], 3,8);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Php oop 1</title>
</head>
<body>
	<main>
		<?php 
			var_dump($pirateMovie);
			var_dump($interstellarMovie);
			?>
	</main>
</body>
</html>

