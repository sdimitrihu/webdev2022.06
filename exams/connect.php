<?php

$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
}

$conn->query("
CREATE TABLE IF NOT EXISTS `books` (
	id int(11) NOT NULL,
	title tinytext NOT NULL,
	pages int(11) NOT NULL,
	isAvailable tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

$conn->query("
ALTER TABLE books
	ADD PRIMARY KEY (id);
");

$conn->query("
ALTER TABLE books
	MODIFY id int(11) NOT NULL AUTO_INCREMENT;
");

?>