<?php

require 'models/ProductsModel.php';

$aProducts = array(
    0 => new Product(0,'croquette','royal','des croquettes pour chien','../assets/image/animals/Dogs/nourriture/Sanstitre.png',15,5.5,true,2,5),
    1 => new Product(1,'nicheSon','homies','niche de la taille d\'une maison pour gros chien','../assets/image/animals/Dogs/niches/sanstitre.png',15000,20,true,5,2),
    2 => new Product(2,'tshirt Peroquet','braziltop','en coton remforcé pour un peroquet costaud','../assets/image/animals/Dogs/nourriture/Sanstitre3.png',25,20,true,4,6),
    3 => new Product(3,'os en mousse','homies','un os destiné au chiwawa fragile','../assets/image/animals/Dogs/jouets/os.jpg',10.5,20,true,2,6),
);

//$template = 'views/productView.php';
require 'views/productView.php';
