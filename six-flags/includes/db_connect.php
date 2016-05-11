<?php

	$link = mysql_connect('127.0.0.1', 'x', 'x');
	if(!$link){
		print 'not connected: ' .mysql_error();
		exit;
	}

	$db_selected = mysql_select_db('sixflags', $link);
	if(!$db_selected){
		print 'Cannot use database sixflags: ' .mysql_error();
		exit;
	}

	$query = "SELECT * FROM students";
	$result = mysql_query($query);

	// for($i=0; $i<$number_of_rows; $i++){
	// 	$row = mysql_fetch_assoc($result);
	// 	print "<pre>";
	// 	print_r($row);
	// 	print "</pre>";
	// 	print '<hr />';
	// }

	$students = [];
	while($row = mysql_fetch_assoc($result)){
		$students[] = $row;
	}

	print $students[0]['name'];
	exit;