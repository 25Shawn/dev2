<?php 
    wp_head();
    get_header();
?>
<div class="contenu_principale ">
    <div class="contenu container_pareil">
        <div class="titre">
            <hr class="hr_contenu">
                <p id="titre_posts">La page demandée n'existe pas</p>
            <hr class="hr_contenu">
        </div>
        <p id="texte_404">La page demandée n'existe pas. Voici les pages disponibles sur Apical :</p>

        <ul id="lien_page_depannage">
            <li><a class="lien_404" href="/">Acceuil</a></li>
            <li><a class="lien_404" href="/">Formations</a></li>
            <li><a class="lien_404" href="/">Blogue</a></li>
            <li><a class="lien_404" href="/">À propos</a></li>
            <li><a class="lien_404" href="/">Contact</a></li>
        </ul>
    </div>
</div>

<?php 
    wp_footer();
    get_footer();
?>