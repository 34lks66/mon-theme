<?php

/* 
############################################# 
           CARTE : Villes Desservies
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

    echo '<div class="partenaires-container">';

    echo '<div class="partenaires-section institutionnels">';
    echo '<h3>Nos partenaires institutionnels</h3>';
    echo '<div class="logos">';
    for($i = 1; $i <= $max; $i++) {
        $image = get_field("partenaire_institutionnel_$i", $page_id);
        if($image && isset($image['url'])){
            echo '<div class="logo-item institutionnel">';
            echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) .' ">';
            echo '</div>';
        }
    }
    echo '</div></div>';
    
    echo '<div class="partenaires-section financiers">';
    echo '<h3>Nos partenaires financiers</h3>';
    echo '<div class="logos">';
    for($i = 1; $i <= $max; $i++) {
        $image = get_field("partenaire_financier_$i", $page_id);
        if($image && isset($image['url'])){
            echo '<div class="logo-item financier">';
            echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) .' ">';
            echo '</div>';
        }
    }
    echo '</div></div>';
    echo '</div>';
}

/* 
############################################# 
            LIEUX BUS DENTAIRE  
#############################################
*/

function creer_post_type_lieux() {
    register_post_type('bus_lieu', [
        'label' => 'Lieux Bus Dentaire',
        'public' => true,
        'menu_icon' => 'dashicons-location',
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
    ]);
}

add_action('init', 'creer_post_type_lieux');

/* 
############################################# 
                   PRESSE  
#############################################
*/

function creer_post_type_presse() {
    register_post_type('article_presse', [
        'label' => 'Articles Presse',
        'public' => true, 
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'supports' => ['title', 'thumbnail'],
        'has_archive' => false,
        'show_in_rest' => true, 
    ]);
}

add_action('init', 'creer_post_type_presse');

/* 
############################################# 
            FORMULAIRE DE DON  
#############################################
*/

function creer_post_type_donation() {
    register_post_type('donation', [
        'labels' => [
            'name' => 'Dons',
            'singular_name' => 'Don'
        ],
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'supports' => ['title', 'custom-fields'],
        'menu_icon' => 'dashicons-money-alt',
    ]);
}

add_action('init', 'creer_post_type_donation'); 

function enregistrer_don_wp($montant, $email, $methode, $infos_extra = []) {
    $post_id = wp_insert_post([
        'post_title' => 'Don de' .$montant. '€ - ' .$email,
        'post_type' => 'donation',
        'post_status' => 'publish'
    ]);

    if($post_id) {
        update_post_meta($post_id, '_don_montant', $montant);
        update_post_meta($post_id, '_don_email', $email);
        update_post_meta($post_id, '_don_methode', $methode);
        update_post_meta($post_id, '_don_date', current_time('mysql'));

        foreach($infos_extra as $key => $value) {
            update_post_meta($post_id, '_don_' . $key, $value);
        }
    }

    return $post_id;
}

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
                <form id="formulaire_rdv" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
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
                        <option value="Castéra-Verduzan">Castéra-Verduzan</option>
                        <option value="Montesquiou">Montesquiou</option>
                        <option value="Miradoux">Miradoux</option>
                        </select>
                        <?php
                        $planning_file = get_field('planning');
                        if($planning_file): ?>
                            <a href="<?php echo esc_url($planning_file['url']); ?>" class="button-planning" download>voir le planning</a> 
                        <?php endif; ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea placeholder="Votre message..." name="message" id="message" rows="5" required></textarea>
                    </div>
                    <input type="hidden" name="action" value="envoyer_formulaire_rdv">      
                    <button type="submit" class="submit" name="formulaire_rdv">Envoyer</button>
                </form>
                <div id="form-message"></div>
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
                        <p>Lundi matin - vendredi matin de 09h00-12h00</p>
                        <p>Mardi Mercredi Jeudi de 09h00-12h00 à 13h00-17h00</p>
                    </div>
                </div>
            </div>
        </div>
</section>
    <?php
     if(isset($_GET['message_envoye']) && $_GET['message_envoye'] === 'rdv') {
        echo '<p style="color: green; font-weight: bold;">Votre message a bien été envoyé.</p>';
    } 
    return ob_get_clean();
}

add_shortcode('formulaire_rdv', 'afficher_formulaire_rdv');

/* 
############################################# 
            FORMULAIRE CONTACT  
#############################################
*/

function afficher_formulaire_contact() {
    ob_start();
    ?>

    <form id="formulaire_contact" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
        <div class="input-group">
            <input placeholder="Nom" name="nom" id="nom" type="text" required>
            <input placeholder="Prénom" name="prenom" id="prenom" type="text" required>
        </div>
        <input placeholder="E-mail" name="email" id="email" type="email" required>
        <textarea name="message" id="message" rows="5" placeholder="Message" required></textarea>
        <input type="hidden" name="action" value="envoyer_formulaire_contact">
        <button type="submit" class="submit" name="formulaire_contact">Envoyer</button>
    </form>
    <div id="form-message"></div>

    <?php
    if(isset($_GET['message_envoye']) && $_GET['message_envoye'] === 'contact') {
        echo '<p style="color: green; font-weight: bold;">Votre message a bien été envoyé.</p>';
    } 
    return ob_get_clean();
}

add_shortcode('formulaire_contact', 'afficher_formulaire_contact');


/* 
############################################# 
            Traitement Formulaire 
#############################################
*/

add_action('admin_post_nopriv_envoyer_formulaire_rdv', 'traitement_formulaire_rdv');
add_action('admin_post_envoyer_formulaire_rdv', 'traitement_formulaire_rdv');

function traitement_formulaire_rdv() {
    $nom = sanitize_text_field($_POST['nom']);
    $prenom = sanitize_text_field($_POST['prenom']);
    $email = sanitize_email($_POST['email']);
    $numero = sanitize_text_field($_POST['numero']);
    $commune = sanitize_text_field($_POST['commune']);
    $message = sanitize_textarea_field($_POST['message']);

    $to = get_option('admin_email');
    $subject = 'Urgent : Prise de rendez-vous sur site Internet';
    $body = "
            <h2>Demande de rendez-vous :</h2>
            <p><strong>Nom :</strong>$nom</p>
            <p><strong>Prénom :</strong>$prenom</p>
            <p><strong>Email :</strong>$email</p>
            <p><strong>Téléphone :</strong>$numero</p>
            <p><strong>Commune :</strong>$commune</p>
            <p><strong>Message :</strong><br>$message</p>
        ";

    wp_mail($to, $subject, $body);

    wp_redirect(add_query_arg('message_envoye', 'rdv', wp_get_referer()));
    exit;
}

add_action('admin_post_nopriv_envoyer_formulaire_contact', 'traitement_formulaire_contact');
add_action('admin_post_envoyer_formulaire_contact', 'traitement_formulaire_contact');

function traitement_formulaire_contact() {
    $nom = sanitize_text_field($_POST['nom']);
    $prenom = sanitize_text_field($_POST['prenom']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    $to = get_option('admin_email');
    $subject = 'Contact via Site Internet';
    $body = "
            <h2>Contact :</h2>
            <p><strong>Nom :</strong>$nom</p>
            <p><strong>Prénom :</strong>$prenom</p>
            <p><strong>Email :</strong>$email</p>
            <p><strong>Message :</strong><br>$message</p>
        ";

    wp_mail($to, $subject, $body);

    wp_redirect(add_query_arg('message_envoye', 'contact', wp_get_referer()));
    exit;
}

?>

