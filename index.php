<?php 
    wp_head();
    get_header();
?>

<div class="contenu_principale ">

    <div class="contenu container_pareil">
        <div class="titre">

            <hr class="hr_contenu">
                <p id="titre_posts">Formation PUB020: WordPress, 2023</p>
            <hr class="hr_contenu">
        </div>

        <div class="bouton_reduire_container">
            <a class="bouton_reduit">Tout réduire</a>
        </div>

        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1, 
                'category_name' => 'Formations'
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :

                while ($query->have_posts()) : $query->the_post();

        ?>

        <div class="lien_contenu_prinicpale lien_contenu" onclick="collapsed(<?php echo esc_attr(get_the_ID()); ?>)">

            <?php the_title(); ?>

        </div>

        <div class="lien_contenu_sous" data-id="<?php echo esc_attr(get_the_ID()); ?>">
                
            <?php comments_template(); ?>

        </div>

        <?php 

            comment_form();
            endwhile;

            wp_reset_postdata();
        else :
        ?>

        <p><?php esc_html_e('No posts found.', 'your-theme-text-domain'); ?></p>

        <?php
            endif;
        ?>

    </div>
</div>


<?php 
    wp_footer();
    get_footer();
?>