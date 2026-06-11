<?php include('includes/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/head.php'); ?>
    <title>Search | BookU</title>
</head>

<body>

    <?php include('includes/header.php'); ?>

    <?php

    if (isset($_GET["search"]) && $_GET["search"] !== '') :
        $rows = searchGoodreads($_GET["search"], 'search.php');

    ?>

        <?php if (count($rows) <= 0) : ?>


            <div class="d-flex flex-column align-items-center justify-content-center" style="height: 264px;">
                <p style="font-size: 2rem;">Sorry! 0 result for '<?= htmlspecialchars($searchQuery, ENT_QUOTES, 'UTF-8') ?>'.</p>
                <a href="index.php" class="btn btn-primary" style="font-size: 1.5rem;">back to home</a>
            </div>


        <?php else : ?>


            <section class="sec-main-books">
                <h1 class="judul"> <span>Search : <?= htmlspecialchars($searchQuery, ENT_QUOTES, 'UTF-8') ?></span> </h1>

                <div class="books-container">

                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3">
                        <?php foreach ($rows as $row) : ?>

                            <div class="col">
                                <div class="components">
                                    <?php renderBookCard($row); ?>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>

                </div>

            </section>


        <?php endif; ?>



    <?php else : ?>


        <div class="d-flex flex-column align-items-center justify-content-center" style="height: 264px;">
            <p style="font-size: 2rem;">Sorry! Cannot get data.</p>
            <a href="index.php" class="btn btn-primary" style="font-size: 1.5rem;">back to home</a>
        </div>


    <?php endif; ?>


    <?php include('includes/footer.php'); ?>

    <?php include('includes/scripts.php'); ?>
</body>

</html>
