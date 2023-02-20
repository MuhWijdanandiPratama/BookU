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
    <title>BookU</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">

    <link rel="stylesheet" href="asset/css/cardui.css">

    <link rel="stylesheet" href="asset/css/style.css">

    <!-- <style>
        .div-divider {
            width: 250px;
        }

        @media screen and (max-width: 375px) {
            .div-divider {
                width: 50px;
            }
        }
    </style> -->
</head>

<body>
    <!-- navbar section start -->
    <header class="header">
        <div class="header-1">
            <a href="index.php" class="logo"><i class="fas fa-book"></i> bookU</a>

            <form action="" class="search-form">
                <input type="text" name="search" placeholder="search here.." id="search-box" required>
                <button type="submit"><span class="fas fa-search"></span></button>
            </form>

        </div>

        <div class="header-2">
            <nav class="nafbar">
                <a href="index.php">home</a>
                <a href="#">disclaimer</a>
                <a href="#">contact</a>
                <a href="#">DMCA</a>
            </nav>
        </div>
    </header>
    <!-- navbar section end -->









    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="asset/js/script.js"></script>
</body>

</html>