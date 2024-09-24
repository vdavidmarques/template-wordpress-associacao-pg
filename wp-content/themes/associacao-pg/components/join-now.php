<section class="join-now">
    <article class="container content">
        <?php 
            $title = get_field('title-join-now', $homepageId);
            $price = get_field('price-join-now', $homepageId);
            $button = get_field('button-join-now', $homepageId);
            $buttonLink = $button['url'];
            $buttonLabel = $button['title'];
            $buttonTarget = $button['target'];
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
                <p>
                    <span class="currency">R$</span>
                    <span class="price">
                        <?php echo $price;?>
                    </span>
                    <span class="mounth">/mês</span>
                </p>
                <a href="<?php echo $buttonLink ?> " target="<?php echo $buttonTarget ?>" class="button-join-now">
                    <?php echo $buttonLabel;?>
                </a>
            </div>
        </div>
        <?php endif; ?>
    </article>
</section>