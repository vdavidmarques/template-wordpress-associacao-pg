<section class="main-banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
            $slides = get_field('slides', $homepageId);
            foreach ($slides as $slide) :
            ?>
                <article class="my-swiper swiper-slide scroll-effect">
                    <?php if($slide['image']): ?>
                        <img src="<?php echo $slide['image']['url']; ?>" class="image" alt="Associação PG">
                    <?php 
                        endif; 
                        if(isset($slide['title']) && isset($slide['description'])):
                    ?>
                        <div class="content">
                            <h2 class="title"><?php echo $slide['title']; ?></h2>
                            <p class="description"><?php echo $slide['description']; ?></p>
                        </div>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        
        <div class="swiper-pagination"></div>
    </div>
</section>