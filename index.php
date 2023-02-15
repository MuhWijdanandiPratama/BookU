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
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo str_replace("-"," ",$title); ?> book review, free download">
    <meta http-equiv="language" content="EN">
    <meta property="og:title" content="<?php echo str_replace("-"," ",$title); ?>">
    <meta property="og:description" content="book review title <?php echo $title; ?>">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="120">
    <meta property="og:image:height" content="120">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Reading : <?php echo $title; ?> | <?php echo $webname; ?></title>
    <!-- google lang -->
        <!-- Bootstrap -->
    <!-- <link href="./source/bootstrap.min.css" rel="stylesheet">
    <link href="./source/flag-icon.min.css" rel="stylesheet">
    <link href="./source/font-awesome.min.css" rel="stylesheet">
    <link href="./source/style.css" rel="stylesheet">
    <link href="./source/fbfeed.css" rel="stylesheet">
    <script src="./js/sg1a.js"></script>
    <script src="https://kit.fontawesome.com/680ecce84d.js" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
    <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->

    <!--<meta http-equiv='refresh' content='57; url=#'>-->
</head>
<body>
    <h1>Hello World!!</h1>
    <script src="vendor/js/bootstrap.min.js"></script>
</body>
</html>