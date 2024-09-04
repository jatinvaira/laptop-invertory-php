<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Laptop</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-4">Update Laptop</h1>
    <?php
    include 'includes/dbconfig.php';

    // Get LaptopID from query string if available
    $LaptopID = isset($_GET["LaptopID"]) ? $_GET["LaptopID"] : '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $LaptopID = $_POST["LaptopID"];
        $LaptopName = $_POST["LaptopName"];
        $LaptopDescription = $_POST["LaptopDescription"];
        $QuantityAvailable = $_POST["QuantityAvailable"];
        $Price = $_POST["Price"];
        $ReleaseDate = $_POST["ReleaseDate"];

        $stmt = $conn->prepare("UPDATE laptops SET LaptopName=?, LaptopDescription=?, QuantityAvailable=?, Price=?, ReleaseDate=? WHERE LaptopID=?");
        $stmt->bind_param("ssisdi", $LaptopName, $LaptopDescription, $QuantityAvailable, $Price, $ReleaseDate, $LaptopID);

        if ($stmt->execute() === TRUE) {
            header("Location: index.php?message=success");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }

        $stmt->close();
        $conn->close();
    } else if ($LaptopID) {
        // Fetch current data for the selected laptop
        $stmt = $conn->prepare("SELECT * FROM laptops WHERE LaptopID=?");
        $stmt->bind_param("i", $LaptopID);
        $stmt->execute();
        $result = $stmt->get_result();
        $laptop = $result->fetch_assoc();
        $stmt->close();
    }
    ?>
    <form method="post" action="">
        <div class="form-group">
            <label for="LaptopID">Laptop ID</label>
            <input type="number" class="form-control" id="LaptopID" name="LaptopID" value="<?php echo $laptop['LaptopID'] ?? ''; ?>" readonly required>
        </div>
        <div class="form-group">
            <label for="LaptopName">Laptop Name</label>
            <input type="text" class="form-control" id="LaptopName" name="LaptopName" value="<?php echo $laptop['LaptopName'] ?? ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="LaptopDescription">Description</label>
            <textarea class="form-control" id="LaptopDescription" name="LaptopDescription" required><?php echo $laptop['LaptopDescription'] ?? ''; ?></textarea>
        </div>
        <div class="form-group">
            <label for="QuantityAvailable">Quantity Available</label>
            <input type="number" class="form-control" id="QuantityAvailable" name="QuantityAvailable" value="<?php echo $laptop['QuantityAvailable'] ?? ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="Price">Price</label>
            <input type="text" class="form-control" id="Price" name="Price" value="<?php echo $laptop['Price'] ?? ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="ReleaseDate">Release Date</label>
            <input type="date" class="form-control" id="ReleaseDate" name="ReleaseDate" value="<?php echo $laptop['ReleaseDate'] ?? ''; ?>" required>
        </div>
        <button type="submit" class="btn btn-warning">Update Laptop</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
