<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apical</title>
    <link rel="apple-touch-icon" sizes="180x180" href="https://apical.xyz/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://apical.xyz/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://apical.xyz/favicon-16x16.png">
    <link rel="stylesheet" href="/wp-content/themes/dev2/style.css">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e538d494e4.js" crossorigin="anonymous"></script>
    <script defer src="/wp-content/themes/dev2/js/script.js"></script>

</head>
<body>
    
    
    <header id="container_header_principale">
        
        <div id="logo">
        
            <div class="logo_principale">
                <img id="image_apical" src="https://apical.xyz/medias/fr/LogoApical-blanc.svg" alt="Apical, ma plateforme d'apprentissage" />
            </div>

            <div id="nav_bar_icone">
                <div class="menuicones">
                    
                    <div class=" dropdown">
                        <a href="index.php" class="icone ouvrirpopuprecherche"><img class="icone" src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil"/></a>
                        <div class="dropdown-menu icone_dropdown">
                            <a href="index.php" class="dropdown-icone ">Accueil</a>
                        </div>
                    </div>


                    <div class=" dropdown">
                        <a href="#" class="recherche ouvrirpopuprecherche dropdown-toggle" data-target="#popuprecherche"><img class="icone" src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche"/></a>
                        <div class="dropdown-menu icone_dropdown">
                            <a href="https://apical.xyz" class="dropdown-icone ">Rechercher</a>
                        </div>
                    </div>

                    <div class=" dropdown">
                        <a href="#" class="icone ouvrirpopupauthentification" data-target="#popupauthentification"><img src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg" alt="Authentification" title="" /></a>
                        
                    </div>

                    
                        
                </div>

                
                <div class="popup_barre_recherche_principale">

                    <div class="fermeture_barre_recherche">
                        <div class="sous_fermeture">
                            <i class="fa-solid fa-x"></i>
                        </div>
                    </div>
                    <div class="barre_recherche">
                            
                        <div id="popup_recherche">
                            <?php get_search_form(); ?>
                        </div>
                            
                    </div>
                </div>
                
                
                <div id="popup_authentification_principale">

                    <div class="fermeture_popup">
                        <div class="sous_fermeture">
                            <i class="fa-solid fa-x"></i>
                        </div>
                    </div>
                    
                    <div id="popup_authentification">
                        <div class="message_erreur"></div>
                        <div id="contenu_formulaire">

                            

                            <form action="#" method="post" id="formulaire_login">

                                <div class="container_formulaire premier_container">
                                    <label for="login">*Usager: </label>
                                    <div class="sous_container_input">
                                        <input type="text" id="login" class="input input_usager">
                                    </div>
                                </div>
                                <div class="container_formulaire deuxieme_container">
                                    <label for="password">*Mot de passe: </label>
                                    <div class="sous_container_input">
                                        
                                        <input type="password" id="password" class="input input_mot_de_passe">
                                    </div>
                                </div>
                                <div class="container_formulaire troisieme_container">
                                    <div id="sous_container_checkbox">
                                        <label for="checkbox"><input type="checkbox" name="resterconnecte" id="checkbox"> Rester connecté</label>
                                    </div>
                                </div>

                                <div  class="container_formulaire">
                                    <a type="submit" class="soumettre_formulaire bouton" href="#">Soumettre</a>
                                </div>

                                <div class="container_formulaire">
                                    <a class="nouvel_usager" href="#">Nouvel usager</a>
                                </div>

                            </form>
                        </div>
                    </div>
                    
                        
                </div>
            </div>
            
        </div>

        <ul class="nav_bar_principale">

            <li class="nav_lien">

                <?php
                
                    $args = array(
                        'title_li' => '', 
                        'echo'     => 0, 
                    );
                    $pages = wp_list_pages($args);
                
                    
                    if ($pages) {
                        
                        $pages = str_replace('<a', '<a class="menu"', $pages);
                        echo $pages;
                    }
                ?>

            </li>


        </ul>
 
        

</header>