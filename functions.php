<?php
function ajouter_classe_lien_contenu($content) {


    $content = preg_replace_callback("/<a(.*?)>/i", function($match) {

        return '<a class="lien_contenu">';
    }, $content);


    // Modifiez la balise <a> entourée de balises <li>
    $content = preg_replace_callback('/<li>(.*?)<a(.*?)>(.*?)<\/a>(.*?)<\/li>/i', function($match) {
        

        return '<li class="li_lien">' . $match[1] . '<a class="sous_lien">' . $match[3] . '</a>' . $match[4] . '</li>';
    }, $content);


    $compteur = 0;
    $content = preg_replace_callback("/<p>/", function($match) use (&$compteur) {
        $compteur++;
        
        return '<div onclick="collapsed('.$compteur.')" class="lien_contenu_prinicpale" >';
    }, $content); 
    

    $content = preg_replace_callback("/<\/p>/", function($match) use (&$compteur) {
        return '</div>';
    }, $content);


    $compteur_lien_sous = 1;
    $content = preg_replace_callback('/<ul>/', function($match) use (&$compteur_lien_sous) {

        // Remplacer 14 par 15
        if ($compteur_lien_sous == 14) {
            $compteur_lien_sous = 15; 
        }

        $data_id = 'data-id="' . $compteur_lien_sous . '"';
        $compteur_lien_sous++;
        return '<ul class="lien_contenu_sous"' . $data_id . '>';
    }, $content);
    
    
    
    return $content;
}

add_filter('the_content', 'ajouter_classe_lien_contenu');



function custom_get_search_form($form) {
    ob_start();
    get_template_part('searchform');
    $form = ob_get_clean();
    return $form;
}
add_filter('get_search_form', 'custom_get_search_form');

?>


