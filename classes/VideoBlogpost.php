<?php

/**
 * Ez az osztaly tartalmazza a video tipusu postok mukodesehez szukseges kodot.
 */
class VideoBlogpost extends Blogpost {
	/**
	 * @var string
	 */
	protected $link;

	/**
	 * @param string $title
	 * @param string $text
	 * @param string $link
	 */
	public function __construct($title, $text, $link) {
		parent::__construct($title, $text);
		$this->link = $link;
	}

	/**
	 * Megjeleniti a blogpostot
	 *
	 * @return void
	 */
	public function display() {
		parent::display();
		echo('<p><a href="' . $this->link . '">Tovabb</a>');
	}
}
