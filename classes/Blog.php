<?php

/**
 * Ez az osztaly tarolja es megjeleniti a blogpostjainkat.
 */
class Blog {
	/**
	 * @var Blogpost[]
	 */
	protected $posts = array();

	/**
	 * Hozzaad egy blogpostot.
	 *
	 * @param Blogpost $post
	 */
	public function add(Blogpost $post) {
		$this->posts[] = $post;
	}

	/**
	 * Megjeleniti az osszes blogpostot.
	 */
	public function display() {
		foreach ($this->posts as $post) {
			$post->display();
		}
	}
}
