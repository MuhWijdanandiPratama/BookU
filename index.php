<?php

include('info.php');

$asin = $_GET['book'];
include('gambar.php');
include('affiliate.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo str_replace("-", " ", $title); ?> book review, free download">
    <meta http-equiv="language" content="EN">
    <meta property="og:title" content="<?php echo str_replace("-", " ", $title); ?>">
    <meta property="og:description" content="book review title <?php echo $title; ?>">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="120">
    <meta property="og:image:height" content="120">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BookU</title>
    <!-- google lang -->
    <!-- Bootstrap -->
    <!-- <link href="./source/bootstrap.min.css" rel="stylesheet">
    <link href="./source/flag-icon.min.css" rel="stylesheet">
    <link href="./source/font-awesome.min.css" rel="stylesheet">
    <link href="./source/style.css" rel="stylesheet">
    <link href="./source/fbfeed.css" rel="stylesheet">
    <script src="./js/sg1a.js"></script>
    <script src="https://kit.fontawesome.com/680ecce84d.js" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/cardui.css">
    <style>
        .div-divider {
            width: 250px;
        }

        @media screen and (max-width: 375px) {
            .div-divider {
                width: 50px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="index.php">BookU</a>
            <div class="div-divider"></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Disclaimer</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">DMCA</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-4">
        <h3 style="margin-bottom: 50px; margin-top: 50px;">Best Seller</h3>
        <center>
            <div class="row mb-4">
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1659645549l/61285758._SX98_.jpg" width="150" height="200" alt="Nick and Charlie: A Heartstopper Novella" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Nick and Charlie: A...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Alice Oseman </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1579089936l/50392746._SX98_.jpg" width="150" height="200" alt="Daisy Jones & The Six" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Daisy Jones & The Six</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Taylor Jenkins Reid </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1658675556l/61677576._SX98_.jpg" width="150" height="200" alt="Dead Lions (Slough House, #2)" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Dead Lions (Slough...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Mick Herron </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p style="width: 200px;">Stillwater and Koo Save...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
            </div>
        </center>
    </div>


    <!-- Footer -->
    <footer class="bg-dark text-white">
        <!-- Grid container -->
        <div class="container p-4 text-center">
            <!-- Section: Social media -->
            <section style="margin-bottom: 50px;">
                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    
                </a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                        <path d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.339 18.337H5.667v-8.59h2.672v8.59zM7.003 8.574a1.548 1.548 0 1 1 0-3.096 1.548 1.548 0 0 1 0 3.096zm11.335 9.763h-2.669V14.16c0-.996-.018-2.277-1.388-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248h-2.667v-8.59h2.56v1.174h.037c.355-.675 1.227-1.387 2.524-1.387 2.704 0 3.203 1.778 3.203 4.092v4.71z"></path>
                    </svg> -->
                </a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"></path>
                    </svg> -->
                </a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Text -->
            <section style="margin-bottom: 50px;">
                <p align="left" style="width: 1000px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Duis lacus nibh, commodo a congue vel, pharetra ut nibh. Cras placerat pretium efficitur. 
                    Donec lacinia risus ac bibendum euismod. Vestibulum commodo tincidunt ligula id tempus. 
                    Sed neque risus, ultrices id turpis aliquet, faucibus euismod sem. Sed molestie diam vitae porta eleifend. 
                    Suspendisse mollis mauris sed erat accumsan fermentum. Fusce et dolor euismod, venenatis lorem sed, euismod diam. 
                    Suspendisse velit nisl, aliquet eget semper vitae, vulputate in elit. 
                    Donec et sapien porta, rhoncus massa id, efficitur nisi. Aenean id eros eu tellus tincidunt feugiat. 
                    Etiam ultricies felis at lobortis imperdiet. Donec laoreet, massa eu aliquet sodales, lacus tellus aliquam nibh, a finibus neque libero ac lectus. 
                    Aenean sagittis neque sed interdum varius.
                </p>
            </section>
            <!-- Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <p class="text-uppercase">Home</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <p class="text-uppercase">Disclaimer</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <p class="text-uppercase">Contact</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <p class="text-uppercase">DMCA</p>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a style="text-decoration: none;" href="#" class="text-white">BookU</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->



    <script src="vendor/js/bootstrap.min.js"></script>
</body>

</html>