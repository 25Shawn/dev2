<?php

    function custom_get_search_form($form) {

        ob_start();
        get_template_part('searchform');
        $form = ob_get_clean();

        return $form;
    }
    add_filter('get_search_form', 'custom_get_search_form');


    add_action('admin_post_custom_login', 'custom_login_handler');
    add_action('admin_post_nopriv_custom_login', 'custom_login_handler');

    function custom_login_handler() {
        if (isset($_POST['login']) && isset($_POST['password'])) {
            $username = sanitize_user($_POST['login']);
            $password = $_POST['password'];
            $remember = isset($_POST['resterconnecte']) ? true : false;

            $user = wp_signon(array(
                'user_login'    => $username,
                'user_password' => $password,
                'remember'      => $remember,
            ));

            wp_signon($user);
            
            if (is_wp_error($user)) {
                // L'authentification a échoué, vous pouvez gérer l'erreur ici.
            } else {
                // L'authentification a réussi, redirigez l'utilisateur vers le tableau de bord.
                wp_safe_redirect(admin_url());
                exit;
            }
        }
    }


?>

