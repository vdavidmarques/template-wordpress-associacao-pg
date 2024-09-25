<section class="join-now">
    <article class="container content">
        <?php 
            $title = get_field('title-join-now', $homepageId);
            $button = get_field('button-join-now', $homepageId);
            $buttonLink = $button['url'];
            $buttonLabel = $button['title'];
            $buttonTarget = $button['target'];
            $price = get_field('price-join-now', $homepageId);
        ?>
        <?php if(isset($title) && isset($price)): ?>
        <div class="infos">
            <div class="main-title">
                <h3>
                    <?php echo $title;?>
                </h3>
            </div>
            <div class="price-tag">
                <p class="title">A PARTIR DE</p>
                <div class="price-info">
                    <?php 
                        $reais = $price['reais'];
                        $centavos = $price['centes'];
                        $periodo = $price['time'];
                    ?>
                    <div class="currency">R$</div>
                    <div class="price">
                        <span class="reais"><?php echo $reais; ?></span>
                        <div class="cents">
                            <span class="centavos"><?php echo $centavos; ?></span>
                            <span class="periodo"><?php echo $periodo; ?></span>
                        </div>
                    </div>
                </div>
                <a href="<?php echo $buttonLink ?> " target="<?php echo $buttonTarget ?>" class="button-join-now">
                    <?php echo $buttonLabel;?>
                </a>
            </div>
        </div>
        <?php endif; ?>
    </article>
</section>