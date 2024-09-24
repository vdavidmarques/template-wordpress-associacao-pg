<section class="about">
    <?php
        $description = get_field('desc', $homepageId);
        $quote = get_field('quote', $homepageId);
    ?> 
    <article>   
    <?php 
        echo $description;
        echo $quote;
    ?>
    </article>
</section>