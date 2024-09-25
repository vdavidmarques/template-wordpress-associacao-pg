</main>
<footer role="contentinfo">
    <div class="container content">
        <?php
        $args = array(
            'name' => 'informacoes-gerais',
            'post_type' => 'page',
        );

        $query = new WP_Query($args);
        while ($query->have_posts()) :
            $query->the_post();
            $address = get_field('address');
            $contact = get_field('contact');
            $service = $contact['horario_de_atendimento'];
            $phoneNumber = $contact['phones-number'];
            $socialMedias = get_field('redes_sociais');
            $facebook = $socialMedias['facebook'];
            $instagram = $socialMedias['instagram'];
            $cookieText = get_field('cookie-text');
        ?>
            <div class="logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }

                $args = array(
                    'name' => 'informacoes-gerais',
                    'post_type' => 'page',
                );
                ?>
            </div>
            <?php if ($address): ?>
                <div class="address">
                    <p><?php echo $address; ?></p>
                </div>
            <?php endif; ?>
            <div class="contact">
                <h3 class="subtitle">Atendimento</h3>
                <div class="lists">
                    <?php
                    if ($phoneNumber):
                        foreach ($phoneNumber as $phone):
                    ?>
                            <a class="list" href="tel:<?php echo $phone['telefone']; ?>" target="_blank">
                                <div class="icon phone"></div>
                                <?php echo $phone['telefone']; ?>
                            </a>
                            <a class="list" href="https://api.whatsapp.com/send?phone=55<?php echo $phone['wpp'] ?>" target="_blank">
                                <div class="icon wpp"></div>
                                <?php echo $phone['wpp']; ?>
                            </a>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
                <h4 class="info"><?php echo $service; ?></h4>
            </div>
            <div class="social-medias-copyright">
                <div class="social-medias lists">
                    <?php if ($facebook): ?>
                        <a class="list" href="<?php echo $facebook; ?>" target="_blank">
                            <div class="icon facebook"></div>
                        </a>
                    <?php endif; ?>
                    <?php if ($instagram): ?>
                        <a class="list" href="<?php echo $instagram ?>" target="_blank">
                            <div class="icon instagram"></div>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="copyright">
                    <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?>. Todos os direitos reservados.
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php
    $showCookieMessage = !isset($_COOKIE['cookieAccepted']);

    if ($showCookieMessage):
    ?>
        <div id="cookie-message">
            <div class="container texts">
                <div class="cookie-message">        
                    <?php echo $cookieText ?>
                </div>
                <div class="accept">
                    <button id="accept-cookies">Continuar e fechar</button>
                </div>
            </div>
        </div>
    <?php endif; ?>
</footer>
</div>
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" defer></script>
<script src="<?php echo get_template_directory_uri() . '/dist/js/swiper.js' ?>"></script>

</body>

</html>