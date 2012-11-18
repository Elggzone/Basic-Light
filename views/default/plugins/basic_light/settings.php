<?php
/**
 * Basic Light settings
 * 
 */

	if (!isset($vars['entity']->active_theme)) {
		$vars['entity']->active_theme = 'default';
	}
	if (!isset($vars['entity']->columns)) {
		$vars['entity']->columns = 'no';
	}
	if (!isset($vars['entity']->show_icon)) {
		$vars['entity']->show_icon = 'sidebar';
	}
	if (!isset($vars['entity']->show_menu)) {
		$vars['entity']->show_menu = 'sidebar';
	}
	if (!isset($vars['entity']->show_custom)) {
		$vars['entity']->show_custom = 'sidebar_alt';
	}
	if (!isset($vars['entity']->show_thewire)) {
		$vars['entity']->show_thewire = 'yes';
	}

echo "<div class=\"label\">" . elgg_echo('basic_light:info:general') . "</div>";

echo '<div>';
echo elgg_echo('basic_light:label:columns');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[columns]',
	'options_values' => array(
		'no' => elgg_echo('basic_light:option:two'),
		'yes' => elgg_echo('basic_light:option:three')
	),
	'value' => $vars['entity']->columns,
));
echo '</div>';

echo "<div class=\"label\">" . elgg_echo('basic_light:info:layout') . "</div>";

echo '<div>';
echo elgg_echo('basic_light:label:theme');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[active_theme]',
	'options_values' => array(
		'default' => elgg_echo('basic_light:option:default'),
		'palesky' => elgg_echo('basic_light:option:palesky'),
		'bronco' => elgg_echo('basic_light:option:bronco')
	),
	'value' => $vars['entity']->active_theme,
));
echo '</div>';

echo '<div>';
echo elgg_echo('basic_light:label:thewire');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_thewire]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	),
	'value' => $vars['entity']->show_thewire,
));
echo '</div>';

echo "<div class=\"label\">" . elgg_echo('basic_light:info:sidebar') . "</div>";
echo "<div>" . elgg_echo('basic_light:info:modules') . "</div>";

echo '<div>';
echo elgg_echo('basic_light:label:show_icon');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_icon]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('basic_light:option:sidebar:left'),
		'sidebar' => elgg_echo('basic_light:option:sidebar:right')
	),
	'value' => $vars['entity']->show_icon,
));
echo '</div>';

echo '<div>';
echo elgg_echo('basic_light:label:menu');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_menu]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('basic_light:option:sidebar:left'),
		'sidebar' => elgg_echo('basic_light:option:sidebar:right')
	),
	'value' => $vars['entity']->show_menu,
));
echo '</div>';

echo '<div>';
echo elgg_echo('basic_light:label:custom');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_custom]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('basic_light:option:sidebar:left'),
		'sidebar' => elgg_echo('basic_light:option:sidebar:right')
	),
	'value' => $vars['entity']->show_custom,
));
echo '</div>';

echo '<div>';
echo elgg_echo('basic_light:label:html');
echo ' ';
echo elgg_view('input/longtext', array(
	'name' => "params[html_content]",
	'value' => $vars['entity']->html_content,
));
echo "</div>";
