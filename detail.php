<?php include('includes/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/head.php'); ?>
    <title>Detail Book</title>
</head>

<body style="background: url('asset/image/banner-bg.jpg');">

    <?php include('includes/header.php'); ?>



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

        $rows = searchGoodreads($author);
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
                                <?php renderBookCard($row); ?>
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



    <?php include('includes/footer.php'); ?>

    <?php include('includes/scripts.php'); ?>
</body>

</html>
