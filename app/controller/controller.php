<?php 

	include 'table.class.php';

	function path($strPath) {
		return 'http://localhost/e-book/public/'.$strPath;
	}

	function go($linkPage) {
		return 'http://localhost/e-book/app/views/'.$linkPage;
	}


	function dateCustom($strDate) {

		if ($strDate == "0000-00-00")
			return "aujourd'hui";
		else
			return $strDate;

	}

	function dateValue($strDate) {

		if ($strDate == "0000-00-00")
			return NOW();
		else
			return $strDate;

	}

 ?>