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

    <section class="sec-jumbotron">
        <div class="baris">
            <div class="konten">
                <h3>" today a reader, tomorrow a leader "</h3>
                <p>BookU is a digital platform that provides access to a vast collection of books. These websites allow users to browse through various genres, such as fiction, non-fiction, self-help, and many more. They offer convenient options to purchase or rent books in both digital and print formats. Users can also read reviews and ratings from other readers before making a decision. These websites also provide a platform for authors to showcase their work and engage with readers. BookU are a great place for book enthusiasts to discover new titles, buy books, and connect with other readers and authors.</p>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="detail.php?book=1524798649" class="swiper-slide"><img src="asset/image/book-7.jpg" alt=""></a>
                    <a href="detail.php?book=1338587188" class="swiper-slide"><img src="asset/image/book-8.jpg" alt=""></a>
                    <a href="detail.php?book=1368043631" class="swiper-slide"><img src="asset/image/book-9.jpg" alt=""></a>
                    <a href="detail.php?book=B0BPNB19CL" class="swiper-slide"><img src="asset/image/book-10.jpg" alt=""></a>
                    <a href="detail.php?book=006322593X" class="swiper-slide"><img src="asset/image/book-11.jpg" alt=""></a>
                    <a href="detail.php?book=B09ZNTH869" class="swiper-slide"><img src="asset/image/book-12.jpg" alt=""></a>
                </div><br>
                <img src="asset/image/stand.png" class="stand" alt="">
            </div>
        </div>
    </section>

    <section class="sec-main-books">
        <h1 class="judul"> <span>Best Seller</span> </h1>

        <div class="books-container">

            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6">
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B0090RVGW0">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1352891165l/16149296.jpg" width="150" height="200" alt="On Writing Well: The Classic Guide to Writing Nonfiction" />
                            </a>
                        </div>
                        <a href="detail.php?book=B0090RVGW0">
                            <p>On Writing Well: The...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By William Zinsser </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=1942993161">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1550881448l/25242005.jpg" width="150" height="200" alt="The Complete Chi's Sweet Home, Part 1" />
                            </a>
                        </div>
                        <a href="detail.php?book=1942993161">
                            <p>The Complete Chi's...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Kanata Konami </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=1524798649">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1579089936l/50392746.jpg" width="150" height="200" alt="Daisy Jones & The Six" />
                            </a>
                        </div>
                        <a href="detail.php?book=1524798649">
                            <p>Daisy Jones & The Six</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Taylor Jenkins Reid </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=1616953675">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1658675556l/61677576.jpg" width="150" height="200" alt="Dead Lions (Slough House, #2)" />
                            </a>
                        </div>
                        <a href="detail.php?book=1616953675">
                            <p>Dead Lions (Slough...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Mick Herron </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=1338587188">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1596890589l/52664757.jpg" width="150" height="200" alt="The Vanished (Shuri: A Black Panther Novel #2)" />
                            </a>
                        </div>
                        <a href="detail.php?book=1338587188">
                            <p>The Vanished (Shuri:...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Nic Stone </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=1368043631">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1567084300l/43885679.jpg" width="150" height="200" alt="Frozen 2: Forest of Shadows" />
                            </a>
                        </div>
                        <a href="detail.php?book=1368043631">
                            <p>Frozen 2: Forest of...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Kamilla Benko </p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6">
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=1496731115">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1633494539l/59201362.jpg" width="150" height="200" alt="The Wife Before" />
                            </a>
                        </div>
                        <a href="detail.php?book=1496731115">
                            <p>The Wife Before</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Shanora Williams </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B09Y46SX9G">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1652806307l/60864807.jpg" width="150" height="200" alt="Encore in Death (In Death #56)" />
                            </a>
                        </div>
                        <a href="detail.php?book=B09Y46SX9G">
                            <p>Encore in Death (In...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By J.D. Robb </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B0BB64ZRMW">
                                <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1673217326i/62022434.jpg" width="150" height="200" alt="Things We Hide from the Light (Knockemout, #2)" />
                            </a>
                        </div>
                        <a href="detail.php?book=B0BB64ZRMW">
                            <p>Things We Hide fr...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Lucy Score </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B09W2C9QB1">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1654871790l/60831811.jpg" width="150" height="200" alt="Beautiful Graves" />
                            </a>
                        </div>
                        <a href="detail.php?book=B09W2C9QB1">
                            <p>Beautiful Graves</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By L.J. Shen </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B0BPNB19CL">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1673204569l/68320207.jpg" width="150" height="200" alt="Tress of the Emerald Sea" />
                            </a>
                        </div>
                        <a href="detail.php?book=B0BPNB19CL">
                            <p>Tress of the Eme...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Brandon Sanderson </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B09KLLG3L2">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1659050314l/61049580.jpg" width="150" height="200" alt="Token Black Girl: A Memoir" />
                            </a>
                        </div>
                        <a href="detail.php?book=B09KLLG3L2">
                            <p>Token Black Girl: A...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Danielle Prescod </p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6">
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B09HCV6XHF">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1641847388l/59483381.jpg" width="150" height="200" alt="One Step Too Far (Frankie Elkin, #2)" />
                            </a>
                        </div>
                        <a href="detail.php?book=B09HCV6XHF">
                            <p>One Step Too Far...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Lisa Gardner </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B07FSXPMHY">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1659427539l/61831468.jpg" width="150" height="200" alt="Where the Crawdads Sing" />
                            </a>
                        </div>
                        <a href="detail.php?book=B07FSXPMHY">
                            <p>Where the Crawd...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Delia Owens </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B0BRHNTK29">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1676570232l/122497568.jpg" width="150" height="200" alt="Cease and Desist: A Thrilling Novel of Romantic Suspense (Callahan Security Series Book 6)" />
                            </a>
                        </div>
                        <a href="detail.php?book=B0BRHNTK29">
                            <p>Cease and Desist:...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Lori Matthews </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=1335498362">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1659423177l/59901143.jpg" width="150" height="200" alt="Snowed In at the Ranch / A Kiss on Crimson Ranch" />
                            </a>
                        </div>
                        <a href="detail.php?book=1335498362">
                            <p>Snowed In at the...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By RaeAnne Thayne </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B0925DXNV1">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1622821717l/57972209.jpg" width="150" height="200" alt="Wish You Were Here" />
                            </a>
                        </div>
                        <a href="detail.php?book=B0925DXNV1">
                            <p>Wish You Were Here</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Jodi Picoult </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B08F4ZQTQC">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1619093629l/57818648.jpg" width="150" height="200" alt="The Sweetness of Water" />
                            </a>
                        </div>
                        <a href="detail.php?book=B08F4ZQTQC">
                            <p>The Sweetness of Water</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Nathan Harris </p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6">
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=1501154656">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1587378349l/38532131.jpg" width="150" height="200" alt="Then She Was Gone" />
                            </a>
                        </div>
                        <a href="detail.php?book=1501154656">
                            <p>Then She Was Gone</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Lisa Jewell </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B09G6DMDVR">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1639852585l/57836903.jpg" width="150" height="200" alt="The Quarry Girls" />
                            </a>
                        </div>
                        <a href="detail.php?book=B09G6DMDVR">
                            <p>The Quarry Girls</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Jess Lourey </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=006322593X">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1663708611l/61912314.jpg" width="150" height="200" alt="Faith Still Moves Mountains: Miraculous Stories of the Healing Power of Prayer" />
                            </a>
                        </div>
                        <a href="detail.php?book=006322593X">
                            <p>Faith Still Moves Mount...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Harris Faulkner </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=1501171348">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1628623381l/58744977.jpg" width="150" height="200" alt="The Last Thing He Told Me" />
                            </a>
                        </div>
                        <a href="detail.php?book=1501171348">
                            <p>The Last Thing He...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Laura Dave </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=1982137452">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1607263565l/54304141.jpg" width="150" height="200" alt="In Five Years" />
                            </a>
                        </div>
                        <a href="detail.php?book=1982137452">
                            <p>In Five Years</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Rebecca Serle </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=0815342195">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1370840257l/17350989.jpg" width="150" height="200" alt="The Biology of Cancer" />
                            </a>
                        </div>
                        <a href="detail.php?book=0815342195">
                            <p>The Biology of Cancer</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Robert A. Weinberg </p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6">
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B09X79RTKG">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1660772341l/60775880.jpg" width="150" height="200" alt="Code Name Sapphire" />
                            </a>
                        </div>
                        <a href="detail.php?book=B09X79RTKG">
                            <p>Code Name Sapphire</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Pam Jenoff </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B08NFT8N8F">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1621199762l/58061810.jpg" width="150" height="200" alt="The Paper Palace" />
                            </a>
                        </div>
                        <a href="detail.php?book=B08NFT8N8F">
                            <p>The Paper Palace</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Miranda Cowley Heller </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B07SNRF2N3">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1640019560l/59878601.jpg" width="150" height="200" alt="The Authenticity Project" />
                            </a>
                        </div>
                        <a href="detail.php?book=B07SNRF2N3">
                            <p>The Authenticity Project</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Clare Pooley </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B07DBRBP7G">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1549433350l/40672036.jpg" width="150" height="200" alt="Digital Minimalism: Choosing a Focused Life in a Noisy World" />
                            </a>
                        </div>
                        <a href="detail.php?book=B07DBRBP7G">
                            <p>Digital Minimalism: Choos...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Cal Newport </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B010ZXKCAO">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1525116879l/40004706.jpg" width="150" height="200" alt="Evicted: Poverty and Profit in the American City" />
                            </a>
                        </div>
                        <a href="detail.php?book=B010ZXKCAO">
                            <p>Evicted: Poverty and Prof...</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Matthew Desmond </p>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="components">
                        <div class="img mb-3">
                            <a href="detail.php?book=B09ZNTH869">
                                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1658300458l/59416200.jpg" width="150" height="200" alt="This Time It's Real" />
                            </a>
                        </div>
                        <a href="detail.php?book=B09ZNTH869">
                            <p>This Time It's Real</p>
                        </a>
                        <p class="text-secondary" style="margin-top: -10px;"> By Ann Liang </p>
                    </div>
                </div>
            </div>

        </div>

    </section>

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