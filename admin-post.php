<?php
require_once('wp-load.php');

if (isset($_POST['login']) && isset($_POST['password'])) {
    $username = sanitize_user($_POST['login']);
    $password = $_POST['password'];
    $remember = isset($_POST['resterconnecte']) ? true : false;

    $user = wp_signon(array(
        'user_login'    => $username,
        'user_password' => $password,
        'remember'      => $remember,
    ));

    if (is_wp_error($user)) {
        echo "sssssss";
    } else {
        
        wp_safe_redirect(home_url());
        exit;
    }
}

?>