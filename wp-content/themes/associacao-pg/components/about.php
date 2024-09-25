<section class="about scroll-effect">
    <?php
        $description = get_field('desc', $homepageId);
        $description2 = get_field('desc_2', $homepageId);
        $quote = get_field('quote', $homepageId);
    ?> 
    <article class="quote">
        <div class="container">
            <?php echo $quote; ?>
        </div>
    </article>
</section>