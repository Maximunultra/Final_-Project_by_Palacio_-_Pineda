<?php

require_once 'constant/config.php';
try {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $boarders = $_POST['boarders'];
    $room = $_POST['room'];
  
    $select_query = "SELECT * FROM booking WHERE email = :email";
    $stmt1 = $conn->prepare($select_query);
    $stmt1->bindParam(':email', $email);
    $stmt1->execute();

    if($stmt1->rowCount() > 0) {
        echo "User already exist!";
    }else {
        $sql = "INSERT INTO booking(Name,Contact, Email,Date,Boarders,Room) VALUES(:name,:contact, :email,:date,:boarders,:room)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':boarders', $boarders);
        $stmt->bindParam(':room', $room);
        $stmt->execute();
    
        echo "Data inserted";
    }

}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>