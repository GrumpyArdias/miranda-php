
<?php
require_once("configBlade.php");
require_once("./utils/utils.php");
// require_once './vendor/autoload.php';

// use Ramsey\Uuid\Uuid;



//GET COMMETS

try {
    $connectionPDO = sqlConnection();
    $sql = 'SELECT * FROM comments';
    $stmt = $connectionPDO->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // foreach ($results as $result) {
    //     foreach ($result as $key => $value) {
    //         echo $key . ': ' . $value . '<br>';
    //     }
    //     echo '<br>';
    // }
} catch (PDOException $e) {
    die('Error: ' . $e->getMessage());
}

//-------------------------------------------------------------------------


//POST COMMENTS

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form inputs
    $object = [
        // "id" => Uuid::uuid4()->toString(),
        "fullName" => $_POST['fullName'],
        "commentDate" => date("d-m-y"),
        "email" => $_POST['email'],
        "phone" => $_POST['phone'],
        "subject" => $_POST['message'],
        "comments" => true,
        "action" => false,
    ];



    $errors = [];

    if (empty($fullName)) {
        $errors[] = 'Full name is required.';
    }

    if (!preg_match('/^[a-zA-Z\s-]+$/', $objet["fullname"])) {
        $errors[] = 'Invalid full name. Only letters, spaces, and hyphens are allowed.';
    }


    if (!preg_match('/^[a-zA-Z0-9\s.,!?]+$/', $objet["subject"])) {
        $errors[] = 'Invalid message. Only letters, numbers, spaces, and basic punctuation are allowed.';
    }

    if (!filter_var($objet["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email address.';
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . '<br>';
        }

        exit;
    }

    try {
        $sql = "INSERT INTO comments (fullName, commentDate, email, phone, subject, comments, action) VALUES (:fullName, :commentDate, :email, :phone, :subject, :comments, :action)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':fullName', $object['fullName']);
        $stmt->bindParam(':commentDate', $object['commentDate']);
        $stmt->bindParam(':email', $object['email']);
        $stmt->bindParam(':phone', $object['phone']);
        $stmt->bindParam(':subject', $object['subject']);
        $stmt->bindParam(':comments', $object['comments'], PDO::PARAM_BOOL);
        $stmt->bindParam(':action', $object['action'], PDO::PARAM_BOOL);

        $stmt->execute();

        echo "Comment added successfully!";
    } catch (PDOException $e) {
        die('Error: ' . $e->getMessage());
    }
}
//------------------------------------------------
echo $blade->run("contact", array("rooms"));
