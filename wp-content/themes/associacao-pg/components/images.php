<section class="images">
    <?php
    $images = get_field('images-list', $homepageId);
    $lists = $images['list'];
    if (isset($lists)): ?>
        <div class="container">
            <div class="lists">
                <div class="list">
                    <?php foreach ($lists as $key => $list): ?>
                        <article class="scroll-effect list-item list-item-<?php echo $key + 1 ?>">
                            <img src="<?php echo $list['icon']['url']; ?>" alt="<?php echo $list['icon']['title']; ?>" class="icon">
                            <h3 class="title"><?php echo $list['title']; ?></h3>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php
    $banners = $images['banners'];
    if (isset($banners)):
    ?>
        <div class="banners-container">
            <?php foreach ($banners as $banner): ?>
                <article class="banner scroll-effect">
                    <div class="content">
                        <div class="desc">
                            <?php echo $banner['desc']; ?>
                        </div>
                    </div>
                    <?php ?>
                    <img src="<?php echo $banner['image']['url']; ?>" alt="<?php echo $banner['image']['title']; ?>" class="image-banner">
                </article>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>