<?php

/* MYSQL BASIC FUNCTION FRAMEWORK COPYRIGHT 2016 */

// must be included to function correctly
require ("config.php");

function sql_select($row, $table, $specify_row, $specify_row_value){
	global $mysql_connection;
	$sql_select = "SELECT " . $row . " FROM " . $table . " WHERE " . $specify_row . "='" . $specify_row_value . "'";
	return mysqli_fetch_array(mysqli_query($mysql_connection,$sql_select),MYSQL_ASSOC)[$row];
	// returns value from database
}

function sql_update($table, $row, $row_value, $row_name, $row_key){
	global $mysql_connection;
	$sql_update = "UPDATE " . $table . " SET " . $row . "='" . $row_value . "' WHERE " . $row_name . "='" . $row_key . "'";
	return mysqli_query($mysql_connection,$sql_update);
	// returns 0 or 1 depending on whether or not the update succeeded. 
}

function sql_delete($table, $row_name, $row_key){
	global $mysql_connection;
	$sql_delete = "DELETE FROM " . $table . " WHERE " . $row_name . "='" . $row_key . "'";
	return mysqli_query($mysql_connection,$sql_delete);
}

?>