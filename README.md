Basic PHP framework made for simple MySQL Queries. 
config.php must be updated to function correctly.
to include this framework in your PHP project, simple add the following to the top of your PHP file.
<?php
require("*PATH TO FILE*/sql.php");
?>

This allows for usage of the following commands.

#1 - sql_select($row, $table, $specify_row, $specify_row_value)
- $row = What row you wish to select
- $table = From what table you wish to select
- $specify_row = The row at which the $row_key can be located
- $specify_key = The key at which the row should be selected.

#2 - sql_update($table, $row, $row_value, $row_name, $row_key)
- $table = What table you wish to update
- $row = What row you wish to update
- $row_value = The row where the identifier can be found
- $row_key = The identifying value

#3 - sql_delete($table, $row_name, $row_key)
- $table = From where do you wish to delete
- $row_name = What is the name of the row from which you wish to delete.
- $row_key = The identifier of the row
