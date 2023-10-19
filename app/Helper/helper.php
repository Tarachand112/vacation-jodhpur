<?php

if(!function_exists('return_if')) {
	function return_if($condition, $value) {
		if($condition) {
			return $value;
		}
	}
}
if (!function_exists('on_page')) {
	function on_page($link, $type = "name") {
		switch ($type) {
			case "url":
				$result = ($link == request()->fullUrl());
				break;
			default:
				$result = ($link == request()->route()->getName());
		}
		return $result;
	}
}
?>