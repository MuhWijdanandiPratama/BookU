<?php include('includes/functions.php'); ?>
<?php include('info.php'); ?>
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
        $searchQuery = $_GET["search"];
        $rows = searchGoodreads($searchQuery, 'search.php');
    <header class="header">
        <div class="header-1">
            <a href="index.php" class="logo"><img src="asset/image/logo.png" width="50"> bookU</a>

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

    require_once(__DIR__ . '/config.php');

    if (isset($_GET["search"]) && $_GET["search"] !== '') :
        $search_query = trim($_GET["search"]);
        $search_query = mb_substr($search_query, 0, 200);
        $url = "https://www.goodreads.com/search?q=" . urlencode($search_query) . "&key=" . urlencode($goodreads_api_key);
    if (isset($_GET["search"]) && !empty(trim($_GET["search"]))) :
        $searchQuery = trim($_GET["search"]);
        $url = "https://www.goodreads.com/search?q=" . urlencode($searchQuery) . "&key=" . GOODREADS_API_KEY;
        $parse = @simplexml_load_file($url);

        $rows = [];
        if ($parse !== false && isset($parse->search->results->work)) {
            foreach ($parse->search->results->work as $hasil) {
                $rows[] = $hasil;
            }
        } else {
            error_log("search.php: Failed to load or parse search results for query: " . $search_query);
        }

    ?>

        <?php if (count($rows) <= 0) : ?>


            <div class="d-flex flex-column align-items-center justify-content-center" style="height: 264px;">
                <p style="font-size: 2rem;">Sorry! 0 result for '<?= htmlspecialchars($search_query, ENT_QUOTES, 'UTF-8') ?>'.</p>
                <p style="font-size: 2rem;">Sorry! 0 result for '<?= sanitize($searchQuery) ?>'.</p>
                <a href="index.php" class="btn btn-primary" style="font-size: 1.5rem;">back to home</a>
            </div>


        <?php else : ?>


            <section class="sec-main-books">
                <h1 class="judul"> <span>Search : <?= htmlspecialchars($search_query, ENT_QUOTES, 'UTF-8') ?></span> </h1>
                <h1 class="judul"> <span>Search : <?= sanitize($searchQuery) ?></span> </h1>

                <div class="books-container">

                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3">
                        <?php foreach ($rows as $row) : ?>

                            <div class="col">
                                <div class="components">
                                    <?php renderBookCard($row); ?>
                                    <div class="img mb-3">
                                        <?php if (preg_match("/nophoto/", $row->best_book->image_url)) : ?>
                                            <a href="detail.php?book=<?= htmlspecialchars($row->best_book->id, ENT_QUOTES, 'UTF-8') ?>">
                                                <img src="asset/image/book-2.png" width="150" height="200" alt="<?= htmlspecialchars($row->best_book->title, ENT_QUOTES, 'UTF-8') ?>" />
                                            </a>
                                        <?php else : ?>
                                            <a href="detail.php?book=<?= htmlspecialchars($row->best_book->id, ENT_QUOTES, 'UTF-8') ?>">
                                                <img src="<?= htmlspecialchars(hapusStringSX98($row->best_book->image_url), ENT_QUOTES, 'UTF-8') ?>" width="150" height="200" alt="<?= htmlspecialchars($row->best_book->title, ENT_QUOTES, 'UTF-8') ?>" />
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                    <a href="detail.php?book=<?= htmlspecialchars($row->best_book->id, ENT_QUOTES, 'UTF-8') ?>">
                                        <p><?= htmlspecialchars($row->best_book->title, ENT_QUOTES, 'UTF-8') ?></p>
                                    </a>
                                    <p class="text-secondary" style="margin-top: -10px;"> By <?= htmlspecialchars($row->best_book->author->name, ENT_QUOTES, 'UTF-8') ?> </p>
                                            <a href="detail.php?book=<?= sanitize($row->best_book->id) ?>">
                                                <img src="asset/image/book-2.png" width="150" height="200" alt="<?= sanitize($row->best_book->title) ?>" />
                                            </a>
                                        <?php else : ?>
                                            <a href="detail.php?book=<?= sanitize($row->best_book->id) ?>">
                                                <img src="<?= sanitize(hapusStringSX98($row->best_book->image_url)) ?>" width="150" height="200" alt="<?= sanitize($row->best_book->title) ?>" />
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                    <a href="detail.php?book=<?= sanitize($row->best_book->id) ?>">
                                        <p><?= sanitize($row->best_book->title) ?></p>
                                    </a>
                                    <p class="text-secondary" style="margin-top: -10px;"> By <?= sanitize($row->best_book->author->name) ?> </p>
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
