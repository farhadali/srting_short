<?php
$str = "I Love You";

function get_avatar($str){ 
	$acronym = '';
	$word = '';
	$words = preg_split("/(\s|\-|\.)/", $str);
	foreach($words as $w) {
		$acronym .= substr($w,0,1);
	}
	$word = $word . $acronym ;
	return $word;
}

echo get_avatar($str);
