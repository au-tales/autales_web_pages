<?php $login = true; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="">
    <meta name="description" content="">

    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>Home</title>

    <!-- Place your font stylesheet here-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/outer/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/outer/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="assets/css/outer/animate.css">

    <!-- Place your stylesheet here-->

    <?php if ($login) ?>
    <link rel="stylesheet" type="text/css" href="assets/css/registration.css?<?php echo time() ?>">
    <?php ?>

    <link rel="stylesheet" type="text/css" href="assets/css/style.css?<?php echo time() ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js does not work if you view the page via file -->

    <!--[if lte IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.0/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>

