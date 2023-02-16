<?php

include('info.php');

if (!empty($_GET['book'])) {
	$asin = $_GET['book'];
	include('gambar.php');
	include('affiliate.php');
?>

	<!DOCTYPE html>
	<html lang='EN'>

	<head>
		<meta name="robots" content="noindex,nofollow">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php echo str_replace("-", " ", $title); ?> book review, free download">
		<meta http-equiv="language" content="EN">
		<meta property="og:title" content="<?php echo str_replace("-", " ", $title); ?>">
		<meta property="og:description" content="book review title <?php echo $title; ?>">
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="120">
		<meta property="og:image:height" content="120">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Reading : <?php echo $title; ?> | <?php echo $webname; ?></title>
		<!-- google lang -->
		<!-- Bootstrap -->
		<link href="./source/bootstrap.min.css" rel="stylesheet">
		<link href="./source/flag-icon.min.css" rel="stylesheet">
		<link href="./source/font-awesome.min.css" rel="stylesheet">
		<link href="./source/style.css" rel="stylesheet">
		<link href="./source/fbfeed.css" rel="stylesheet">
		<script src="./js/sg1a.js"></script>
		<script src="https://kit.fontawesome.com/680ecce84d.js" crossorigin="anonymous"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
      <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->

		<!--<meta http-equiv='refresh' content='57; url=#'>-->

	</head>

	<body>

		<div id='body'>
			<div class='container'>
				<div id='scroll'>

					<div class="col-md-offset-2 col-md-8">
						<div class="panel">
							<div class="panel-header">
								<b><?php echo str_replace("-", " ", $title); ?></b>
							</div>
							<div id="input">
								<div class="panel-body" id="description">
									<div class="row">

										<div class="col-md-4">
											<div class="text-xs-right">
												<div class="desktop"><a onclick="downloadpdf()" href='#'><img class="img-center center-block  img-rounded center  img-thumbnail" src="<?php echo $gambarx ?>"></a></div>
												<div class="mobile"><a onclick="downloadpdf()" href='#'><img class="img-center center-block  img-rounded center  img-thumbnail" src="<?php echo $gambarx ?>"></a></div>
											</div>
										</div>
										<div class="col-md-8">
											<table boreder='0'>
												<tr>
													<p>Get All Books,Various Categories, Like Bussines, Education, Self-Help, CookBook, Reference, Politics & Social Sciences ,And Many More For Your Your Reading Material.</p>
													<td><i class="fas fa-user-circle"></i> <b>Author</b> : <?php echo $author; ?><br><i class="fas fa-save"></i> <b>Size:</b> <?php echo rand(10, 20); ?>.<?php echo rand(1, 9); ?> MB<br></td>
												</tr>
												<tr>
													<td>
														<p>
															<i class="fas fa-book-reader"></i> <b>Type :</b> Pdf, EPub, Mobi
														</p>
														<!--<i class="fas fa-file-pdf"></i>-->
														<!--<i class="fas fa-book"></i>-->
													</td>
												</tr>
												<tr>
													<td><i class="fas fa-upload"></i> <b>Uploaded :</b>
														<?php
														$a = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
														echo date("Y");
														echo " ";
														echo $a[rand(0, date("n"))];
														echo " ";
														echo rand(1, 29); ?>
													</td>
												</tr>
											</table>

											<p>
												<i class="fas fa-sync"></i> <b>Status: </b>Available <i class="fa-solid fa-circle-check"></i> | <small>Last checked: <?php echo rand(1, 10); ?> Hour ago!</small>
											</p>
											<p style="font-size: 20px;">
												<span class="label label-success">
													<i class="fas fa-medal"></i> Bestseller <script>
														document.write(new Date().getFullYear())
													</script>
												</span>
											</p>

											<div class="desktop">
												<!--<a onclick="downloadpdf()" href='#' rel='nofollow'><img src='/images/bottot.png'/ style="width: 300px; height: 200px; margin-top: -50px; margin-left: -30px;"></a>-->
												<a onclick="downloadpdf1()" href='#' rel='nofollow' class="btn btn-success text-light"><i class="fa-solid fa-download"></i> Download</a>
												<a onclick="downloadpdf2()" href='#' rel='nofollow' class="btn btn-success text-light"><i class="fa-brands fa-readme"></i> Read Online</a>
											</div>
											<div class="mobile">
												<!--<a onclick="downloadpdf()" href='#' rel='nofollow'><img src='/images/bottot.png'/ style="width: 300px; height: 200px; margin-top: -50px; margin-left: -30px;"></a>-->
												<a onclick="downloadpdf1()" href='#' rel='nofollow' class="btn btn-success text-light"><i class="fa-solid fa-download"></i> Download</a>
												<a onclick="downloadpdf2()" href='#' rel='nofollow' class="btn btn-success text-light"><i class="fa-brands fa-readme"></i> Read Online</a>
											</div>
										</div>
									</div>
								</div>

								<div class='panel-footer'>
									<div class="row">
										<div class="col-md-12">
											<div class="list-group">
												<a onclick="downloadpdf()" href="#" class="list-group-item list-group-item-success" rel="nofollow"><b><span class="glyphicon glyphicon-ok"></span> Register a free 1 month Trial Account.</b></a>
												<a onclick="downloadpdf()" href="#" class="list-group-item list-group-item-info" rel="nofollow"><b><span class="glyphicon glyphicon-ok"></span> Download as many books as you like (Personal use)</b></a>
												<a onclick="downloadpdf()" href="#" class="list-group-item list-group-item-warning" rel="nofollow"><b><span class="glyphicon glyphicon-ok"></span> Cancel the membership at any time if not satisfied.</b></a>
												<a onclick="downloadpdf()" href="#" class="list-group-item list-group-item-danger" rel="nofollow"><b><span class="glyphicon glyphicon-ok"></span> Join Over 80000 Happy Readers</b></a>
											</div>
										</div>
									</div>


									<b>Book Descriptions:</b>
									<p><?php echo $desc ?></p>
									<br><br>
									<div align='center'><img src='./source/reward.png' width='50%'></div>

									<center><a href='./'>Home</a> | <a href='./contact.php' target='_blank'>Contact</a> | <a href='./dmca.php' target='_blank'>DMCA</a> | <a href='./disclaimer.php' target='_blank'>Disclaimer</a></center>
									</p>
								</div>
							</div>
							<div class='panel-body' id='console' style='display: none;'>
								<code class='command'></code>
							</div>

							<div class='panel-footer'>

							</div>
						</div>
					</div>
				</div>
				<div class='col-md-offset-2 col-md-8'>
				</div>
				<div>
				</div>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
				<script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
				<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
				<script src='//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js'></script>
				<script type="text/javascript">
					function downloadpdf1() {
						location.href = '<?php echo $linksatu; ?>';
					}

					function downloadpdf2() {
						location.href = '<?php echo $linkdua; ?>';
					}
				</script>


				<!-- Histats.com  START  (aync)-->
				<script type="text/javascript">
					var _Hasync = _Hasync || [];
					_Hasync.push(['Histats.start', '1,4708929,4,0,0,0,00010000']);
					_Hasync.push(['Histats.fasi', '1']);
					_Hasync.push(['Histats.track_hits', '']);
					(function() {
						var hs = document.createElement('script');
						hs.type = 'text/javascript';
						hs.async = true;
						hs.src = ('//s10.histats.com/js15_as.js');
						(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
					})();
				</script>
				<noscript><a href="/" target="_blank"><img src="//sstatic1.histats.com/0.gif?4708929&101" alt="web log free" border="0"></a></noscript>
				<!-- Histats.com  END  -->

				<!-- Histats.com  START  (aync)-->
				<script type="text/javascript">
					var _Hasync = _Hasync || [];
					_Hasync.push(['Histats.start', '1,4624175,4,0,0,0,00010000']);
					_Hasync.push(['Histats.fasi', '1']);
					_Hasync.push(['Histats.track_hits', '']);
					(function() {
						var hs = document.createElement('script');
						hs.type = 'text/javascript';
						hs.async = true;
						hs.src = ('//s10.histats.com/js15_as.js');
						(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
					})();
				</script>
				<noscript><a href="/" target="_blank"><img src="//sstatic1.histats.com/0.gif?4624175&101" alt="counter create hit" border="0"></a></noscript>
				<!-- Histats.com  END  -->




	</body>

	</html>
<?php
} else {

?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<title>Ebook References</title>
		<meta http-equiv="content-language" content="en-us" />
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="author" content="Sadhana Ganapathiraju" />
		<meta name="description" content="Ebook Stock." />
		<meta name="keywords" content="ebook" />
		<link rel="stylesheet" type="text/css" media="screen,projection" href="master.css" />
		<!--[if lt ie 7]><link rel="stylesheet" type="text/css" media="screen,projection" href="ie-win.css" /><![endif]-->
		<link rel="start" title="SimplyGold" href="#" />
		<style type="text/css">
			<!--
			.style1 {
				font-size: 16px;
				font-weight: bold;
			}

			.style2 {
				font-size: 16px
			}
			-->
		</style>
	</head>

	<body>
		<div id="header">
			<h1 class="style1"><a href="#00" class="style2"><?php echo $webname; ?></a></h1>
		</div>
		<div id="navigation">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="dmca.php">DMCA</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div id="content-wrapper">
			<div id="content">
				<p><a href="./?book=1848724160" class="drop-shadow"><img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1415588528l/23375368.jpg" width="100" height="150" alt="Cognitive Psychology: A Student's Handbook" class="captionated" /></a></p>
				<p><a href="./?book=0060957514" class="drop-shadow"><img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1412531100l/9423971.jpg" width="100" height="150" alt="From Third World to First: Singapore and the Asian Economic Boom" class="captionated" /></a></p>
				<p><a href="./?book=1454926406" class="drop-shadow"><img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1502155267l/34525372.jpg" width="100" height="150" alt="Wild Magic: The Wildwood Tarot Workbook" class="captionated" /></a></p>
				<p><a href="./?book=1439187681" class="drop-shadow"><img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1344401762l/13259835.jpg" width="100" height="150" alt="Fairy Tale Interrupted: A Memoir of Life, Love, and Loss" class="captionated" /></a></p>
				<hr />
				<p><a href="./?book=1442457546" class="drop-shadow"><img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1407137873l/18051071.jpg" width="100" height="150" alt="Spy Camp" class="captionated" /></a></p>
				<p><a href="./?book=1401290914" class="drop-shadow"><img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1547842156l/40996677.jpg" width="100" height="150" alt="Blackest Night Saga (DC Essential Edition)" class="captionated" /></a></p>
				<p><a href="./?book=1481479202" class="drop-shadow"><img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1469968622l/28953846.jpg" width="100" height="150" alt="Tales from a Not So Friendly Frenemy (Dork Diaries, #11)" class="captionated" /></a></p>
				<p><a href="./?book=1932907203" class="drop-shadow"><img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1395617252l/238183.jpg" width="100" height="150" alt="Selling Your Story in 60 Seconds: The Guaranteed Way to Get Your Screenplay or Novel Read" class="captionated" /></a></p>
				<hr />
			</div>
		</div>
		<div id="footer">
			<div id="meta">
				<div class="recent">
					<h3>Recently Reviewed</h3>
					<ul>
						<li><a href="./?book=0996644709">Receiver of Many (Hades & Persephone, #1)</a></li>
						<li><a href="./?book=0473318490">Genius Intelligence</a></li>
						<li><a href="./?book=1449462278">Big Nate: Thunka, Thunka, Thunka</a></li>
						<li><a href="./?book=1582401578">Soul Saga Collected Edition 1 (Chapters 1 + 2)</a></li>
						<li><a href="./?book=1999415108">Catcher (Catcher #1)</a></li>
						<li><a href="./?book=1585425109">The Lost Keys of Freemasonry</a></li>
						<li><a href="./?book=1503941647">The Billionaire Takes All (The Sinclairs #5)</a></li>
						<li><a href="./?book=1608106403">212 the Extra Degree: One Degree Can Change Everything</a></li>
						<li><a href="./?book=B07YD2Y6P6">The Year 1000: When Explorers Connected the World – and Globalization Began</a></li>
						<li><a href="./?book=1683960556">Walt Disney's Mickey Mouse "The Mysterious Dr. X": Volume 12</a></li>
						<li><a href="./?book=0917839005">Sharing Recovery Through Gamblers Anonymous</a></li>
						<li><a href="./?book=0316556122">Death March to the Parallel World Rhapsody, Vol. 6 (light novel)</a></li>
						<li><a href="./?book=841685114X">Fashion Patternmaking Techniques for Children</a></li>
						<li><a href="./?book=8498959748">La soledad de un cuerpo acostumbrado a la herida</a></li>
						<li><a href="./?book=1416960600">Living Dead Girl</a></li>
						<li><a href="./?book=1580175848">The One Minute Organizer Plain Simple: 500 Tips for Getting Your Life in Order</a></li>
						<li><a href="./?book=B07Z6JLW7Y">Knocked Up by the CEO (Knocked Up, #1)</a></li>
						<li><a href="./?book=030747089X">Pokemon Ranger: Guardian Signs: Prima Official Game Guide</a></li>
						<li><a href="./?book=1250193192">Cured: The Life Changing Science of Spontaneous Healing</a></li>
						<li><a href="./?book=1101919965">Cracking the AP Physics 2 Exam, 2017 Edition</a></li>
					</ul>
				</div>
				<div class="upcoming">
					<h3>To Be Read Still</h3>
					<ul>
						<li><a href="./?book=1501138383">Halo: Silent Storm: A Master Chief Story</a></li>
						<li><a href="./?book=0307742806">I Remember Nothing and Other Reflections</a></li>
						<li><a href="./?book=1250232635">Petals to the Metal (The Adventure Zone Graphic Novels, #3)</a></li>
						<li><a href="./?book=0375420185">The Heart of a Woman</a></li>
						<li><a href="./?book=0310606330">Changes That Heal: Workbook</a></li>
						<li><a href="./?book=1524761389">To Shake the Sleeping Self: A Journey from Oregon to Patagonia, and a Quest for a Life with No Regret</a></li>
						<li><a href="./?book=0008150265">The Times Complete History of the World</a></li>
						<li><a href="./?book=1599322706">Lies Salon Owners Believe: And the Truth That Sets them Free</a></li>
						<li><a href="./?book=B07YVLRTLK">Teach Me (Romey University #1)</a></li>
						<li><a href="./?book=0415821312">The Filmmaker's Eye: The Language of the Lens: The Power of Lenses and the Expressive Cinematic Image</a></li>
						<li><a href="./?book=0679439617">The Sorrow of War: A Novel Of North Vietnam</a></li>
						<li><a href="./?book=1133311296">Steps to Writing Well with Additional Readings</a></li>
						<li><a href="./?book=1493212486">SAP Fiori Implementation and Development</a></li>
						<li><a href="./?book=1782211411">Stitched Shibori: Technique, innovation, pattern, design</a></li>
						<li><a href="./?book=1645052923">How Heavy Are the Dumbbells You Lift? Vol. 1</a></li>
						<li><a href="./?book=0143019457">Ka Whawhai Tonu Matou: Struggle Without End</a></li>
						<li><a href="./?book=0553537326">A Totally Awkward Love Story</a></li>
						<li><a href="./?book=063400638X">Melody in Songwriting Tools and Techniques for Writing Hit Songs</a></li>
						<li><a href="./?book=0634053493">Hairspray Vocal Collection: Piano, Vocal, Guitar</a></li>
						<li><a href="./?book=1250115213">The Inquisition (Summoner, #2)</a></li>
					</ul>
				</div>
				<div class="authors">
					<h3>Favorite Authors Books</h3>
					<ul>
						<li><a href="./?book=0963818368">Open Me Carefully: Emily Dickinson's Intimate Letters to Susan Huntington Dickinson</a></li>
						<li><a href="./?book=149192361X">Tragic Design: The True Impact of Bad Design and How to Fix It</a></li>
						<li><a href="./?book=1892051206">Guinness World Records 2004</a></li>
						<li><a href="./?book=0134545117">Adobe Photoshop CC Book for Digital Photographers, the (2017 Release)</a></li>
						<li><a href="./?book=0240807790">The Visual Story: Creating the Visual Structure of Film, TV and Digital Media</a></li>
						<li><a href="./?book=0199348014">Engineering Your Future: A Comprehensive Introduction to Engineering</a></li>
						<li><a href="./?book=0312275668">Intimacy: Trusting Oneself and the Other</a></li>
						<li><a href="./?book=0942961536">Rethinking Multicultural Education: Teaching for Racial and Cultural Justice</a></li>
						<li><a href="./?book=0312311303">A Life's Work: On Becoming a Mother</a></li>
						<li><a href="./?book=0929385225">Behold a Pale Horse</a></li>
						<li><a href="./?book=1419741489">Steven Universe: The Tale of Steven</a></li>
						<li><a href="./?book=1780673353">Read This If You Want to Take Great Photographs</a></li>
						<li><a href="./?book=147899357X">The College Girl's Survival Guide: Maximize Your Student Experience with Good Sense, Grace, and Faith in God</a></li>
						<li><a href="./?book=1708735178">Fast & Hard (The Fast Series #1)</a></li>
						<li><a href="./?book=1285077067">Writing with Style: APA Style Made Easy</a></li>
					</ul>
				</div>
				<hr />
			</div>

			<div id="copyright" align="center">
				<p><strong>Copyright Disclaimer:This site does not store any files on its server. We only index and link to content provided by other sites. Please contact the content providers to delete copyright contents if any and email us, we'll remove relevant links or contents immediately.</strong></p></br>
				<p>Design copyright &copy; 2015 <a href="./" title="SimplyGold"><?php echo $webname; ?>x</a></p>
			</div>
		</div>
	</body>

	</html>

<?php

}
?>