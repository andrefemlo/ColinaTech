<?php

$query = new WP_Query(array('post_type' => 'resultados'));

if ($query->have_posts()) :
    ?>
    <div class="slider flex flex-col items-center justify-center">
        <?php
        while ($query->have_posts()) : $query->the_post();
            $icone_resultado = get_field('icone-resultados');
            $descricao_resultado = get_field('descricao-resultados');
            ?>
            <div id="carousel-content-card" class="flex group py-5 px-4 bg-colina-700 text-neutral-50 hover:bg-colina-400 rounded-xl shadow-lg mx-6 w-64">
                <div class="flex flex-col items-center justify-center space-y-6 w-64 h-64">

                    <?php if ($icone_resultado) : ?>
                        <img class="group-hover:hidden" src="<?php echo esc_url($icone_resultado['url']); ?>" alt="<?php echo esc_attr($icone_resultado['alt']); ?>">
                        <?php endif; ?>
                        <span class="text-lg text-center font-semibold group-hover:text-colina-700 my-4 mx-0"><?php the_title(); ?></span>
                        <?php if ($descricao_resultado) : ?>
                            <p class="hidden text-sm group-hover:block group-hover:text-colina-700 text-center"><?php echo esc_html($descricao_resultado); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                        <?php endwhile; ?>
                </div>

    <!-- Importação da lib Slink, biblioteca responsável pelos carrosseis da página -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/src/js/slider-resultados.js"></script>
    <?php
    wp_reset_postdata();
else :
    echo 'Nenhum resultado encontrado.';
endif;
?>
