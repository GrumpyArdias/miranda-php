
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

function uuid($data = null)
{

    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);


    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);

    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);


    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}


$roomPhotos = [
    "single" => "../public/Assets/img-room/room4.jpg",
    "double" => "../public/Assets/img-room/room1.jpg",
    "double-superior" => "../public/Assets/img-room/room2.jpg",
    "suite" => "../public/Assets/img-room/room3.jpg",
];
