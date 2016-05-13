<?php
	include 'includes/db_connect.php';



	if($_GET['task'] == 'update'){
		//We know they get from the update page bc the task == update.
		$what_to_update = '';
		foreach ($_POST as $key => $value) {
			# code...
			$what_to_update .= $key."='".$value."',";
		}

		$trimmed_update = rtrim($what_to_update, ",");

		$query = 'UPDATE promos
				SET' .$trimmed_update
				. ' WHERE id =' .$_GET['id'];
		$update_result = mysql_query($query);
		header('Location: admin.php?updated=true');
	}else if($_GET['task'] == 'insert'){
		//they are at the new promotions page bc the task value = insert
		$db_columns = '';
		$values = '';
		foreach($_POST as $key => $value){
			# code...
			$db_columns .= $key.',';
			$values .= "'".$value."',";
		}

		$trimmed_values = rtrim($values, ",");
		$trimmed_db_columns = rtrim($db_columns, ",");

		$query = 'INSERT INTO promos
			('.$trimmed_db_columns.')
			VALUES('.$trimmed_values.')';

			$resut = mysql_query($query);

			header('Location: admin.php?updated=true');
	}else if($_GET['task'] == 'delete'){
		//deleete the promo
		$query = 'DELETE FROM promos WHERE id = '.$_GET['id'];
		$delete = mysql_query($query);
		header('Location: admin.php?deleted=true');
	}


?>
