
<?php
function consoleLog($data)
{
    echo "<pre>";

    var_dump($data);

    echo "</pre>";
    die();
}

function sqlConnection()
{
    $dsn = 'mysql:host=localhost;dbname=mirandaDb';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
    }
    return $pdo;
}

$roomPhotos = [
    "single" => "../public/Assets/img-room/room4.jpg",
    "double" => "../public/Assets/img-room/room1.jpg",
    "double-superior" => "../public/Assets/img-room/room2.jpg",
    "suite" => "../public/Assets/img-room/room3.jpg",
];
