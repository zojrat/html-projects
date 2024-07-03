<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>

    <!-- CSS & Js -->
    <script src="../node_modules/jquery/dist/jquery.slim.js"></script>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/js/bootstrap.bundle.js">
</head>
<body class="container" >
    <?php include ("navbar.php")?>
    <?php include($childView); ?>
</body>
</html>
