<?php 

require_once 'constant/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM booking WHERE id = :id";

    try {
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "Record deleted successfully.";
            header("Location: view.php");
        } else {
            echo "No records deleted.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} 
?>
<?php 

require_once 'constant/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = :id";

    try {
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "Record deleted successfully.";
            header("Location: users.php");
        } else {
            echo "No records deleted.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} 
?>