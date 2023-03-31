<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Book</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">

    <link rel="stylesheet" href="asset/css/cardui.css">

    <link rel="stylesheet" href="asset/css/style.css">

    <link rel="shortcut icon" href="asset/image/favicon.ico">

</head>

<body style="background: url('asset/image/banner-bg.jpg');">

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
    if (!empty($_GET['book'])) :
        $asin = $_GET['book'];
        include('gambar.php');
        include('affiliate.php');

        $date = $publication_year . '-' . $publication_month . '-' . $publication_day;

        function formatTanggal($date)
        {
            return date('F d, Y', strtotime($date));
        }

        $url = "https://www.goodreads.com/search?q=" . $author . "&key=yepSbX0wOTBiypm7RRQ3A";
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


        <div class="container my-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <center>
                        <?php if (preg_match("/nophoto/", $gambarx)) : ?>
                            <img src="asset/image/book-2.png" class="img-center center-block  img-rounded center  img-thumbnail">
                        <?php else : ?>
                            <img src="<?= $gambarx ?>" class="img-center center-block  img-rounded center  img-thumbnail">
                        <?php endif; ?>
                    </center>
                    <div class="text-center">
                        <a onclick="downloadpdf1()" href='#' rel='nofollow' class="btn btn-success text-light d-block mt-3" style="font-size: 1.5rem;"><i class="fas fa-download"></i> Download</a>
                        <a onclick="downloadpdf2()" href='#' rel='nofollow' class="btn btn-success text-light d-block mt-3" style="font-size: 1.5rem;"><i class="fab fa-readme"></i> Read Online</a>
                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-6">
                    <h1><?= str_replace("-", " ", $title) ?></h1>
                    <h5><?php 

                            $star = 1;
                            while ($star <= 5) {
                                if ($average_rating < $star) {
                                    ?>
                                        <li style="color: gold;" class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <?php
                                } else{
                                    ?>
                                        <li style="color: gold;" class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <?php
                                }

                                $star++;
                            }
                            ?>
                            <?= $average_rating ?>
                            </h5>
                    <hr>
                    <div class="row row-cols-2 g-5">
                        <div class="col">
                            <table>
                                <tr>
                                    <td><h4>author</h4></td>
                                    <td><h4>&nbsp;:</h4></td>
                                    <td><h4>&nbsp;<?= $author ?></h4></td>
                                </tr>
                                <tr>
                                    <td><h5>format</h5></td>
                                    <td><h5>&nbsp;:</h5></td>
                                    <td><h5>&nbsp;Pdf, EPub, Mobi, Kindle</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>publisher</h5></td>
                                    <td><h5>&nbsp;:</h5></td>
                                    <td><h5>&nbsp;<?= $publisher ?></h5></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table>
                                <tr>
                                    <td><h5>pages</h5></td>
                                    <td><h5>&nbsp;:</h5></td>
                                    <td><h5>&nbsp;<?= $num_pages ?> pages</h5></td>
                                </tr>
                                <tr>
                                    <td><h5>publised</h5></td>
                                    <td><h5>&nbsp;:</h5></td>
                                    <td><h5>&nbsp;<?= formatTanggal($date) ?></h5></td>
                                </tr>
                            </table>
                        </div>
                    </div><br>
                    <div class="row">
							<div class="col-md-12">
								<div class="list-group">
									<a onclick="downloadpdf1()" href="#" class="list-group-item list-group-item-success" rel="nofollow"><b><span class="glyphicon glyphicon-ok"></span> Register a free 1 month Trial Account.</b></a>
									<a onclick="downloadpdf2()" href="#" class="list-group-item list-group-item-info" rel="nofollow"><b><span class="glyphicon glyphicon-ok"></span> Download as many books as you like (Personal use)</b></a>
									<a onclick="downloadpdf1()" href="#" class="list-group-item list-group-item-warning" rel="nofollow"><b><span class="glyphicon glyphicon-ok"></span> Cancel the membership at any time if not satisfied.</b></a>
									<a onclick="downloadpdf2()" href="#" class="list-group-item list-group-item-danger" rel="nofollow"><b><span class="glyphicon glyphicon-ok"></span> Join Over 80000 Happy Readers</b></a>
								</div>
							</div>
                        </div><br><br>
                    <h5>Description : </h5>
                    <div style="height: 20rem;background: #b8b8b8;overflow: scroll;padding: .9rem;">
                        <?= $desc ?>
                    </div>
                </div>
            </div>
        </div>

        <section class="sec-main-books">

            <h1 class="judul"> <span>another book from <?= $author ?></span> </h1>

            <div class="books-container">

                <!-- <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3"> -->
                <div class="swiper another-books-slider">
                    <div class="swiper-wrapper">

                        <?php foreach ($rows as $row) : ?>

                            <!-- <div class="col"> -->
                            <div class="swiper-slide components">
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
                                <a style="text-decoration: none; color: black;" href="detail.php?book=<?= $row->best_book->id ?>">
                                    <p><?= $row->best_book->title ?></p>
                                </a>
                                <p class="text-secondary" style="margin-top: -10px;"> By <?= $row->best_book->author->name ?> </p>
                            </div>
                            <!-- </div> -->

                        <?php endforeach; ?>
                        <!-- </div> -->

                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                </div>

            </div>

        </section>

        <script>
            function downloadpdf1() {
                location.href = '<?= $affone; ?>';
            }

            function downloadpdf2() {
                location.href = '<?= $afftwo; ?>';
            }
        </script>

    <?php else : ?>


        <div class="d-flex flex-column align-items-center justify-content-center" style="height: 305px;">
            <p style="font-size: 2rem;">Sorry! Cannot get data.</p>
            <a href="index.php" class="btn btn-primary" style="font-size: 1.5rem;">back to home</a>
        </div>


    <?php endif; ?>



    <section class="sec-footer">

        <div class="isi-footer">
            <div class="ikon">
                <a href="#" class="fab fa-google"></a>

                <a href="#" class="fab fa-linkedin"></a>

                <a href="#" class="fab fa-github"></a>
            </div>

            <p>
                BookU is a digital platform that provides access to a vast collection of books.
                These websites allow users to browse through various genres, such as fiction, non-fiction, self-help, and many more.
                They offer convenient options to purchase or rent books in both digital and print formats.
                Users can also read reviews and ratings from other readers before making a decision.
                These websites also provide a platform for authors to showcase their work and engage with readers.
                BookU are a great place for book enthusiasts to discover new titles, buy books, and connect with other readers and authors.
            </p>

            <div class="cepat-link">
                <a href="index.php">Home</a>
                <a href="disclaimer.php">Disclaimer</a>
                <a href="contact.php">Contact</a>
                <a href="dcma.php">DMCA</a>
            </div>

        </div>

    </section>

    <div class="credit">
        &copy;
        <script>
            document.write(new Date().getFullYear())
        </script> Copyright:
        <a href="#">BookU</a>
    </div>






    <script src="vendor/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script src="asset/js/script.js"></script>
</body>

</html>