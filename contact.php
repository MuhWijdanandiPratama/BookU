<?php include('info.php'); ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | BookU</title>

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

    <br><br><br>

    <!-- Begin page content -->
    <div class="container vcenter">
        <div class="col">
            <div>
                <h1>Contact Us</h1>
                <br>
                <p>If you have any question or suggestions about this website, or want to advertise on this website, or found any copyrighted document, please contact us at this email: <?php echo $emailDMCA; ?> . If you want to send <a href="./dmca.php">DMCA request</a>, please follow DMCA page to send copyright issues. </p>

                <p>We are a free pdf share document that provides an option to search for and download various PDF documents, data sheets etc. We don't host any files. Our crawlers harvested a huge database PDF files through different open Internet resources such as blogs, forums, BBS and others. This database is regularly checked for file validity so now you can search within more than three million of live PDF files.</p>

                <p>We are glad to see You at Our Service. We hope it will be useful to you and your friends, You'll enjoy our service and share Your experience with your friends! Check back in from time to time to see what we've done new. If You have any questions or have something interesting to offer please feel free to contact us.</p>
                <br><br><br>
            </div>
        </div>

    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <section class="sec-footer" style="background-color: #144272;">

        <div class="isi-footer">
            <div class="ikon">
                <a href="#" class="fab fa-google"></a>

                <a href="#" class="fab fa-linkedin"></a>

                <a href="#" class="fab fa-github"></a>
            </div>

            <p class="text-light">
                BookU is a digital platform that provides access to a vast collection of books.
                These websites allow users to browse through various genres, such as fiction, non-fiction, self-help, and many more.
                They offer convenient options to purchase or rent books in both digital and print formats.
                Users can also read reviews and ratings from other readers before making a decision.
                These websites also provide a platform for authors to showcase their work and engage with readers.
                BookU are a great place for book enthusiasts to discover new titles, buy books, and connect with other readers and authors.
            </p>

            <div class="cepat-link text-light">
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

</body>

</html>