<?php 

include("./server/database/users.php");


if (isset($_POST["submit"])) {
    if (registerUser($_POST) > 0) {
       echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Registers Success',
                text: 'Registers Successfully'
            }).then(function() {
                window.location = './home/index.php';
            });
        </script>";
    exit();
    }else{
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Registers failed'
            }).then(function() {
                window.location = 'index.php';
            });
        </script>";
    }
};

// Check if login



// function generate_uuid_v4() {
//     $data = random_bytes(16);
//     $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // versi 4
//     $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // varian 10x

//     return sprintf(
//         '%08s-%04s-%04s-%04s-%12s',
//         bin2hex(substr($data, 0, 4)),
//         bin2hex(substr($data, 4, 2)),
//         bin2hex(substr($data, 6, 2)),
//         bin2hex(substr($data, 8, 2)),
//         bin2hex(substr($data, 10, 6))
//     );
// };

// $id -> generate_uuid_v4();
// $full_name ->  


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
      <link rel="stylesheet" href="sweetalert2.min.css">
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

      /* Bootstrap 5 CSS and icons included */
            :root {
            --colorPrimaryNormal: #00b3bb;
            --colorPrimaryDark: #00979f;
            --colorPrimaryGlare: #00cdd7;
            --colorPrimaryHalf: #80d9dd;
            --colorPrimaryQuarter: #bfecee;
            --colorPrimaryEighth: #dff5f7;
            --colorPrimaryPale: #f3f5f7;
            --colorPrimarySeparator: #f3f5f7;
            --colorPrimaryOutline: #dff5f7;
            --colorButtonNormal: #00b3bb;
            --colorButtonHover: #00cdd7;
            --colorLinkNormal: #00979f;
            --colorLinkHover: #00cdd7;
            }




            .upload_dropZone {
            color: #0f3c4b;
            background-color: var(--colorPrimaryPale, #c8dadf);
            outline: 2px dashed var(--colorPrimaryHalf, #c1ddef);
            outline-offset: -12px;
            transition:
                outline-offset 0.2s ease-out,
                outline-color 0.3s ease-in-out,
                background-color 0.2s ease-out;
            }
            .upload_dropZone.highlight {
            outline-offset: -4px;
            outline-color: var(--colorPrimaryNormal, #0576bd);
            background-color: var(--colorPrimaryEighth, #c8dadf);
            }
            .upload_svg {
            fill: var(--colorPrimaryNormal, #0576bd);
            }
            .btn-upload {
            color: #fff;
            background-color: var(--colorPrimaryNormal);
            }
            .btn-upload:hover,
            .btn-upload:focus {
            color: #fff;
            background-color: var(--colorPrimaryGlare);
            }
            .upload_img {
            width: calc(33.333% - (2rem / 3));
            object-fit: contain;
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
                    <form action="./home/index.php" method="post" enctype="multipart/form-data">
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
                        <div class="mb-3">
                          <h1 class="h6 open-sans-semibold mb-3">Upload Photo</h1>

<form>

  <fieldset class="upload_dropZone text-center mb-3 p-4">

    <legend class="visually-hidden">Image uploader</legend>

    <svg class="upload_svg" width="60" height="60" aria-hidden="true">
      <use href="#icon-imageUpload"></use>
    </svg>

    <p class="small my-2">Drag &amp; Drop background image(s) inside dashed region<br><i>or</i></p>

                            <input id="upload_image_background" data-post-name="image_background" data-post-url="https://someplace.com/image/uploads/backgrounds/" class="position-absolute invisible" type="file" accept="image/jpeg, image/png, image/svg+xml" />

                            <label class="btn btn-upload mb-3" for="upload_image_background">Choose file(s)</label>

                            <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>

                        </fieldset>

                        </form>


                        <svg style="display:none">
                        <defs>
                            <symbol id="icon-imageUpload" clip-rule="evenodd" viewBox="0 0 96 96">
                            <path d="M47 6a21 21 0 0 0-12.3 3.8c-2.7 2.1-4.4 5-4.7 7.1-5.8 1.2-10.3 5.6-10.3 10.6 0 6 5.8 11 13 11h12.6V22.7l-7.1 6.8c-.4.3-.9.5-1.4.5-1 0-2-.8-2-1.7 0-.4.3-.9.6-1.2l10.3-8.8c.3-.4.8-.6 1.3-.6.6 0 1 .2 1.4.6l10.2 8.8c.4.3.6.8.6 1.2 0 1-.9 1.7-2 1.7-.5 0-1-.2-1.3-.5l-7.2-6.8v15.6h14.4c6.1 0 11.2-4.1 11.2-9.4 0-5-4-8.8-9.5-9.4C63.8 11.8 56 5.8 47 6Zm-1.7 42.7V38.4h3.4v10.3c0 .8-.7 1.5-1.7 1.5s-1.7-.7-1.7-1.5Z M27 49c-4 0-7 2-7 6v29c0 3 3 6 6 6h42c3 0 6-3 6-6V55c0-4-3-6-7-6H28Zm41 3c1 0 3 1 3 3v19l-13-6a2 2 0 0 0-2 0L44 79l-10-5a2 2 0 0 0-2 0l-9 7V55c0-2 2-3 4-3h41Z M40 62c0 2-2 4-5 4s-5-2-5-4 2-4 5-4 5 2 5 4Z"/>
                            </symbol>
                        </defs>
                        </svg>
                        </div>
                        <button type="submit" class="btn btn-primary oxygen-semibold">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    <script>
        /* Bootstrap 5 JS included */

            console.clear();
            ('use strict');


            // Drag and drop - single or multiple image files
            // https://www.smashingmagazine.com/2018/01/drag-drop-file-uploader-vanilla-js/
            // https://codepen.io/joezimjs/pen/yPWQbd?editors=1000
            (function () {

            'use strict';
            
            // Four objects of interest: drop zones, input elements, gallery elements, and the files.
            // dataRefs = {files: [image files], input: element ref, gallery: element ref}

            const preventDefaults = event => {
                event.preventDefault();
                event.stopPropagation();
            };

            const highlight = event =>
                event.target.classList.add('highlight');
            
            const unhighlight = event =>
                event.target.classList.remove('highlight');

            const getInputAndGalleryRefs = element => {
                const zone = element.closest('.upload_dropZone') || false;
                const gallery = zone.querySelector('.upload_gallery') || false;
                const input = zone.querySelector('input[type="file"]') || false;
                return {input: input, gallery: gallery};
            }

            const handleDrop = event => {
                const dataRefs = getInputAndGalleryRefs(event.target);
                dataRefs.files = event.dataTransfer.files;
                handleFiles(dataRefs);
            }


            const eventHandlers = zone => {

                const dataRefs = getInputAndGalleryRefs(zone);

                if (!dataRefs.input) return;

                // Prevent default drag behaviors
                ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(event => {
                zone.addEventListener(event, preventDefaults, false);
                document.body.addEventListener(event, preventDefaults, false);
                });

                // Highlighting drop area when item is dragged over it
                ;['dragenter', 'dragover'].forEach(event => {
                zone.addEventListener(event, highlight, false);
                });
                ;['dragleave', 'drop'].forEach(event => {
                zone.addEventListener(event, unhighlight, false);
                });

                // Handle dropped files
                zone.addEventListener('drop', handleDrop, false);

                // Handle browse selected files
                dataRefs.input.addEventListener('change', event => {
                dataRefs.files = event.target.files;
                handleFiles(dataRefs);
                }, false);

            }


            // Initialise ALL dropzones
            const dropZones = document.querySelectorAll('.upload_dropZone');
            for (const zone of dropZones) {
                eventHandlers(zone);
            }


            // No 'image/gif' or PDF or webp allowed here, but it's up to your use case.
            // Double checks the input "accept" attribute
            const isImageFile = file => 
                ['image/jpeg', 'image/png', 'image/svg+xml'].includes(file.type);


            function previewFiles(dataRefs) {
                if (!dataRefs.gallery) return;
                for (const file of dataRefs.files) {
                let reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onloadend = function() {
                    let img = document.createElement('img');
                    img.className = 'upload_img mt-2';
                    img.setAttribute('alt', file.name);
                    img.src = reader.result;
                    dataRefs.gallery.appendChild(img);
                }
                }
            }

            // Based on: https://flaviocopes.com/how-to-upload-files-fetch/
            const imageUpload = dataRefs => {

                // Multiple source routes, so double check validity
                if (!dataRefs.files || !dataRefs.input) return;

                const url = dataRefs.input.getAttribute('data-post-url');
                if (!url) return;

                const name = dataRefs.input.getAttribute('data-post-name');
                if (!name) return;

                const formData = new FormData();
                formData.append(name, dataRefs.files);

                fetch(url, {
                method: 'POST',
                body: formData
                })
                .then(response => response.json())
                .then(data => {
                console.log('posted: ', data);
                if (data.success === true) {
                    previewFiles(dataRefs);
                } else {
                    console.log('URL: ', url, '  name: ', name)
                }
                })
                .catch(error => {
                console.error('errored: ', error);
                });
            }


            // Handle both selected and dropped files
            const handleFiles = dataRefs => {

                let files = [...dataRefs.files];

                // Remove unaccepted file types
                files = files.filter(item => {
                if (!isImageFile(item)) {
                    console.log('Not an image, ', item.type);
                }
                return isImageFile(item) ? item : null;
                });

                if (!files.length) return;
                dataRefs.files = files;

                previewFiles(dataRefs);
                imageUpload(dataRefs);
            }

            })();

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>