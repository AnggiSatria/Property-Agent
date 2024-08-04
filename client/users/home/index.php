<?php
$properties = [
    [
        'id' => 1,
        'title' => 'Luxury Villa in Bali',
        'description' => 'A beautiful villa located in the heart of Bali.',
        'price' => 1500000,
        'image' => 'https://cdn.rri.co.id/berita/Pusat_Pemberitaan/o/1710573699251-IMG_20240316_135220/f5zoa747c2q8lwc.jpeg'
    ],
    [
        'id' => 2,
        'title' => 'Modern Apartment in New York',
        'description' => 'A modern apartment in downtown New York.',
        'price' => 2000000,
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4ilQ1tajvef5mulD6Rt8gvg-rE2W_Kfo5xg&s'
    ],
    [
        'id' => 3,
        'title' => 'Cozy Cottage in the Countryside',
        'description' => 'A cozy cottage perfect for a peaceful retreat.',
        'price' => 500000,
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRwr8StTfmSgT3VGToLR5GJ6NzAQVlqxEA6A&s'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARIKOST.COM || HOME</title>
    <link rel="icon" href="/assets/CARIKOST.COM.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">

    <style>


    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container justify-content-between">
            <a class="navbar-brand" href="#">Carikost</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav mx-auto justify-content-between">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile Pages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg></a>
                    </li>
                </ul>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://randomuser.me/api/portraits/thumb/women/55.jpg" alt="Logo" class="rounded-circle" style="width: 40px; height: 40px !important; object-fit: cover;">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Property Listings</h1>
        <div class="row">
            <?php foreach ($properties as $property): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo $property['image']; ?>" class="card-img-top property-image" alt="<?php echo $property['title']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $property['title']; ?></h5>
                            <p class="card-text"><?php echo $property['description']; ?></p>
                            <p class="card-text"><strong>Price:</strong> Rp <?php echo number_format($property['price']); ?></p>
                            <a href="/client/users/detail-property?id=<?php echo $property['id']; ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
