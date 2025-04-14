<?php
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
        $images = [
            get_field('image_01', $ville_id),
            get_field('image_02', $ville_id),
            get_field('image_03', $ville_id),
        ];
        $picture = $images['sizes']['my_custom_size'];


        // echo "<b>" . esc_html(get_the_title()) . "</b><br>";
        // echo "<p>" . esc_html(get_the_content()) . "</p>";
        $output = '<div class="popup-inner">';
        $output .= '<h3>' . esc_html(get_the_title()) . '</h3>';
        $output .= '<div class="popup-content">';
        $output .= '<p>' . esc_html(get_the_content()) . '</p>';

        if($planning){
            // echo "<p><b>Planning : </b><br>" . nl2br(esc_html($planning)) . "</p>";
            $output .= '<div class="planning-section">';
            $output .= '<h4>Planning : </h4>';
            $output .= '<p>' . nl2br(esc_html($planning)) . '</p>';
            $output .= '</div>';
        } else {
            echo "<p><b>Planning : </b> Non défini.</p>";
        }

        // //if($images) {
        // if(!empty($images) && is_array($images)) {
        //     echo "<div style='display: flex; gap: 5px;'>";
        //     foreach($images as $image){
        //         if(isset($image['url'])){
        //             //echo "<img src='" . esc_url($image['url']) . "' width='50' height='50'>";
        //             echo "<img src='" . esc_url($image['url']) . "' width='50' height='50' style='border: 1px solid #ccc;'>";
        //         }
        //     }
        //     echo "</div>";
        // } else {
        //     echo "<p>Aucune images disponible</p>";
        // }

        // if($images){
        //     echo '<img src="' . esc_url($picture) . '"style="border: 1px solid #ccc; max-width: 100%; height: auto;">';
        // } else {
        //     echo "<p>Aucune images disponible</p>";
        // }

          $hasImage = false;
          foreach($images as $image) {
              if($image){
                $hasImage = true;
                //   echo '<img src="' . esc_url($image['sizes']['medium']) . '"style="border: 1px solid #ccc; max-width: 100%; height: auto;">';
                $output .= '<div class="popup-gallery">';
                $output .= '<img src="' . esc_url($image['sizes']['medium']) .'" alt="' . esc_attr(get_the_title()) .'">';
                $output .= '</div>';
              }
          } 
        
          if(!$hasImage){  
              //echo "<p>Aucune image disponible</p>";
              $output .= '<p class="no-image">Acune image disponible</p>';
          }

          $output .= '</div></div>';
          echo $output;    
    } else {
        //echo "Aucune information disponible :)";
        echo '<div class="popup-error">Aucuune information disponible</div>';
    }

    wp_reset_postdata();
    die();

}

add_action('wp_ajax_get_ville_info', 'get_ville_info');
add_action('wp_ajax_nopriv_get_ville_info', 'get_ville_info');

add_image_size('my_custom_size', 60, 60, true);

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

// Création automatique des champs dans le groupe ACF (logos partenaires)


?>