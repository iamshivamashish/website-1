<?php

if (!defined('IN_WESNOTH_LANGSTATS'))
{
	die(1);
}

function ui_self_link($disable_condition, $text, $href)
{
	if ($disable_condition)
	{
		echo '<b>' . $text . '</b>';
	}
	else
	{
		echo '<a href="' . htmlspecialchars($href) . '">' . $text . '</a>';
	}
}

function ui_separator()
{
	echo ' | ';
}

function ui_last_update_timestamp($date)
{
	echo '<div id="lastmod" class="fr">Last updated on ' . date('r', $date) . '</div>';
}

function ui_error($message)
{
	echo '<div class="error-message"><span class="message-heading">Error</span><br />' . $message . '</div>';
}

function ui_message($message)
{
	echo '<div class="ui-message">' . $message . '</div>';
}
