<?php

	require_once('data.php');
	
	//function for finding the difference of two dates
	function dateDiff($birthday, $format='%Y') {
		$birthday=date_create($birthday);
		$currentDate=date_create(date('Y-m-d'));
		$dateDiff=date_diff($currentDate, $birthday);
		return $dateDiff -> format($format);
	}
?>