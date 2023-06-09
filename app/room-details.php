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
        $bookingsDates = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // consoleLog($bookingsDates);


        $retificatedDate = [];

        foreach ($bookingsDates as $dates) {
            $retificatedDate[] = [dateRetification($dates['checkIn']), dateRetification($dates['checkOut'])];
        }
        // consoleLog($retificatedDate);

        $isAvailable = true;
        foreach ($retificatedDate as $booking) {
            if ($booking[0] > $wantedCheckIn && $booking[1] < $wantedCheckOut) {
                echo "false1";
                $isAvailable = false;
            }
            if ($booking[0] < $wantedCheckIn && $booking[1] > $wantedCheckOut) {
                echo "false2";
                $isAvailable = false;
            }
            if ($booking[0] < $wantedCheckOut && $booking[0] > $wantedCheckIn) {
                echo "false3";
                $isAvailable = false;
            }
            if ($booking[1] > $wantedCheckIn && $booking[1] < $wantedCheckOut) {
                echo "false4";
                $isAvailable = false;
            }
        }

        if ($isAvailable) {


            $name = "mario";
            $specialRquest = "none";
            $booked = "booked";
            $sql = "INSERT INTO bookings (id, fullName, bookingDate, checkIn, checkOut, specialRquest, roomType, roomId, status) VALUES (:id, :fullName, :bookingDate, :checkIn, :checkOut, :specialRquest, :roomType, :roomId, :status)";
            $connectionPDO = sqlConnection();
            $stmt = $connectionPDO->prepare($sql);
            $stmt->bindParam(':id', uuid(), PDO::PARAM_STR);
            $stmt->bindParam(':fullName', $name, PDO::PARAM_STR);
            $stmt->bindParam(':bookingDate', date("Y/m/d"), PDO::PARAM_STR);
            $stmt->bindParam(':checkIn', $wantedCheckIn, PDO::PARAM_STR);
            $stmt->bindParam(':checkOut', $wantedCheckOut, PDO::PARAM_STR);
            $stmt->bindParam(':specialRquest', $specialRquest, PDO::PARAM_STR);
            $stmt->bindParam(':roomType', $room['bedType'], PDO::PARAM_STR);
            $stmt->bindParam(':roomId', $id, PDO::PARAM_STR);
            $stmt->bindParam(':status', $booked, PDO::PARAM_STR);

            $stmt->execute();;
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

echo $blade->run("room-details", ["room" => $room, "roomPhotos" => $roomPhotos, "isAvailable" => $isAvailable]);
