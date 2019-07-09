<?php
/**
 * Timber Clear theme
 * https://github.com/vistoyn/timber_theme
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$context = Timber::context();
$timber_post = new Timber\Post();
$context['post'] = $timber_post;
Timber::render( array( 'pages/page-' . $timber_post->post_name . '.twig', 'pages/page.twig' ), $context );