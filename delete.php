<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Laptop</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-4">Delete Laptop</h1>
    <?php
    include 'includes/dbconfig.php';

    if (isset($_GET["LaptopID"])) {
        $LaptopID = $_GET["LaptopID"];

        $stmt = $conn->prepare("DELETE FROM laptops WHERE LaptopID=?");
        $stmt->bind_param("i", $LaptopID);

        if ($stmt->execute() === TRUE) {
            echo "<div class='alert alert-success'>Laptop deleted successfully</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "<div class='alert alert-danger'>No LaptopID provided</div>";
    }
    ?>
    <a href="index.php" class="btn btn-primary mt-4">Back to Home</a>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
