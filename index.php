<?php 




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="/assets/CARIKOST.COM.png" type="image/x-icon" style="border-radius: 100%;">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <title>CARIKOST.COM</title>
     <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            margin-bottom: 50px;
        }
        .header {
            background: url('./assets/real-estate.png') no-repeat center center;
            background-size: cover;
            height: 500px;
            color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

     
        .header h1 {
            font-size: 3em;
        }
        .property-card img {
            height: 200px;
            object-fit: cover;
        }
        .contact-section {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .oxygen-light {
          font-family: "Oxygen", sans-serif;
          font-weight: 300;
          font-style: normal;
        }

        .oxygen-regular {
          font-family: "Oxygen", sans-serif;
          font-weight: 400;
          font-style: normal;
        }

        .oxygen-bold {
          font-family: "Oxygen", sans-serif;
          font-weight: 700;
          font-style: normal;
        }

         .oxygen-semibold {
          font-family: "Oxygen", sans-serif;
          font-weight: 600;
          font-style: normal;
        }

        .open-sans-normal {
          font-family: "Open Sans", sans-serif;
          font-optical-sizing: auto;
          font-weight: 400;
          font-style: normal;
          font-variation-settings:
            "wdth" 100;
        }

        .open-sans-semibold {
          font-family: "Open Sans", sans-serif;
          font-optical-sizing: auto;
          font-weight: 600;
          font-style: normal;
          font-variation-settings:
            "wdth" 100;
        }

          .open-sans-bold {
          font-family: "Open Sans", sans-serif;
          font-optical-sizing: auto;
          font-weight: 700;
          font-style: normal;
          font-variation-settings:
            "wdth" 100;
        }

    </style>
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
              <img src="./assets/CARIKOST.COM.png" alt="" class="col-1">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-link oxygen-semibold" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link oxygen-semibold" href="#properties">Properties</a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-link oxygen-semibold" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-primary me-2 oxygen-semibold" data-bs-toggle="modal" data-bs-target="#signInModal">Sign In</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-primary oxygen-semibold" data-bs-toggle="modal" data-bs-target="#signUpModal">Sign Up</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <!-- <header class="header d-flex">
        <div>
            <h1 style="color: #0a0a0a;" class="oxygen-bold">Welcome to CARIKOST</h1>
            <p class="oxygen-semibold" style="color: #1D1A1A;">Your dream home awaits</p>
            <a href="#properties" class="btn btn-primary open-sans-semibold">View Properties</a>
        </div>
         <div class="container my-5">
        <h2>Search Properties</h2>
        <input type="text" id="search-input" class="form-control" placeholder="Search for properties...">
        <div id="property-list" class="row mt-3">
            Search results will be appended here
        </div>
    </div>
    </header> -->

    <header class="header d-flex justify-content-between align-items-center">
        <div>
            <h1 style="color: #0a0a0a;" class="oxygen-bold">Welcome to CARIKOST</h1>
            <p class="oxygen-semibold" style="color: #1D1A1A;">Your dream home awaits</p>
      
                <input type="text" id="search-input" class="form-control mt-5" placeholder="Search for properties...">
            <div id="property-list" class="row mt-3">
                <!-- Search results will be appended here -->
            </div>
              <p class="oxygen-semibold" style="color: #1D1A1A;">or</p>
                  <a href="#properties" class="btn btn-primary open-sans-semibold">View Properties</a>
        </div>
        <!-- <div class="container my-1">
            <h2>Search Properties</h2>
            <input type="text" id="search-input" class="form-control" placeholder="Search for properties...">
            <div id="property-list" class="row mt-3">
                Search results will be appended here
            </div>
        </div> -->
    </header>

    <!-- About Us Section -->
    <section id="about" class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="oxygen-semibold">About Us</h2>
                <p class="open-sans-normal" style="color: #1D1A1A;">We are a leading real estate agency with a focus on finding the perfect property for our clients. Our experienced agents are here to help you every step of the way.</p>
            </div>
            <div class="col-md-6">
                <img src="./assets/CARIKOST.COM.png" class="img-fluid" alt="About Us">
            </div>
        </div>
    </section>

    <!-- Properties Section -->
    <section id="properties" class="container my-5">
        <h2  class="oxygen-semibold">Available Properties</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card property-card">
                    <img src="path/to/property1.jpg" class="card-img-top" alt="Property 1">
                    <div class="card-body">
                        <h5 class="card-title">Property 1</h5>
                        <p class="card-text">$500,000 - 3 Bed, 2 Bath</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card property-card">
                    <img src="path/to/property2.jpg" class="card-img-top" alt="Property 2">
                    <div class="card-body">
                        <h5 class="card-title">Property 2</h5>
                        <p class="card-text">$750,000 - 4 Bed, 3 Bath</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card property-card">
                    <img src="path/to/property3.jpg" class="card-img-top" alt="Property 3">
                    <div class="card-body">
                        <h5 class="card-title">Property 3</h5>
                        <p class="card-text">$1,000,000 - 5 Bed, 4 Bath</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2  class="oxygen-semibold">Contact Us</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

     <!-- Footer -->
    <footer class="footer">
        <div class="container py-5">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>123 Property St, Suite 100<br>City, State 12345</p>
                    <p>Email: info@propertyagent.com<br>Phone: (123) 456-7890</p>
                </div>
                <!-- Quick Links -->
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <!-- Social Media -->
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled d-flex">
                        <li><a href="#" class="me-3"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="me-3"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="me-3"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col text-center">
                    <p>&copy; 2024 CARIKOST. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>




  
    <!-- Sign In Modal -->
    <div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="signInModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5  id="signInModalLabel" class="modal-title oxygen-semibold" style="color: #0a0a0a;">Sign In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./home/index.php" method="post">
                        <div class="mb-3">
                            <label for="signInEmail" class="form-label open-sans-semibold" style="color: #0a0a0a;">Email address</label>
                            <input type="email" class="form-control" id="signInEmail" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="signInPassword" class="form-label open-sans-semibold" style="color: #0a0a0a;">Password</label>
                            <input type="password" class="form-control" id="signInPassword" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign Up Modal -->


       <div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title oxygen-bold" id="signUpModalLabel" style="color: #0a0a0a;">Sign Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./home/index.php" method="post">
                        <div class="mb-3">
                            <label for="signUpName" class="form-label open-sans-semibold" style="color: #0a0a0a;">Full name</label>
                            <input type="text" class="form-control" id="signUpName" name="fname" required>
                        </div>
                         <div class="mb-3">
                            <label for="signUpPhone" class="form-label open-sans-semibold" style="color: #0a0a0a;">Phone Number</label>
                            <input type="text" class="form-control" id="signUpPhone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="signUpEmail" class="form-label open-sans-semibold" style="color: #0a0a0a;">Email address</label>
                            <input type="email" class="form-control" id="signUpEmail" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="signUpPassword" class="form-label open-sans-semibold" style="color: #0a0a0a;">Password</label>
                            <input type="password" class="form-control" id="signUpPassword" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary oxygen-semibold" >Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <script>
        document.getElementById('search-input').addEventListener('input', function() {
            const query = this.value;
            if (query.length >= 2) {
                fetch(`search_properties.php?q=${query}`)
                    .then(response => response.json())
                    .then(properties => {
                        const propertyList = document.getElementById('property-list');
                        propertyList.innerHTML = '';
                        properties.forEach(property => {
                            const propertyCard = document.createElement('div');
                            propertyCard.classList.add('col-md-4', 'property-card');
                            propertyCard.innerHTML = `
                                <div class="card">
                                    <img src="${property.image}" class="card-img-top" alt="${property.title}">
                                    <div class="card-body">
                                        <h5 class="card-title">${property.title}</h5>
                                        <p class="card-text">${property.description}</p>
                                        <p class="card-text"><strong>$${property.price}</strong></p>
                                    </div>
                                </div>
                            `;
                            propertyList.appendChild(propertyCard);
                        });
                    });
            } else {
                document.getElementById('property-list').innerHTML = '';
            }
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>