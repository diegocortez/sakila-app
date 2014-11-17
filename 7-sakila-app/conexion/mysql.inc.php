<?php $mysqli = new mysqli("localhost", "root", "root", "sakila",3306);
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}?>
