<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Inventory</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-4">Laptop Inventory</h1>
    <?php
    if (isset($_GET['message']) && $_GET['message'] == 'success') {
        echo "<div class='alert alert-success'>Laptop added successfully</div>";
    }
    ?>
    <a href="add.php" class="btn btn-primary mb-4">Add New Laptop</a>
    <?php
    include 'includes/dbconfig.php';

    $sql = "SELECT * FROM laptops";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-striped'>";
        echo "<thead><tr><th>ID</th><th>Name</th><th>Description</th><th>Quantity</th><th>Price</th><th>Added By</th><th>Release Date</th><th>Actions</th></tr></thead><tbody>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["LaptopID"] . "</td>";
            echo "<td>" . $row["LaptopName"] . "</td>";
            echo "<td>" . $row["LaptopDescription"] . "</td>";
            echo "<td>" . $row["QuantityAvailable"] . "</td>";
            echo "<td>" . $row["Price"] . "</td>";
            echo "<td>" . $row["ProductAddedBy"] . "</td>";
            echo "<td>" . $row["ReleaseDate"] . "</td>";
            echo "<td>";
            echo "<a href='update.php?LaptopID=" . $row["LaptopID"] . "' class='btn btn-warning btn-sm'>Update</a> ";
            echo "<button onclick='confirmDelete(" . $row["LaptopID"] . ")' class='btn btn-danger btn-sm'>Delete</button>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
<script>
function confirmDelete(LaptopID) {
    if (confirm("Are you sure you want to delete this laptop?")) {
        window.location.href = "delete.php?LaptopID=" + LaptopID;
    }
}
</script>
</body>
</html>
