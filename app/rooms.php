<?php
require_once("configBlade.php");
require_once("./utils/utils.php");



$rooms = [];
try {
    $connectionPDO = sqlConnection();
    $sql = 'SELECT * FROM rooms LIMIT 6';
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




echo $blade->run("rooms", array("rooms" => $rooms, "roomPhotos" => $roomPhotos));
