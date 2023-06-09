<?php
require_once("configBlade.php");
require_once("./utils/utils.php");

$roomPhotos = [
    "single" => "../public/Assets/img-room/room4.jpg",
    "double" => "../public/Assets/img-room/room1.jpg",
    "double-superior" => "../public/Assets/img-room/room2.jpg",
    "suite" => "../public/Assets/img-room/room3.jpg",
];

$rooms = [];
try {
    $connectionPDO = sqlConnection();
    $sql = 'SELECT * FROM rooms LIMIT 5';
    $stmt = $connectionPDO->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach ($results as $result) {
        $rowData = [];
        foreach ($result as $key => $value) {
            $rowData[$key] = $value;
        }
        $rooms[] = $rowData;
    }
} catch (PDOException $e) {
    die('Error: ' . $e->getMessage());
}

// foreach ($rooms as $row) {
//     foreach ($row as $key => $value) {
//         echo $key . ': ' . $value . '<br>';
//     }
//     echo '<br>';
// }




echo $blade->run("offers", array("rooms" => $rooms, "roomPhotos" => $roomPhotos));
