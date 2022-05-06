<?php 

/** class of a movie */
class Movie {

	public $title;
	public $description;
	public $year;
	public $actors;
	public $vote;


	/**
	*  Build a new Movie class istance with the given arguments
	*
	* @param [string] $title  Movie title
	* @param [string] $description Movie description
	*	@param [int] $year Release year of the movie
	* @param [array] $actors List of all movie actors
	* @param [float|int] $vote vote of Movie, it must be >= 0 and <= 5
	*/
	function __construct( $title, $description, $year, $actors, $vote = null) {
		$this->title = $title;
		$this->description = $description;
		$this->year = $year;
		$this->actors = $actors;
		$this->vote = $vote;
	}

	/* Function that sets a Movie istance vote, it must be >= 0 and <= 5 */
	public function setVote($vote) {
		if ( is_numeric($vote) && $vote >= 0 && $vote <= 5 ) {
			$this->vote = $vote;
		}
	}

	/* Function that sets a Movie istance description, it must a string with with lenght < 1000 */
	public function setDescription($text) {
		if ( is_string($text) && strlen($text) < 1000 ) {
			$this->description = $text;
		}
	}

	/* Function that returns a Movie istance year */
	public function getYear() {
		return $this->year;
	}

	/* Function that returns a Movie istance actors */
	public function getActors() {
		return $this->actors;
	}

	/* Function that returns a Movie istance description */
	public function getDescription() {
		return $this->description;
	}

};
?>
