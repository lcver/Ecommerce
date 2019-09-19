<div class="product-card-wrapper recommended-product-card">
    <div class="product-card-title">
        <span>Rekomendasi</span>
    </div>
    <div class="product-card">
        <div class="card-roll-wrapper">
            <?php $p=$i=0; while($i<10): $i++;$p++;?>
            <div class="card-item-roll">
                <div class="card-image">
                    <img class="img-thumbnail" src="<?= $base_url ?>assets/img/pict<?=$p?>.jpg">
                </div>
                <div class="card-item-des">
                    <div class="card-title">Black diamond</div>
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
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>