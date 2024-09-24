<section class="images">
    <?php
    $images = get_field('images-list', $homepageId);
    if (isset($images)):
        foreach ($images as $key => $image):
    ?>
            <article class="image-<?php echo $key + 1 ?>">
                <img src="<?php echo $image['image']['url']; ?>" alt="<?php echo $image['image']['title']; ?>">
            </article>
    <?php
        endforeach;
    endif;
    ?>
</section>