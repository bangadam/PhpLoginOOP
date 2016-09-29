<?php 

function escape($class) {
	return htmlentities($class, 'ENT_QUOTES', 'UTF-8');
}