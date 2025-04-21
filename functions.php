<?php

/* 
    ############################################# 
                       CARTE  
    #############################################
*/

function creer_post_type_villes() {
    register_post_type('villes_desservies',
        array(
            'labels' => array(
                'name' => __('Villes Desservies'),
                'singular_name' => __('Ville')
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'menu_icon' => 'dashicons-location'
        )
    );
}
add_action('init', 'creer_post_type_villes');

function get_ville_info() {

    // $ville_id = intval($_GET['ville_id']);
    // $ville = get_post($ville_id);

    $ville_nom = sanitize_text_field($_GET['ville_nom']);
    $args = array(
        'post_type' => 'villes_desservies',
        'title' => $ville_nom,
        'posts_per_page' => 1
    );
    $query = new WP_Query($args);

    if($query->have_posts()){
        $query->the_post();
        $ville_id = get_the_ID();
        $planning = get_field('planning', $ville_id);
        $image = get_field('image_01', $ville_id);
        // $images = [
        //     get_field('image_01', $ville_id),
        //     get_field('image_02', $ville_id),
        //     get_field('image_03', $ville_id),
        // ];
        // $picture = $images['sizes']['my_custom_size'];

        // echo "<b>" . esc_html(get_the_title()) . "</b><br>";
        // echo "<p>" . esc_html(get_the_content()) . "</p>";

        $output = '<div class="popup-container">';

        if($image && isset($image['sizes']['medium'])){
            $output .= '<div class="popup-image-container">';
            $output .= '<img src="'. esc_url($image['sizes']['medium']) .'" alt="'. esc_attr(get_the_title()) .'" class="popup-image">';
            $output .= '</div>';
        }

        $output .= '<div class="popup-content">';
        $output .= '<h3 class="popup-title">' . esc_html(get_the_title()) . '</h3>';

        if($planning){
            // echo "<p><b>Planning : </b><br>" . nl2br(esc_html($planning)) . "</p>";
            $output .= '<div class="popup-section">';
            $output .= '<h4 class="popup-subtitle">Planning : </h4>';
            $output .= '<div class="popup-text">' . nl2br(esc_html($planning)) . '</div>';
            $output .= '</div>';
        } else {
            echo "<p class='popup-text'>Planning non défini.</p>";
        }

        $output .= '</div></div>';
        echo $output;

    } else {
        echo '<div class="popup-error">Aucune information disponible</div>';
    }

    wp_reset_postdata();
    die();
}

add_action('wp_ajax_get_ville_info', 'get_ville_info');
add_action('wp_ajax_nopriv_get_ville_info', 'get_ville_info');

add_image_size('my_custom_size', 60, 60, true);

/* 
    ############################################# 
                  LOGOS PARTENAIRES  
    #############################################
*/

function afficher_logos_partenaires($max = 50) {
    if(!is_page()) return;
    $page_id = get_the_ID();
    for($i = 1; $i <= $max; $i++) {
        $image = get_field("partenaire_$i", $page_id);
        if($image && isset($image['url'])){
            echo '<div class="logo-item">';
            echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) .' ">';
            echo '</div>';
        }
    }
}

/* 
    ############################################# 
                      CARD LIEUX  
    #############################################
*/

function creer_post_type_lieux() {
    register_post_type('bus_lieu', [
        'label' => 'Lieux Bus Dentaire',
        'public' => true,
        'menu-icon' => 'dashicons-location',
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
    ]);
}

add_action('init', 'creer_post_type_lieux');

/* 
    ############################################# 
                   FORMULAIRE RDV  
    #############################################
*/

function afficher_formulaire_rdv() {
    ob_start();
    ?>
    <section id="rdv" class="contact" style="background-color: #f8f9fa; padding: 40px;">
        <h2 class="section-title">Prendre un rendez-vous</h2>                                                                              
        <!-- <p style="text-align: center;">Vous avez besoin d'un rendez-vous ?  Écrivez-nous un message !</p><br> -->
        <div class="contact-container">
            <div class="formulaire">
                <form method="post" action="">
                    <div class="form-group dual-input">
                        <div class="input-wrapper">
                            <label for="nom">Nom</label>
                            <input placeholder="Votre nom" name="nom" id="nom" type="text" required>
                        </div>
                        <div class="input-wrapper">
                            <label for="prenom">Prénom</label>
                            <input placeholder="Votre prénom" name="prenom" id="prenom" type="text" required>
                        </div>
                    </div>
    
                    <div class="form-group dual-input">
                        <div class="input-wrapper">
                            <label for="email">Email</label>
                            <input placeholder="exemple@email.com" name="email" id="email" type="email" required>
                        </div>
                        <div class="input-wrapper">
                            <label for="numero">Téléphone</label>
                            <input placeholder="06 XX XX XX XX" name="numero" id="numero" type="tel" required>
                        </div>
                    </div>
                    <div class="input-wrapper">
                    <label for="">Choisir votre commune</label>
                        <select name="commune" id="commune">
                        <option value="">-- Sélectionnez --</option>
                        <option value="La Romieu">La Romieu</option>
                        <option value="Simorre">Simorre</option>
                        <option value="Castelanu-d'Auzan">Castelnau-d'Auzan</option>
                        <option value="Estang">Estang</option>
                        <option value="Le Houga">Le Houga</option>
                        <option value="Valence-sur-Baïse">Valence-sur-Baïse</option>
                        <option value="Pujaudran">Pujaudran</option>
                        <option value="Castéra-Verduzan">Castéra-Verduzan</option>
                        <option value="Montesquiou">Montesquiou</option>
                        <option value="Miradoux">Miradoux</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea placeholder="Votre message..." name="message" id="message" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="submit" name="formulaire_rdv">Envoyer</button>
                </form>
            </div>
            <div class="formulaire-box">
                <div class="contact-info">
                    <h3><i class="fas fa-info-circle"></i> Informations de contact</h3>
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>05 62 62 57 90</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>dt32@croix-rouge.fr</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>11 Rue Dr Samalens, 32000 Auch</span>
                    </div>
                    <div class="contact-hours">
                        <h4>Horaires</h4>
                        <p>08h00-12h00</p>
                        <p>13h00-17h00</p>
                    </div>
                </div>
            </div>
        </div>
</section>
    <?php
    return ob_get_clean();
}

add_shortcode('formulaire_rdv', 'afficher_formulaire_rdv');

function traiter_formulaire_rdv() {
    if(isset($_POST['formulaire_rdv'])) {
        $nom = sanitize_text_field($_POST['nom']);
        $prenom = sanitize_text_field($_POST['prenom']);
        $email = sanitize_email($_POST['email']);
        $numero = sanitize_text_field($_POST['numero']);
        $commune = sanitize_text_field($_POST['commune']);
        $message = sanitize_textarea_field($_POST['message']);

        $to = 'kukuli6699@hotmail.com';
        $subject = 'Urgent : Prise de rendez-vous sur site Internet';
        $headers = ['Content-Type: text/html; charset=UTF-8'];

        $body = "
            <h2>Demande de rendez-vous :</h2>
            <p><strong>Nom :</strong>$nom</p>
            <p><strong>Prénom :</strong>$prenom</p>
            <p><strong>Email :</strong>$email</p>
            <p><strong>Téléphone :</strong>$numero</p>
            <p><strong>Commune :</strong>$commune</p>
            <p><strong>Message :</strong><br>$message</p>
        ";

        wp_mail($to, $subject, $body, $headers);

        echo '<script>
            sessionStorage.setItem("formulaire_envoye", "1");
            window.location.reload();
        </script>';
        exit;
        }
}

add_action('init', 'traiter_formulaire_rdv');


?>