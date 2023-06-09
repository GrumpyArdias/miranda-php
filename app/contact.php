
<?php
require_once("configBlade.php");
require_once("./utils/utils.php");



//GET COMMETS

// try {
//     $connectionPDO = sqlConnection();
//     $sql = 'SELECT * FROM comments';
//     $stmt = $connectionPDO->query($sql);
//     $object = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     consoleLog($object);
// } catch (PDOException $e) {
//     die('Error: ' . $e->getMessage());
// }


//-------------------------------------------------------------------------


//POST COMMENTS

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form inputs
    $object = [
        "id" => Uuid(),
        "fullName" => $_POST['fullName'],
        "commentDate" => date("d-m-y"),
        "email" => $_POST['email'],
        "phone" => $_POST['phone'],
        "subjet" => $_POST['message'],
        "comment" => true,
        "action" => false,
    ];

    try {

        $sql = "INSERT INTO comments (id, fullName, commentDate, email, phone, subjet, comment, action) VALUES (:id, :fullName, :commentDate, :email, :phone, :subjet, :comment, :action)";
        $connectionPDO = sqlConnection();
        $stmt = $connectionPDO->prepare($sql);
        echo "here";
        $stmt->bindParam(':id', $object['id'], PDO::PARAM_STR);
        $stmt->bindParam(':fullName', $object['fullName'], PDO::PARAM_STR);
        $stmt->bindParam(':commentDate', $object['commentDate'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $object['email'], PDO::PARAM_STR);
        $stmt->bindParam(':phone', $object['phone'], PDO::PARAM_STR);
        $stmt->bindParam(':subjet', $object['subjet'], PDO::PARAM_STR);
        $stmt->bindParam(':comment', $object['comment'], PDO::PARAM_BOOL);
        $stmt->bindParam(':action', $object['action'], PDO::PARAM_BOOL);
        $stmt->execute();
    } catch (PDOException $e) {

        echo 'Error: ' . $e->getMessage();
    }
}
//------------------------------------------------
echo $blade->run("contact", array("rooms"));
