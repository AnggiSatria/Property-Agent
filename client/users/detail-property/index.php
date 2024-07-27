<?php
$properties = [
    1 => [
        'title' => 'Luxury Villa in Bali',
        'location' => 'Bali, Indonesia',
        'price' => 'Rp 1,500,000',
        'description' => 'A beautiful villa located in the heart of Bali.',
        'category' => 'Villa',
        'rooms' => '3 Bedrooms, 2 Bathrooms',
        'type' => 'Luxury',
        'facilities' => ['Wifi', 'Pool', 'Gym', 'Parking'],
        'created_at' => '1 Januari 2023',
        'image' => 'https://via.placeholder.com/750x500.png?text=Luxury+Villa+in+Bali'
    ],
    2 => [
        'title' => 'Modern Apartment in New York',
        'location' => 'New York, USA',
        'price' => 'Rp 2,000,000',
        'description' => 'A modern apartment in downtown New York.',
        'category' => 'Apartment',
        'rooms' => '2 Bedrooms, 1 Bathroom',
        'type' => 'Modern',
        'facilities' => ['Wifi', 'Elevator', 'Gym', 'Parking'],
        'created_at' => '15 Februari 2023',
        'image' => 'https://via.placeholder.com/750x500.png?text=Modern+Apartment+in+New+York'
    ],
    3 => [
        'title' => 'Cozy Cottage in the Countryside',
        'location' => 'Countryside, UK',
        'price' => 'Rp 500,000',
        'description' => 'A cozy cottage perfect for a peaceful retreat.',
        'category' => 'Cottage',
        'rooms' => '2 Bedrooms, 1 Bathroom',
        'type' => 'Cozy',
        'facilities' => ['Wifi', 'Garden', 'Parking'],
        'created_at' => '10 Maret 2023',
        'image' => 'https://via.placeholder.com/750x500.png?text=Cozy+Cottage+in+the+Countryside'
    ],
];

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$property = isset($properties[$id]) ? $properties[$id] : null;

if (!$property) {
    // Jika properti tidak ditemukan, redirect ke halaman daftar
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .property-image {
            max-width: 100%;
            height: auto;
        }
        .property-detail {
            margin-top: 20px;
        }
        .property-category {
            font-size: 1.1rem;
            font-weight: bold;
            color: #007bff;
        }
        .property-facilities {
            list-style-type: none;
            padding-left: 0;
        }
        .property-facilities li {
            background: #f8f9fa;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .contact-btn {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container property-detail">
        <div class="row">
            <div class="col-md-8">
                <img src="<?php echo $property['image']; ?>" alt="Property Image" class="property-image">
            </div>
            <div class="col-md-4">
                <h2><?php echo $property['title']; ?></h2>
                <p class="property-category">Category: <?php echo $property['category']; ?></p>
                <p><strong>Location:</strong> <?php echo $property['location']; ?></p>
                <p><strong>Price:</strong> <?php echo $property['price']; ?> / month</p>
                <p><strong>Room Type:</strong> <?php echo $property['type']; ?></p>
                <p><strong>Rooms:</strong> <?php echo $property['rooms']; ?></p>
                <p><strong>Created on:</strong> <?php echo $property['created_at']; ?></p>
                <a href="chat.html" class="btn btn-primary contact-btn">Contact</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>Description</h3>
                <p><?php echo $property['description']; ?></p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>Facilities</h3>
                <ul class="property-facilities">
                    <?php if (isset($property['facilities']) && is_array($property['facilities'])): ?>
                        <?php foreach ($property['facilities'] as $facility): ?>
                            <li><?php echo htmlspecialchars($facility); ?></li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li>No facilities available.</li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
