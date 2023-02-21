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

</head>

<body>

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
    ?>


        <div class="container my-5">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <img src="<?= $gambarx ?>" class="img-center center-block  img-rounded center  img-thumbnail">
                    <div class="text-center">
                        <a onclick="downloadpdf1()" href='#' rel='nofollow' class="btn btn-success text-light d-block mt-3" style="font-size: 1.5rem;"><i class="fas fa-download"></i> Download</a>
                        <a onclick="downloadpdf2()" href='#' rel='nofollow' class="btn btn-success text-light d-block mt-3" style="font-size: 1.5rem;"><i class="fab fa-readme"></i> Read Online</a>
                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-6">
                    <h1><?= str_replace("-", " ", $title) ?></h1>
                    <h4>author : <?= $author ?></h4>
                    <h5><?= $average_rating ?></h5>
                    <h5>Description : </h5>
                    <div style="height: 20rem;background: #b8b8b8;overflow: scroll;padding: .9rem;">
                        <?= $desc ?>
                    </div>
                    <p class="mt-3"><?= $num_pages ?> pages</p>
                    <p>Publised <?= formatTanggal($date) ?></p>
                </div>
            </div>
        </div>

        <script>
            function downloadpdf1() {
                location.href = '<?= $linksatu; ?>';
            }

            function downloadpdf2() {
                location.href = '<?= $linkdua; ?>';
            }
        </script>

    <?php else : ?>


        <div class="d-flex flex-column align-items-center justify-content-center" style="height: 264px;">
            <p style="font-size: 2rem;">Sorry! Cannot get data.</p>
            <a href="index.php" class="btn btn-primary" style="font-size: 1.5rem;">back to home</a>
        </div>


    <?php endif; ?>



    <footer style="background: #0a2647;border-top: 2px solid #27AE60;" class="text-white">

        <div class="container text-center mt-5">

            <div>
                <div class="btn btn-outline-light btn-floating m-1">
                    <a href="#" style="text-decoration: none;height: 3rem; width: 3rem;line-height: 3rem;font-size: 2rem;color: #fff;" class="fab fa-google"></a>
                </div>
                <div class="btn btn-outline-light btn-floating m-1">
                    <a href="#" style="text-decoration: none;height: 3rem; width: 3rem;line-height: 3rem;font-size: 2rem;color: #fff;" class="fab fa-linkedin"></a>
                </div>
                <div class="btn btn-outline-light btn-floating m-1">
                    <a href="#" style="text-decoration: none;height: 3rem; width: 3rem;line-height: 3rem;font-size: 2rem;color: #fff;" class="fab fa-github"></a>
                </div>
            </div>

            <div class="mt-5">
                <p align="left">
                    BookU is a digital platform that provides access to a vast collection of books.
                    These websites allow users to browse through various genres, such as fiction, non-fiction, self-help, and many more.
                    They offer convenient options to purchase or rent books in both digital and print formats.
                    Users can also read reviews and ratings from other readers before making a decision.
                    These websites also provide a platform for authors to showcase their work and engage with readers.
                    BookU are a great place for book enthusiasts to discover new titles, buy books, and connect with other readers and authors.
                </p>
            </div>

            <div class="mt-5">

                <div class="row">

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <a href="index.php" class="text-white text-uppercase text-decoration-none">Home</a>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <a href="disclaimer.php" class="text-white text-uppercase text-decoration-none">Disclaimer</a>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <a href="contact.php" class="text-white text-uppercase text-decoration-none">Contact</a>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <a href="dcma.php" class="text-white text-uppercase text-decoration-none">DMCA</a>
                    </div>

                </div>

            </div>

        </div>


        <div class="text-center p-3 mt-5" style="background-color: rgba(0, 0, 0, 0.2);">
            &copy; 2023 Copyright:
            <a href="#" class="text-white text-decoration-none">BookU</a>
        </div>

    </footer>






    <script src="vendor/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script src="asset/js/script.js"></script>
</body>

</html>