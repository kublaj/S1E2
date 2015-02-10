<?php
/**
 * Ez a file a programunk belepesi pontja.
 */

/**
 * Automatikus osztaly betoltes
 *
 * @param string $class
 *
 * @return void
 */
function __autoload($class) {
	include_once(__DIR__ . '/classes/' . $class . '.php');
}

$blog = new Blog();
$blog->add(new VideoBlogpost("Teszt video", "Ez a szoveg", "http://www.youtube.com/..."));
$blog->add(new Blogpost("Teszt post", "Ez a teszt szoveg"));
$blog->display();
