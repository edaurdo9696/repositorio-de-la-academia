<?php

include "./vendor/autoload.php";

$conn = new MongoDB\Client("mongodb://localhost");

$collection = $conn->edu->usuarios;

$insertOneResult = $collection->insertOne(
    array('mensaje'=>'El Edus')
);

// $collection->insertOne(['mensaje' => 'El Edu']);
// $updateResult = $collection->updateOne(
//     ['mensaje' => 'El Edu'],
//     ['$set' => ['mensaje' => 'udE lE']]
// );
$deleteResult = $collection->deleteOne(['mensaje' => 'El Edus']);
printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());