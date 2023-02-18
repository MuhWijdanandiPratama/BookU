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
                <div class="col-md-3">
                    <div class="components">
                        <div class="img" style="margin-bottom: 5px;">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="150" height="200" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <a style="text-decoration: none; color: black;" href="./?book=1338812319">
                            <p align="left" style="width: 200px;">Stillwater and Koo Save the World (A Stillwater and Friends Book)</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By James Patterson </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardui">
                        <div class="cardui-image">
                            <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1674642443l/59245869._SX98_.jpg" width="176" height="160" alt="Cognitive Psychology: A Student's Handbook" />
                        </div>
                        <div class="category"> James Patterson </div>
                        <div class="heading">
                            Stillwater and Koo Save the World (A Stillwater and Friends Book)
                        </div>
                        <a href="./?book=1338812319" class="btn btn-primary">Book Detail</a>
                    </div>
                </div>
            </div>
        </center>
    </div>


    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <section class="">
                <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Sign up for our newsletter</strong>
                            </p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <!-- Email input -->
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example21" class="form-control" />
                                <label class="form-label" for="form5Example21">Email address</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-light mb-4">
                                Subscribe
                            </button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
            <!-- Section: Form -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                    repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                    eum harum corrupti dicta, aliquam sequi voluptate quas.
                </p>
            </section>
            <!-- Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 4</a>
                            </li>
                        </ul>
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
            <a href="#" class="text-white">BookU</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->



    <script src="vendor/js/bootstrap.min.js"></script>
</body>

</html>