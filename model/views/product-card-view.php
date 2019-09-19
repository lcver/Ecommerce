<?php
    function singkat($text){
        if(strlen($text)>30){
            $text = substr($text, 0, 31);
            return $text.'...';
        }else{
            return $text;
        }
    }
?>
<div class="product-card-wrapper">
    <div class="product-card-title">
        <span>Product</span>
    </div>
    <div class="product-card">
        <?php $p=$i=0; while($i<24): $i++;$p++;?>
        <a href="<?= $base_url ?>pages/product-page.php" >
        <div class="card-item-wrapper">
            <div class="card-image">
                <img class="img-thumbnail" src="<?= $base_url ?>assets/img/pict<?=$p?>.jpg">
            </div>
            <div class="card-item-des">
                <div class="card-title"><?= singkat('Black Diamond') ?></div>
                <div class="card-price">
                    <div class="before">
                        <span class="currency">Rp</span>
                        <span class="price">50.000.000</span>
                    </div>
                    <div class="after">
                        <span class="currency">Rp</span>
                        <span class="price">13.000.000</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="card-seller">Seller</div>
                </div>
            </div>
        </div>
        </a>
        <?php if($p==11):$p=0;endif; endwhile; ?>
        <div class="card-item-wrapper">
            <div class="card-image">
                <img class="img-thumbnail" src="<?= $base_url ?>assets/img/pict10.jpg">
            </div>
            <div class="card-item-des">
                <div class="card-title"><?= singkat('lorem Ipsum dummetlorem Ipsum dummetlorem Ipsum dummetlorem Ipsum dummet lorem Ipsum dummet') ?></div>
                <div class="card-price">
                    <span class="currency">Rp</span>
                    <span class="price">13.000.000</span>
                </div>
                <div class="card-footer">
                    <div class="card-seller">Seller</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
