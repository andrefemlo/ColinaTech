<?php

$query = new WP_Query(array( 'post_type' => 'testemunha' ));

if ($query->have_posts()) :
    ?>
    <div class="slider-testimonies flex flex-col justify-center p-8 max-w-md">
        <?php
        while ($query->have_posts()) : $query->the_post();
            $logo_da_empresa = get_field('logo_da_empresa-testemunha');
            $foto_de_perfil = get_field('foto_de_perfil-testemunha');
            $nome_da_testemunha = get_field('nome_da_testemunha');
            $cargo_da_testemunha = get_field('cargo_da_testemunha');
            $depoimento = get_field('depoimento');
            ?>

            <div class="flex flex-col text-neutral-50">
                <div class="flex flex-col justify-evenly space-y-8">

                    <?php if ($logo_da_empresa) : ?>
                        <img class="max-h-12 w-max" src="<?php echo esc_url($logo_da_empresa['url']); ?>" alt="<?php echo esc_attr($logo_da_empresa['alt']); ?>">
                    <?php endif; ?>
                        <div class="flex flex-row items-center">
                            <?php if ($foto_de_perfil) : ?>
                                <img class="h-20 w-20 rounded-full object-cover" src="<?php echo esc_url($foto_de_perfil['url']); ?>" alt="<?php echo esc_attr($foto_de_perfil['alt']); ?>">
                            <?php endif; ?>
                            <div class="flex-flex-col justify-evenly p-4">
                                <?php if ($nome_da_testemunha) : ?>
                                    <h4 class="font-semibold text-xl"> <?php echo esc_html($nome_da_testemunha); ?></h4>
                                <?php endif; ?>
                                <?php if ($cargo_da_testemunha) : ?>
                                    <p class="text-base"> <?php echo esc_html($cargo_da_testemunha); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                    <?php if ($depoimento) : ?>
                        <p class="text-base pb-8"><?php echo esc_html($depoimento); ?></p>
                    <?php endif; ?>
                </div>
            </div>



                    <?php endwhile; ?>
    </div>

    <?php
    wp_reset_postdata();
else :
    echo 'Nenhum resultado encontrado.';
endif;
?>
