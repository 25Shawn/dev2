<?php

    function custom_get_search_form($form) {

        ob_start();
        get_template_part('searchform');
        $form = ob_get_clean();
        
        return $form;
    }
    add_filter('get_search_form', 'custom_get_search_form');

?>

