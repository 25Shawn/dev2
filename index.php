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
            $post_id = 76;
            $post = get_post($post_id);
            
            if ($post) :
                setup_postdata($post);
        ?>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        <?php
                wp_reset_postdata(); // Reset post data
else :
                echo 'Post not found.';
            endif;
        ?>

    </div>
</div>


<?php 
    wp_footer();
    get_footer();
?>