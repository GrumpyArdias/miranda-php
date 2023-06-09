<?php
require_once("configBlade.php");
require_once("./utils/utils.php");



$room;

// try {
//     $sql = "SELECT * FROM bookings";
//     $conectionPDO = sqlConnection();
//     $stmt = $conectionPDO->prepare($sql);
//     $stmt->execute();
//     $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     consoleLog($results);
// } catch (PDOException $e) {
//     die('Error: ' . $e->getMessage());
// }

$id = $_GET['id'];
try {
    $sql = "SELECT * FROM rooms WHERE id = :id";
    $connectionPDO = sqlConnection();
    $stmt = $connectionPDO->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->execute();
    $room = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        $wantedCheckIn = $_POST['checkIn'];
        $wantedCheckOut = $_POST['checkOut'];

        $sql = "SELECT checkIn, checkOut FROM bookings WHERE roomId = :id";
        $connectionPDO = sqlConnection();
        $stmt = $connectionPDO->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $room = $stmt->fetchAll(PDO::FETCH_ASSOC);
        consoleLog([$wantedCheckIn, $wantedCheckOut, $id, $room]);
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

echo $blade->run("room-details", ["room" => $room, "roomPhotos" => $roomPhotos]);
