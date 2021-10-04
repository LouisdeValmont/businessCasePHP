<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleAccueil.css">
    <title>Anime'alerie Accueil</title>
</head>
<body>

<!--header-->

<div class="container-fluid ps-0 pe-0">
    <div class="row mt-3 d-flex justify-content-center py-2">

        <div class="col-lg-6 col-md-8 fs-lg-3 offset-md-1 d-flex d-inline-block justify-content-center
        align-items-center"><img class="image-logo d-none d-md-block" src="../assets/image/logo/logo-fond-in.png">
            <p
                id="titre-animalerie" class="text-size">NIMES'ALERIE</p></div>
        <div class="col-1 col-md-1 w-lg-100 w-md-70 d-flex  d-none d-md-block justify-content-center align-items-center">
            <a href="#" class="iconify" data-inline="false" data-icon="codicon:account"
               style="color: #000000; font-size: 65px;"></a></div>
        <div class="col-2 col-md-2 w-lg-100 w-md-70 d-flex d-none d-md-block justify-content-start align-items-center">
            <a href="#" class="iconify" data-inline="false" data-icon="simple-line-icons:basket"
               style="font-size: 65px;"></a></div>
    </div>

    <!--carousel-->
    <div class="row ">
        <div class="col d-flex justify-content-center ">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="layer1">
                            <img src="../assets/image/space/pexels-rafael-cerqueira-4737522.jpg" class="d-block w-100
                             img-fluid main-image" alt="...">
                        </div>
                        <!-- <div class="layer2">
                    <img src="image/space/cat-space.png" class="d-block w-100 img-fluid" alt="...">
                        </div> -->
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Histoire de changer d'air</h5>
                            <p>ENVOYER VOTRE ANIMAL DE COMPAGNIE VERS l'infini et au delà !!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="layer1">
                            <img src="../assets/image/others/grass.jpg" class="d-block w-100 img-fluid main-image"
                                 alt="...">
                        </div>

                        <!-- <div class="layer2">
                    <img src="image/others/cat-and-dog.png" class="d-block w-80 img-fluid second-image" alt="...">
                        </div> -->
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Event du Mois</h5>
                            <p>PIQUE-NIQUE TOUT LES 15 DU MOIS ! CLIQUER ICI POUR PLUS D’INFORMATION</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/image/space/nebula1024.jpg" class="d-block w-100 img-fluid main-image"
                             alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- bar de menu-->
    <div class="row py-3 ps-4 d-flex justify-content-center align-items-center">
        <!--<button class="col-2 fond-bleu btn-3 d-none d-md-block d-flex justify-content-center"><span class="bar-menu-fs">NEWS</span></button>-->
        <button class="col-2 fond-bleu d-none d-md-block d-flex justify-content-center"><a href="#"><h4
                    class="bar-menu-fs">NEWS</h4></a></button>
        <button class="col-2 fond-bleu d-none d-md-block d-flex justify-content-start"><a href="#"><h4
                    class="bar-menu-fs">MARQUES</h4></a></button>
        <button class="col-2 fond-bleu d-none d-md-block d-flex justify-content-start"><a href="#"><h4
                    class="bar-menu-fs">NOUVEAUTÉES</h4></a></button>
        <button class="col-2 fond-bleu d-none d-md-block d-flex justify-content-start"><a href="#"><h4
                    class="bar-menu-fs">CONTACT</h4></a></button>
    </div>

    <!-- header acceuil pour mobile -->

    <div id="bottom-bar" class="d-md-none fixed-bottom border-top bg-white">
        <div class="row mx-2 my-2">
            <div class="col">
                <img class="logo-format-mobil" width="30" height="30" fill="currentColor"
                     src="../assets/image/logo/logo-fond-in.png" alt="logo">
                <rect>
                    <title>NIMES'ALERIE</title>
                </rect>
            </div>
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                     class="bi bi-house-door " viewBox="0 0 16 16">
                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                    <rect>
                        <title>Home</title>
                    </rect>
                </svg>
            </div>
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-sliders"
                     viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                    <rect>
                        <title>Fitlers</title>
                    </rect>
                </svg>
            </div>
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                     class="bi bi-newspaper" viewBox="0 0 16 16">
                    <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                    <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                    <rect>
                        <title>News</title>
                    </rect>
                </svg>
            </div>
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person"
                     viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    <rect>
                        <title>Profil</title>
                    </rect>
                </svg>
            </div>
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart3"
                     viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    <rect>
                        <title>Panier</title>
                    </rect>
                </svg>
            </div>
        </div>
    </div>
</div>
<!-- fin premier container -->


<!-- filtre a gauche -->
<section class="container-fluid">
    <div class="row filtre-gauche  ">
        <div class="col-2 section-filtre arrondi-top d-flex d-none d-md-block">
            <h5 class="m-0 ps-2 filtre-g-fs-title">Chien</h5>
            <div>
                <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                    <label for="chien-n">Nourritures</label>
                    <input type="checkbox" id="chien-n">
                </div>
                <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                    <label for="chien-n">Niches</label>
                    <input type="checkbox" id="chien-n">
                </div>
                <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                    <label for="chien-a">Accesoires</label>
                    <input type="checkbox" id="chien-a">
                </div>
                <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                    <label for="chien-j">Jouets</label>
                    <input type="checkbox" id="chien-j">
                </div>
            </div>

            <div class="section-filtre">
                <h5 class="m-0 ps-2 filtre-g-fs-title">Chat</h5>
                <div>
                    <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                        <label for="chat-n">Nourritures</label>
                        <input type="checkbox" id="chat-n">
                    </div>
                    <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                        <label for="chat-c">Coussins</label>
                        <input type="checkbox" id="chat-c">
                    </div>
                    <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                        <label for="chat-a">Accesoires</label>
                        <input type="checkbox" id="chat-a">
                    </div>
                    <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                        <label for="chat-j">Jouets</label>
                        <input type="checkbox" id="chat-j">
                    </div>
                </div>
            </div>
            <div class="section-filtre">
                <h5 class="m-0 ps-2 filtre-g-fs-title">Oiseau</h5>
                <div>
                    <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                        <label for="oiseau-n">Nourritures</label>
                        <input type="checkbox" id="oiseau-n">
                    </div>
                    <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                        <label for="oiseau-h">habitats</label>
                        <input type="checkbox" id="oiseau-h">
                    </div>
                    <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                        <label for="oiseau-a">Accesoires</label>
                        <input type="checkbox" id="oiseau-a">
                    </div>
                    <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                        <label for="oiseau-j">Jouets</label>
                        <input type="checkbox" id="oiseau-j">
                    </div>
                </div>
            </div>
            <div class="section-filtre">
                <h5 class="m-0 ps-2 filtre-g-fs-title">Rongeur</h5>
                <div>
                    <div>
                        <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                            <label for="rongeur-n">Nourritures</label>
                            <input type="checkbox" id="rongeur-n">
                        </div>
                        <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                            <label for="rongeur-h">habitats</label>
                            <input type="checkbox" id="rongeur-h">
                        </div>
                        <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                            <label for="rongeur-a">Accesoires</label>
                            <input type="checkbox" id="rongeur-a">
                        </div>
                        <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                            <label for="rongeur-j">Jouets</label>
                            <input type="checkbox" id="rongeur-j">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-filtre arrondi-bottom">
                <h5 class="m-0 ps-2 filtre-g-fs-title">Autre</h5>
                <div>
                    <div class="d-flex justify-content-between align-items-center filtre-g-fs">
                        <label for="nouveaute">Nouveautées</label>
                        <input type="checkbox" id="nouveaute">
                    </div>
                    <div class="dropdown my-2">
                        <button class="btn d-flex justify-content-between align-items-center btn-secondary dropdown-toggle filtre-marques"
                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Marques
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item d-flex justify-content-between align-items-center">flute <input
                                        type="checkbox"></a></li>
                            <li><a class="dropdown-item d-flex justify-content-between align-items-center">prout <input
                                        type="checkbox"></a></li>
                            <li><a class="dropdown-item d-flex justify-content-between align-items-center">crotte <input
                                        type="checkbox"></a></li>
                        </ul>
                    </div>
                    <div>
                        <button class="btn d-flex justify-content-between align-items-center btn-secondary">Rechercher
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin colonne filtre / debut colonne produit -->
        <div class="col-9 d-flex flex-column align-items-center prductShowCast">
            <h2 class="section-header">NOUVEAUTÉES</h2>
            <section class="container content-section d-flex justify-content-center">
                <div class="shop-items">
                    <div class="shop-item">
                        <span class="shop-item-title">Advance</span>
                        <img class="shop-item-image" src="../assets/image/animals/Dogs/nourriture/Sanstitre.png">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$12.99</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="shop-item">
                        <span class="shop-item-title">Pro Plan</span>
                        <img class="shop-item-image" src="../assets/image/animals/Dogs/nourriture/Sanstitre3.png">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$14.99</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="shop-item">
                        <span class="shop-item-title">Pro Plan</span>
                        <img class="shop-item-image" src="../assets/image/animals/Dogs/nourriture/Sanstitre2.png">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$19.99</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="shop-item">
                        <span class="shop-item-title">Pro Plan</span>
                        <img class="shop-item-image" src="../assets/image/animals/Dogs/nourriture/Sanstitre4.png">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$19.99</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="shop-item">
                        <span class="shop-item-title">Pro Plan</span>
                        <img class="shop-item-image" src="../assets/image/animals/Dogs/nourriture/Sanstitre4.png">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$19.99</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="shop-item">
                        <span class="shop-item-title">Pro Plan</span>
                        <img class="shop-item-image" src="../assets/image/animals/Dogs/nourriture/Sanstitre4.png">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$19.99</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="shop-item">
                        <span class="shop-item-title">Pro Plan</span>
                        <img class="shop-item-image" src="../assets/image/animals/Dogs/nourriture/Sanstitre4.png">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$19.99</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="shop-item">
                        <span class="shop-item-title">Pro Plan</span>
                        <img class="shop-item-image" src="../assets/image/animals/Dogs/nourriture/Sanstitre4.png">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$19.99</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
            </section>
            <h2 class="align-items-center section-header">CHOIX DU PUBLIC</h2>
            <section class="container content-section  d-flex justify-content-center">
                <div class="shop-items">
                    <div class="shop-item">
                        <span class="shop-item-title">Niche1</span>
                        <img class="shop-item-image" src="../assets/image/animals/Dogs/niches/Sanstitre.png">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$79.99</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="shop-item">
                        <span class="shop-item-title">Niche2</span>
                        <img class="shop-item-image" src="../assets/image/animals/Dogs/niches/Sanstitre2.png">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$69.99</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<!-- fin section produit -->

<!-- about the compagnie -->
<footer></footer>
<div class="row aboutUs position-relative">
    <div class="col-3  d-none d-md-block"></div>
    <div class=" col-md-8 col-lg-6">
        <div class="layer1  d-none d-md-block">
            <img src="../assets/image/others/kisscar.png" alt="car">
        </div>
        <div class="layer2 position-absolute aboutUsText d-none d-md-block">
            <h5>About us</h5>
            <span>Qu’il ait des nageoires, des sabots, des ailes ou des pattes, rien ne nous tient plus à cœur que de répondre aux
         besoins de votre animal. Et puisque nous savons par expérience à quel point la recherche de la bonne nourriture et
          des bons accessoires et jouets peut être éprouvante, nous livrons tout ce dont votre animal a besoin directement chez vous.
           Qu'il s'agisse de sacs de nourriture, de litière ou de foin, ou encore d’aquariums,
           nous mettons tout en œuvre pour vous apporter la meilleure livraison possible. Vous évitez ainsi de transporter vos courses lourdes et encombrantes
         du supermarché jusqu’à chez vous et pendant ce temps, vous pouvez prendre soin de votre animal.</span>
        </div>
    </div>
</div>
<div class="row aboutUs smallAboutUs mb-4">
    <div class=" col-12">
        <div class="aboutUsTextSmall d-md-none d-sm-block">
            <h5>About us</h5>
            <span>Qu’il ait des nageoires, des sabots, des ailes ou des pattes, rien ne nous tient plus à cœur que de répondre aux
         besoins de votre animal. Et puisque nous savons par expérience à quel point la recherche de la bonne nourriture et
          des bons accessoires et jouets peut être éprouvante, nous livrons tout ce dont votre animal a besoin directement chez vous.
           Qu'il s'agisse de sacs de nourriture, de litière ou de foin, ou encore d’aquariums,
           nous mettons tout en œuvre pour vous apporter la meilleure livraison possible. Vous évitez ainsi de transporter vos courses lourdes et encombrantes
         du supermarché jusqu’à chez vous et pendant ce temps, vous pouvez prendre soin de votre animal.</span>
        </div>
    </div>
</div>


<!-- start footer -->
<!-- <footer> -->
<div class="row mb-2">
    <div class="col-sm-none col-md-none col-lg-4"></div>
    <div class="col-sm-4 col-md-3 col-lg-1">
        <a class="footerCondition" href="#">Frais et délais de livraison</a>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-1">
        <a class="footerCondition" href="#">Conditions Générales de Vente</a>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-1">
        <a class="footerCondition" href="#">Mentions légales</a>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-1">
        <a class="footerCondition" href="#">Confidentialité</a>
    </div>
    <!-- <div class="col-"></div> -->
</div>
</div>
</footer>


<script src="addToCard.js"></script>
<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
