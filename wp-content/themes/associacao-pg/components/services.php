<section class="services">
    <?php
    $services = get_field('services', $homepageId);
    if (isset($services)):
        foreach ($services as $service) :
            $image = $service['image'];
            $description = $service['content'];
    ?>
            <article class="service">
                <?php if ($image): ?>
                    <img src="<?php echo $image['url']; ?>" class="image" alt="<?php echo $title; ?>">
                <?php
                endif;
                if (isset($description)):
                ?>
                    <div class="description"><?php echo $description; ?></div>
                <?php endif; ?>
            </article>
    <?php
        endforeach;
    endif;
    ?>
</section>