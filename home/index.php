<?php 

    $properties = [
    [
        'id' => 1,
        'title' => 'Luxury Villa in Bali',
        'description' => 'A beautiful villa located in the heart of Bali.',
        'price' => 1500000,
        'image' => 'https://via.placeholder.com/400x300.png?text=Luxury+Villa+in+Bali'
    ],
    [
        'id' => 2,
        'title' => 'Modern Apartment in New York',
        'description' => 'A modern apartment in downtown New York.',
        'price' => 2000000,
        'image' => 'https://via.placeholder.com/400x300.png?text=Modern+Apartment+in+New+York'
    ],
    [
        'id' => 3,
        'title' => 'Cozy Cottage in the Countryside',
        'description' => 'A cozy cottage perfect for a peaceful retreat.',
        'price' => 500000,
        'image' => 'https://via.placeholder.com/400x300.png?text=Cozy+Cottage+in+the+Countryside'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CARIKOST.COM || HOME</title>
      <link rel="icon" href="/assets/CARIKOST.COM.png" type="image/x-icon" style="border-radius: 100%;">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=sswap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">

         <style>
        .property-card {
            margin-bottom: 30px;
        }
        .property-image {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
      <div class="container mt-5">
        <h1 class="text-center mb-5">Property Listings</h1>
        <div class="row">
            <?php foreach ($properties as $property): ?>
                <div class="col-md-4 property-card">
                    <div class="card">
                        <img src="<?php echo $property['image']; ?>" class="card-img-top property-image" alt="<?php echo $property['title']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $property['title']; ?></h5>
                            <p class="card-text"><?php echo $property['description']; ?></p>
                            <p class="card-text"><strong>Price:</strong> $<?php echo number_format($property['price']); ?></p>
                            <a href="property_detail.php?id=<?php echo $property['id']; ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>