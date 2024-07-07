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
    <header class="header">
        <div>
            <h1 style="color: #0a0a0a;" class="oxygen-bold">Welcome to CARIKOST</h1>
            <p class="oxygen-semibold" style="color: #1D1A1A;">Your dream home awaits</p>
            <a href="#properties" class="btn btn-primary open-sans-semibold">View Properties</a>
        </div>
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

       <!-- Sign In Modal -->
    <div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="signInModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signInModalLabel">Sign In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="signInEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="signInEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="signInPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signInPassword" required>
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
                    <h5 class="modal-title" id="signUpModalLabel">Sign Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="signUpName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="signUpName" required>
                        </div>
                        <div class="mb-3">
                            <label for="signUpEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="signUpEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="signUpPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signUpPassword" required>
                        </div>
                        <button type="submit" class="btn btn-primary oxygen-semibold" >Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>   <!-- Sign In Modal -->
    <div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="signInModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signInModalLabel">Sign In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="signInEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="signInEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="signInPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signInPassword" required>
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
                    <h5 class="modal-title" id="signUpModalLabel">Sign Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="signUpName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="signUpName" required>
                        </div>
                        <div class="mb-3">
                            <label for="signUpEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="signUpEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="signUpPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signUpPassword" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>