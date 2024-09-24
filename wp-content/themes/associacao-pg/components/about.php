<section class="about">
    <?php
        $description = get_field('desc', $homepageId);
        $description2 = get_field('desc_2', $homepageId);
        $quote = get_field('quote', $homepageId);
    ?> 
    <article class="description">   
        <div class="text">
            <?php echo $description; ?>
        </div>
        <div class="text-2">
            <?php echo $description2; ?>
        </div>
    </article>
    <article class="quote">
        <div class="container">
            <?php echo $quote; ?>
        </div>
    </article>
</section>