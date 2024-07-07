<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "database_name";

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $id = isset($_GET['id']) ? $_GET['id'] : 0;

// $sql = $conn->prepare("SELECT * FROM properties WHERE id = ?");
// $sql->bind_param("i", $id);
// $sql->execute();
// $result = $sql->get_result();

// if ($result->num_rows > 0) {
//     $property = $result->fetch_assoc();
// } else {
//     echo "Property not found.";
//     exit();
// }

// $conn->close();

if (isset($_POST["fname"]) == "") {
  header("Location: /");
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Detail</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .property-image {
            max-width: 100%;
            height: auto;
        }
        .property-detail {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container property-detail">
        <div class="row">
            <div class="col-md-8">
                <!-- <img src="<?php echo $property['image']; ?>" alt="<?php echo $property['title']; ?>" class="property-image"> -->
            </div>
            <div class="col-md-4">
                <!-- <h1><?php echo $property['title']; ?></h1> -->
                <!-- <p><?php echo $property['description']; ?></p> -->
                <!-- <p><strong>Price:</strong> $<?php echo number_format($property['price'], 2); ?></p> -->
                <!-- <p><strong>Features:</strong> <?php echo $property['features']; ?></p> -->
                <a href="index.php" class="btn btn-primary">Back to Listings</a>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
