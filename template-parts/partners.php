<?php

$query = new WP_Query(array('post_type' => 'parceiro'));

if ($query->have_posts()) :
    ?>
    <div class="slider-parceiros flex flex-row items-center justify-center h-[20dvh]">
        <?php
        while ($query->have_posts()) : $query->the_post();
        $imagem = get_field('imagem_do_parceiro');
        $link = get_field('link_do_projeto-parceiro');
        ?>

            <div class="flex flex-row items-center justify-center">
                <?php if ($imagem) : ?>
                    <a <?php if ($link) : ?> href="<?php echo esc_html($link); ?>" <?php endif; ?> >
                        <img class="" src="<?php echo esc_url($imagem['url']); ?>" alt="<?php echo esc_attr($imagem['alt']); ?>">
                    </a>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>                    

    <!-- Importação da lib Slink, biblioteca responsável pelos carrosseis da página -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/src/js/slider-parceiros.js"></script>
    <?php
    wp_reset_postdata();
else :
    echo 'Nenhum resultado encontrado.';
endif;
?>
