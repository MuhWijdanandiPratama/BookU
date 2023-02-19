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
    <!-- <link rel="stylesheet" type="text/css" media="screen,projection" href="master.css" /> -->
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Stillwater and Koo Save the World (A Stillwater and Friends Book)" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1659645549l/61285758.jpg" width="150" height="200" alt="Nick and Charlie: A Heartstopper Novella" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338885103">
                            <p style="width: 200px;">Nick and Charlie: A...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Alice Oseman </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1579089936l/50392746.jpg" width="150" height="200" alt="Daisy Jones & The Six" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1524798649">
                            <p style="width: 200px;">Daisy Jones & The Six</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Taylor Jenkins Reid </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1658675556l/61677576.jpg" width="150" height="200" alt="Dead Lions (Slough House, #2)" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1616953675">
                            <p style="width: 200px;">Dead Lions (Slough...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Mick Herron </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1596890589l/52664757.jpg" width="150" height="200" alt="The Vanished (Shuri: A Black Panther Novel #2)" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338587188">
                            <p style="width: 200px;">The Vanished (Shuri:...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Nic Stone </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1567084300l/43885679.jpg" width="150" height="200" alt="Frozen 2: Forest of Shadows" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1368043631">
                            <p style="width: 200px;">Frozen 2: Forest of...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Kamilla Benko </p>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1633494539l/59201362.jpg" width="150" height="200" alt="The Wife Before" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1496731115">
                            <p style="width: 200px;">The Wife Before</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Shanora Williams </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1652806307l/60864807.jpg" width="150" height="200" alt="Encore in Death (In Death #56)" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=B09Y46SX9G">
                            <p style="width: 200px;">Encore in Death (In...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By J.D. Robb </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1673217326i/62022434.jpg" width="150" height="200" alt="Things We Hide from the Light (Knockemout, #2)" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=B0BB64ZRMW">
                            <p style="width: 200px;">Things We Hide fr...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Lucy Score </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1654871790l/60831811.jpg" width="150" height="200" alt="Beautiful Graves" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=B09W2C9QB1">
                            <p style="width: 200px;">Beautiful Graves</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By L.J. Shen </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1673204569l/68320207.jpg" width="150" height="200" alt="Tress of the Emerald Sea" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=B0BPNB19CL">
                            <p style="width: 200px;">Tress of the Eme...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Brandon Sanderson </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1659050314l/61049580.jpg" width="150" height="200" alt="Token Black Girl: A Memoir" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=B09KLLG3L2">
                            <p style="width: 200px;">Token Black Girl: A...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Danielle Prescod </p>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                        <path d="M20.283 10.356h-8.327v3.451h4.792c-.446 2.193-2.313 3.453-4.792 3.453a5.27 5.27 0 0 1-5.279-5.28 5.27 5.27 0 0 1 5.279-5.279c1.259 0 2.397.447 3.29 1.178l2.6-2.599c-1.584-1.381-3.615-2.233-5.89-2.233a8.908 8.908 0 0 0-8.934 8.934 8.907 8.907 0 0 0 8.934 8.934c4.467 0 8.529-3.249 8.529-8.934 0-.528-.081-1.097-.202-1.625z"></path>
                    </svg>
                </a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                        <path d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.339 18.337H5.667v-8.59h2.672v8.59zM7.003 8.574a1.548 1.548 0 1 1 0-3.096 1.548 1.548 0 0 1 0 3.096zm11.335 9.763h-2.669V14.16c0-.996-.018-2.277-1.388-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248h-2.667v-8.59h2.56v1.174h.037c.355-.675 1.227-1.387 2.524-1.387 2.704 0 3.203 1.778 3.203 4.092v4.71z"></path>
                    </svg>
                </a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"></path>
                    </svg>
                </a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Text -->
            <section style="margin-bottom: 50px;">
                <p align="left" style="width: 1000px;">
                    BookU is a digital platform that provides access to a vast collection of books. 
                    These websites allow users to browse through various genres, such as fiction, non-fiction, self-help, and many more. 
                    They offer convenient options to purchase or rent books in both digital and print formats. 
                    Users can also read reviews and ratings from other readers before making a decision. 
                    These websites also provide a platform for authors to showcase their work and engage with readers. 
                    BookU are a great place for book enthusiasts to discover new titles, buy books, and connect with other readers and authors.
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
            &copy; 2023 Copyright:
            <a style="text-decoration: none;" href="#" class="text-white">BookU</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->



    <script src="vendor/js/bootstrap.min.js"></script>
</body>

</html>