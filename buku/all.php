<?php
include '../test.php';
/**
 * @var $connection PDO
 */
//Prepare query
$query = "select * from buku";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);
//JALANKAN QUERY
$results = $statement->fetchAll();
//output JSON
header('Content-Type: application/json');
echo json_encode($results);

