<section class="benefits">
    <article class="container">
        <div class="title"><?php echo get_field('title-benefits', $homepageId); ?></div>
        <ul class="benefits-list">
            <?php
            $benefits = get_field('benefits-list', $homepageId);
            if (isset($benefits)):
                foreach ($benefits as $benefit): ?>
                    <li class="benefit">
                        <img src="<?php echo $benefit['image']['url']; ?>" alt="<?php echo $benefit['image']['title']; ?>" class="image">
                        <div class="content">
                            <?php echo $benefit['content']; ?>
                        </div>
                    </li>
            <?php endforeach;
            endif;
            ?>
        </ul>
    </article>
</section>