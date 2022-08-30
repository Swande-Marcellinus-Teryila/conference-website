<?php
spl_autoload_reister(function($classes){
	require_once("includes/classes{$classes}.php");
}); 
?>