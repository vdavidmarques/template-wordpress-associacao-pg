<?php
$services = get_field('services', $homepageId);
if (isset($services)):
?>
    <section class="services">
        <div class="container contents">
            <div class="content">
                <?php
                foreach ($services as $service) :
                    $image = $service['image'];
                    $description = $service['content'];
                ?>
                    <article class="service">
                        <?php if ($image): ?>
                            <div class="image">
                                <img src="<?php echo $image['url']; ?>" class="image" alt="<?php echo $title; ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (isset($description)): ?>
                            <div class="description"><?php echo $description; ?></div>
                        <?php endif; ?>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>