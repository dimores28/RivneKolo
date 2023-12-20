<?php $count = 1; ?>
<?php foreach(getProducts() as $prod) {?>
    <?php if($prod["prod_template"] == 5) {?>
        <div class="assortment__item bagels" data-watch-threshold="1" data-watch data-popup="#popup" data-poduct-id="<?php echo $prod["ID"];?>">
            <div class="assortment__image-wrap">
               <img src="<?php echo $prod["img"];?>" class="assortment__product" width="622" height="651" alt="product img" />
               <img src="<?php echo $prod["picture_1"];?>" class="assortment__bagels assortment__bagels_1" width="153" height="102" alt="Bagels" />
               <img src="<?php echo $prod["picture_2"];?>" class="assortment__bagels assortment__bagels_2" width="202" height="200" alt="Bagels" />
               <img src="<?php echo $prod["picture_3"];?>" class="assortment__bagels assortment__bagels_3" width="202" height="200" alt="Bagels" />
               <img src="<?php echo $prod["picture_4"];?>" class="assortment__bagels assortment__bagels_4" width="153" height="102" alt="Bagels" />
               <img src="<?php echo $prod["picture_5"];?>" class="assortment__bagels assortment__bagels_5" width="202" height="200" alt="Bagels" />
            </div>
            <?php if($count % 2 != 0) {?>
                <div class="assortment__info assortment__info_1">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/products/spot1.svg" class="assortment__info-bg" width="381" height="378" alt="background img" />
                    <h3 class="assortment__info-title"><?php echo $prod["title"];?></h3>
                    <div class="assortment__info-weight">
                        <span><?php echo $prod["prod_weight"];?></span>
                    </div>
                    <div class="assortment__info-price"><?php echo $prod["prod_price"];?></div>
                </div>
            <?php } else {?>
                <div class="assortment__info assortment__info_2">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/products/spot2.svg" class="assortment__info-bg" width="381" height="378" alt="background img" />
                    <h3 class="assortment__info-title"><?php echo $prod["title"];?></h3>
                    <div class="assortment__info-weight">
                        <span><?php echo $prod["prod_weight"];?></span>
                    </div>
                    <div class="assortment__info-price"><?php echo $prod["prod_price"];?></div>
                </div>       
            <?php }?>

        </div>
    <?php } else {?>
        <div class="assortment__item nuts" data-watch-threshold="1" data-watch data-popup="#popup" data-poduct-id="<?php echo $prod["ID"];?>">
            <div class="assortment__image-wrap">
               <img src="<?php echo $prod["img"];?>" class="assortment__product" width="706" height="618" alt="product img" />
               <img src="<?php echo $prod["picture_1"];?>" class="assortment__nuts assortment__nuts_1" width="167" height="131" alt="Nuts" />
               <img src="<?php echo $prod["picture_2"];?>" class="assortment__nuts assortment__nuts_2" width="190" height="146" alt="Nuts" />
               <img src="<?php echo $prod["picture_3"];?>" class="assortment__nuts assortment__nuts_3" width="207" height="213" alt="Nuts" />
               <img src="<?php echo $prod["picture_4"];?>" class="assortment__nuts assortment__nuts_4" width="198" height="165" alt="Nuts" />
            </div>
            <div class="assortment__info assortment__info_4">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/products/spot4.svg" class="assortment__info-bg" width="456" height="403" alt="background img" />
                <p class="assortment__info-desc"><?php echo $prod["product_subtitle"];?></p>
                <h3 class="assortment__info-title"><?php echo $prod["title"];?></h3>
                <div class="assortment__info-weight">
                    <span><?php echo $prod["prod_weight"];?></span>
                </div>
                <div class="assortment__info-price"><?php echo $prod["prod_price"];?></div>
            </div>
        </div>
    <?php } $count++;?>
<?php }?>