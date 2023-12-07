<?php
$args = array(
    'post_type' => 'pergunta-frequente', // Substitua 'seu_custom_post_type' pelo nome do seu CPT
    'posts_per_page' => 6,
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    $counter = 1;
    $timing = 150;
    while ($query->have_posts()) : $query->the_post();
?>
<div class="accordion-item">
    <div class="flex items-center" data-aos="fade-right" data-aos-duration="600" data-aos-delay="<?php echo $timing; ?>" data-aos-offset="-200">
        <h2 class="accordion-title cursor-pointer font-semibold text-xl"><?php echo $counter . '. ' . get_the_title(); ?></h2>
        <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2">
            <path d="M0.933317 1.91679L6.53332 7.53345C6.59998 7.60012 6.67221 7.64745 6.74998 7.67545C6.82776 7.70345 6.9111 7.71723 6.99998 7.71679C7.08887 7.71679 7.17221 7.70301 7.24998 7.67545C7.32776 7.6479 7.39998 7.60056 7.46665 7.53345L13.0833 1.91679C13.2389 1.76123 13.3167 1.56679 13.3167 1.33345C13.3167 1.10012 13.2333 0.900121 13.0667 0.733454C12.9 0.566788 12.7055 0.483454 12.4833 0.483454C12.2611 0.483454 12.0667 0.566788 11.9 0.733454L6.99998 5.63345L2.09998 0.733454C1.94443 0.577899 1.75265 0.500121 1.52465 0.500121C1.29665 0.500121 1.09954 0.583454 0.933317 0.750121C0.76665 0.916787 0.683317 1.11123 0.683317 1.33345C0.683317 1.55568 0.76665 1.75012 0.933317 1.91679Z" fill="#0A0B0B"/>
        </svg>
    </div>
    <div class="accordion-content">
        <?php the_field('resposta'); ?>
    </div>
</div>


<?php
    $counter++;
    $timing++;
    endwhile;
    wp_reset_postdata();
endif;
?>
