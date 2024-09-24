<section class="join-now">
    <article>   
        <?php 
            $title = get_field('title-join-now', $homepageId);
            $price = get_field('price-join-now', $homepageId);
            $button = get_field('button-join-now', $homepageId);
            $buttonLink = $button['url'];
            $buttonLabel = $button['title'];

            echo $title;
            echo $price;
            echo $buttonLink;
            echo $buttonLabel;
        ?>
    </article>
</section>