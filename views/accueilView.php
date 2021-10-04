<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/styleAccueil.css">
    <title>Anime'alerie Accueil</title>
</head>
<body>

<!--header-->

<?php include "template/headerTitle.php"; ?>

    <!--carousel-->
<?php include "template/carouselleAccueil.php"; ?>
    <!-- bar de menu-->
<?php include 'template/headerMenu.php'; ?>
<!-- fin premier container -->


<!-- filtre a gauche -->
<?php include 'template/leftFilter.php'; ?>
        <!-- fin colonne filtre / debut colonne produit -->
<?php include 'template/rightProduct.php'; ?>
<!-- fin section produit -->

<!-- about the compagnie -->
<?php include 'template/footer.php'; ?>



<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
