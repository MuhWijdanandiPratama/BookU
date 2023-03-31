<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search | BookU</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">

    <link rel="stylesheet" href="asset/css/cardui.css">

    <link rel="stylesheet" href="asset/css/style.css">

    <link rel="shortcut icon" href="asset/image/favicon.ico">
</head>

<body>

    <header class="header">
        <div class="header-1">
            <a href="index.php" class="logo"><img src="asset/image/logo.png" width="50"></i> bookU</a>

            <form action="search.php" class="search-form">
                <input type="text" name="search" placeholder="search here.." id="search-box" required>
                <button type="submit"><span class="fas fa-search"></span></button>
            </form>

        </div>

        <div class="header-2">
            <nav class="nafbar">
                <a href="index.php">home</a>
                <a href="disclaimer.php">disclaimer</a>
                <a href="contact.php">contact</a>
                <a href="dmca.php">DMCA</a>
            </nav>
        </div>
    </header>

    <?php

    if (isset($_GET["search"])) :
        $url = "https://www.goodreads.com/search?q=" . $_GET["search"] . "&key=yepSbX0wOTBiypm7RRQ3A";
        $parse = simplexml_load_file($url);

        $result = $parse->search->results->work;

        $rows = []; // tempat kosong
        foreach ($result as $hasil) {
            $rows[] = $hasil;
        }

        function hapusStringSX98($url)
        {
            if (preg_match("/_SX98_.jpg/", $url)) {
                $result = preg_replace("/_SX98_.jpg/", "", $url);
                return $result . 'jpg';
            } else {
                return $url;
            }
        }

    ?>

        <?php if (count($rows) <= 0) : ?>


            <div class="d-flex flex-column align-items-center justify-content-center" style="height: 264px;">
                <p style="font-size: 2rem;">Sorry! 0 result for '<?= $_GET["search"] ?>'.</p>
                <a href="index.php" class="btn btn-primary" style="font-size: 1.5rem;">back to home</a>
            </div>


        <?php else : ?>


            <section class="sec-main-books">
                <h1 class="judul"> <span>Search : <?= $_GET["search"] ?></span> </h1>

                <div class="books-container">

                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3">
                        <?php foreach ($rows as $row) : ?>

                            <div class="col">
                                <div class="components">
                                    <div class="img mb-3">
                                        <?php if (preg_match("/nophoto/", $row->best_book->image_url)) : ?>
                                            <a href="detail.php?book=<?= $row->best_book->id ?>">
                                                <img src="asset/image/book-2.png" width="150" height="200" alt="<?= $row->best_book->title ?>" />
                                            </a>
                                        <?php else : ?>
                                            <a href="detail.php?book=<?= $row->best_book->id ?>">
                                                <img src="<?= hapusStringSX98($row->best_book->image_url) ?>" width="150" height="200" alt="<?= $row->best_book->title ?>" />
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                    <a href="detail.php?book=<?= $row->best_book->id ?>">
                                        <p><?= $row->best_book->title ?></p>
                                    </a>
                                    <p class="text-secondary" style="margin-top: -10px;"> By <?= $row->best_book->author->name ?> </p>
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



    <script src="vendor/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script src="asset/js/script.js"></script>
</body>

</html>