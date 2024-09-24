<section class="map">
    <div class="container">
        <article>
            <div class="social-networks">
                <h3 class="title">ACESSE NOSSAS REDES SOCIAIS</h3>
                <div class="networks">
                    <?php
                    $args = array(
                        'name' => 'informacoes-gerais',
                        'post_type' => 'page',
                    );

                    $query = new WP_Query($args);
                    while ($query->have_posts()) :
                        $query->the_post();
                        $socialMedias = get_field('redes_sociais');
                        $facebook = $socialMedias['facebook'];
                        $instagram = $socialMedias['instagram'];

                        if ($facebook):
                    ?>
                            <a class="list" href="<?php echo $facebook; ?>" target="_blank">
                                <div class="icon facebook"></div>
                            </a>
                        <?php endif;
                        if ($instagram): ?>
                            <a class="list" href="<?php echo $instagram ?>" target="_blank">
                                <div class="icon instagram"></div>
                            </a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="gallery">
                <?php
                $posts = get_field('posts', $homepageId);
                if (isset($posts)):
                    foreach ($posts as $post):
                ?>
                        <img src="<?php echo $post['image']['url']; ?>" alt="<?php echo $post['image']['title']; ?>">
                <?php
                    endforeach;
                endif;
                ?>
            </div>
            <div class="map-code">
                <?php 
                    $map = get_field('map', $homepageId);
                    if(isset($map)):
                        echo $map ;
                    endif;
                ?>
            </div>
        </article>
    </div>
</section>