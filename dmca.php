<?php include('info.php'); ?>
<!DOCTYPE>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DMCA | BookU</title>

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

  <br>
  <h1 class="text-center"><abbr title="Digital Millennium Copyright Act">DMCA</abbr> Policy - <?php echo $webname; ?></h1>
  <br>
  <div class="container">
    <p><?php echo $webname; ?> is in compliance with 17 U.S.C. § 512 and the Digital Millennium Copyright Act
      ("DMCA"). It is our policy to respond to any infringement notices and take
      appropriate actions under the Digital Millennium Copyright Act ("DMCA") and
      other applicable intellectual property laws.</p>
    <br><br>

    <p>If your copyrighted material has been posted on <?php echo $webname; ?> or if links to your copyrighted material
      are returned through our search engine and you want this material removed, you
      must provide a written communication that details the information listed in the
      following section. Please be aware that you will be liable for damages
      (including costs and attorneys' fees) if you misrepresent information listed on
      our site that is infringing on your copyrights. We suggest that you first
      contact an attorney for legal assistance on this matter.</p>
    <br><br>

    <p>The following elements must be included in your copyright infringement claim: </p>
    <ul>
      <li>
        <p>Provide evidence of the authorized person to act on behalf of the owner of
          an exclusive right that is allegedly infringed.</p>
      </li>
      <li>
        <p>Provide sufficient contact information so that we may contact you. You
          must also include a valid email address.</p>
      </li>
      <li>
        <p>You must identify in sufficient detail the copyrighted work claimed to
          have been infringed and including at least one search term under which the
          material appears in <?php echo $webname; ?>' search results.</p>
      </li>
      <li>
        <p>A statement that the complaining party has a good faith belief that use of
          the material in the manner complained of is not authorized by the copyright
          owner, its agent, or the law.</p>
      </li>
      <li>
        <p>A statement that the information in the notification is accurate, and
          under penalty of perjury, that the complaining party is authorized to act on
          behalf of the owner of an exclusive right that is allegedly infringed.</p>
      </li>
      <li>
        <p>Must be signed by the authorized person to act on behalf of the owner of
          an exclusive right that is allegedly being infringed.</p>
      </li>
    </ul>
    <p>
      <br>
    <p>Send the written infringement notice to the following address and an email notifcation to <?php echo $emailDMCA; ?></p>
    <br><br>
    <p>Note: Post mail is not accepted, send email instead. Don't send PDF or Scanned PDF, we filtered all attachments.</p>
    <br><br>
    <strong>Please allow 1-2
      business days for an email response. Note that emailing your complaint to other
      parties such as our Internet Service Provider will not expedite your request and
      may result in a delayed response due the complaint not properly being
      filed.</strong>
    <br><br><br><br>
  </div>

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