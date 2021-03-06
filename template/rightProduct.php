<div class="col-9 d-flex flex-column align-items-center prductShowCast">
    <h2 class="section-header">NOUVEAUTÉES</h2>
    <section class="container content-section d-flex justify-content-center">
        <div class="shop-items">
            <?php
            foreach ($produits as $produit):
                if ($produit['Id_Produit'] === '5'):
                    break;
                endif;
                ?>
                <div class="shop-item">
                    <p class="shop-item-title"><?php echo $produit['Titre'] ?></p>
                    <img class="shop-item-image" src="../assets/image/animals/Dogs/nourriture/Sanstitre.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price"><?php echo $produit['PrixHT'] ?>$</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <h2 class="align-items-center section-header">CHOIX DU PUBLIC</h2>
    <section class="container content-section  d-flex justify-content-center">
        <div class="shop-items">
            <?php
            foreach ($produits as $produit):
                if ($produit['Id_Produit'] === '5'):
                    break;
                endif;
                ?>
                <div class="shop-item">
                    <p class="shop-item-title"><?php echo $produit['Titre'] ?></p>
                    <img class="shop-item-image" src="../assets/image/animals/Dogs/nourriture/Sanstitre.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price"><?php echo $produit['PrixHT'] ?>$</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>
</div>
</section>
