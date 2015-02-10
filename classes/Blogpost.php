<?php

/**
 * A blogpostok ososztalya, egyben a sima szoveges post is.
 */
class Blogpost {
	/**
	 * @var string
	 */
	protected $title;
	/**
	 * @var string
	 */
	protected $text;

	/**
	 * @param string $title
	 * @param string $text
	 */
	public function __construct($title, $text) {
		$this->title    = $title;
		$this->text = $text;
	}

	/**
	 * Megjeleniti a blogpostot.
	 */
	public function display() {
		echo('<h1>' . $this->title . '</h1>');
		echo('<p>' . $this->text . '</p>');
	}
}
