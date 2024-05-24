<?php 
require_once 'constant/config.php';

if (isset($_POST['update'])) {
    
    $id = $_POST['id'];
    
    $name = $_POST['Name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $boarders = $_POST['boarders'];
    $room = $_POST['room'];
    $sql = "UPDATE booking SET Name = :name,Contact = :contact, Email = :email,Date = :date,Boarders = :boarders,Room = :room WHERE id = :id";

    try {
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':boarders', $boarders);
        $stmt->bindParam(':room', $room);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        echo "Record updated successfully.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} 

if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $sql = "SELECT * FROM booking WHERE id = :id";
    try {
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row) {
            $first_name = $row['Name'];
            $email = $row['Email'];
            $contact = $row['Contact'];
            $date = $row['Date'];
            $boarders = $row['Boarders'];
            $room = $row['Room'];
?>
<style>/* General body styling */
body {
    font-family: Arial, sans-serif;
    background: url("https://img.freepik.com/free-vector/cartoon-illustration-small-dorm-room-dormitory-interior-inside-hostel-bedroom_1441-1836.jpg?size=626&ext=jpg&ga=GA1.1.2082370165.1715644800&semt=ais_user") no-repeat center center fixed;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Form styling */
form {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 20px 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    box-sizing: border-box;
}

fieldset {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 8px;
    background-color: #f9f9f9;
}

legend {
    font-size: 1.5em;
    font-weight: bold;
    color: #333;
    padding: 0 10px;
}

input[type="text"], input[type="int"], input[type="email"], input[type="datetime"], input[type="hidden"] {
    width: calc(100% - 22px);
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    display: inline-block;
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #007bff;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Additional styling for the labels */
label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
}
a{
    display: flex;
    justify-content: center;
}
</style>

<form action="" method="post">
    <fieldset>
    <h2>User Update Form</h2>
        <legend>Personal information:</legend>
        Full Name:<br>
        <input type="text" name="Name" value="<?php echo $first_name; ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <br>
        Contact:<br>
        <input type="int" name="contact" value="<?php echo $contact; ?>">
        <br><br>
        Email:<br>
        <input type="email" name="email" value="<?php echo $email; ?>">
        <br><br>
        Date:<br>
        <input type="datetime" name="date" value="<?php echo $date; ?>">
        <br><br>
        Boarders:<br>
        <input type="text" name="boarders" value="<?php echo $boarders; ?>">
        <br><br>
        Boarders:<br>
        <input type="int" name="room" value="<?php echo $room; ?>">
        <br><br>
        <input type="submit" value="Update" name="update">
        <br><br>
        <a href="modify.php" class="btn">Back</a>
    </fieldset>
</form>
<?php
        } else { 
            header('Location: view.php');
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>



