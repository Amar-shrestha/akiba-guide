<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package akiba-guild
 */

header("HTTP/1.1 301 Moved Permanently");
header("Location: ".esc_url( home_url( '/' ) ));
exit();

?>
