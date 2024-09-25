<section class="partners">
    <article class="container">
        <?php
        $partners = get_field('partners', $homepageId);
        if (isset($partners)):
        ?>
            <div class="logos">
                <?php
                foreach ($partners as $partner):
                ?>
                    <?php if (isset($partner['addLink'])): ?>
                        <a href="<?php echo $partner['link']; ?>" class="url scroll-effect <?php echo $partner['addLink'] ? 'has-link' : 'empty-link' ?>">
                            <img src="<?php echo $partner['logo']['url']; ?>" alt="<?php echo $partner['logo']['title']; ?>" class="logo">
                        </a>
                <?php endif;
                endforeach;
                ?>
            </div>
        <?php
        endif;
        $partnetText = get_field('partner-text', $homepageId);
        ?>
        <h4 class="title scroll-effect"><?php echo $partnetText ?></h4>
        <div class="wpp scroll-effect">
            <?php
            $args = array(
                'name' => 'informacoes-gerais',
                'post_type' => 'page',
            );

            $query = new WP_Query($args);
            while ($query->have_posts()) :
                $query->the_post();
                $contact = get_field('contact');
                $phoneNumber = $contact['phones-number'];

                if ($phoneNumber):
                    foreach ($phoneNumber as $phone):
            ?>
                        <a class="list" href="https://api.whatsapp.com/send?phone=55<?php echo $phone['wpp-only-numbs'] ?>" target="_blank">
                            <div class="icon wpp"></div>
                        </a>
                <?php
                    endforeach;
                endif;
                ?>
            <?php endwhile; ?>
        </div>
    </article>
</section>