<?php

// Получить путь к превьюшке 122x91 из пути к большой картинке
if (!function_exists('getThumb')) {
	function getThumb($img)
	{
		$a = ['png', 'jpg', 'jpeg', 'gif'];
		$ext = pathinfo( $img, PATHINFO_EXTENSION );
		if ( in_array(strtolower($ext), $a) ) {
			return str_replace('/uploads/source/', '/uploads/thumbs/', $img);
		} else {
			return $img;
		}
	}
}

// Получить путь к превьюшке thumbs600
if (!function_exists('getThumb600')) {
	function getThumb600($img)
	{
		$a = ['png', 'jpg', 'jpeg', 'gif'];
		$ext = pathinfo( $img, PATHINFO_EXTENSION );
		if ( in_array(strtolower($ext), $a) ) {
			return str_replace('/uploads/source/', '/uploads/thumbs600/', $img);
		} else {
			return $img;
		}
	}
}


// Разбить текст из textarea на абзацы <p>
if (!function_exists('getParagraphs')) {
	function getParagraphs($text)
	{
		return preg_replace('~^\h*.+(?=\R|$)~m', '<p>$0</p>', $text);
	}
}


// Очистить номер телефона от пробелов, скобок и тире
if (!function_exists('clearPhone')) {
	function clearPhone($phone)
	{
		return str_replace(['(', ')', ' ', '-'], '', $phone);
	}
}






