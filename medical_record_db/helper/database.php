<?php



$selectAllPersons = "SELECT * FROM persons";
$insertPersonsQuery = "INSERT INTO persons (name, age, gender, height, weight, waist_size) VALUES (?, ?, ?, ?, ?, ?)";
$deleteQuery = "DELETE FROM persons WHERE id = ?;";
$updateQuery = 'UPDATE persons SET name = ?, age = ?, gender = ?, height = ?, weight = ?, waist_size = ? WHERE id = ?;';
$selectSpecified = "SELECT * FROM persons WHERE id = (?)";