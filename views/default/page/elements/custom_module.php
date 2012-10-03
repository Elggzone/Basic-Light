<?php 
/**
 * Custom Content
 *
 */

$title = elgg_echo("basic_light:demo:title"); 
$text = elgg_echo("basic_light:demo:text");

echo elgg_view_module('aside', $title, $text);
