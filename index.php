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
//$context['posts'] = new Timber\PostQuery();
Timber::render( 'pages/index.twig', $context );