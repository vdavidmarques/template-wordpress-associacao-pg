<section class="prize-draw">
    <article>
        <?php
        $image = get_field('prize-draw', $homepageId);
        if (isset($image)):
        ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
        <?php endif; ?>
    </article>
</section>