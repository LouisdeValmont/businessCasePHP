<div class="col-9 d-flex flex-column align-items-center prductShowCast">
    <section class="container content-section d-flex justify-content-center">
        <div class="shop-items">
            <?php
            foreach ($aProducts as $produit): ?>
                <div class="shop-item">
                    <p class="shop-item-title"><?php echo $produit->getTitle() ?></p>
                    <img class="shop-item-image" src="<?php echo $produit->getImg() ?>">
                    <div class="shop-item-details">
                        <span class="shop-item-price"><?php echo $produit->getPriceHT() ?>$</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            <?php endforeach; ?>
            <h4><< <b>1</b><span class="nextPage">-2-3-4-5-6-7</span> >></h4>
        </div>
    </section>
</div>
</div>
</section>
