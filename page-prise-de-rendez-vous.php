<?php get_header();?>

<?php require_once('head.php'); ?>
<?php require_once('menu.php'); ?>

<div class="content">

<section class="lieux">
    <div class="lieux-slider" id="slider">
        <?php 
        $query = new WP_Query([
            'post_type' => 'bus_lieu',
            'posts_per_page' => -1
        ]);
    
        while ($query->have_posts()) : $query->the_post();
            $image = get_field('photos_villes');
            if (is_array($image)) {
                $image = $image['url'];
            }
            $date = get_field('date_passage');
            $adresse = get_field('adresse_passage');
        ?>
        
        <article class="card">
            <?php if($image): ?>
                <img class="card_background" src="<?= esc_url($image);?>" alt="<?= get_the_title();?>">
            <?php else: ?>
                <div class="card_background" style="background: #ccc;"></div>
            <?php endif; ?>
            <div class="card_content | flow">
                <div class="card_content--container | flow">
                    <h2 class="card_title"><?= get_the_title(); ?></h2>
                    <p class="card_description">
                        Retrouvez nous à <?= get_the_title();?><br>
                        le <b><?= esc_html($date); ?></b><br> 
                        de 9h à 12h et de 13h30 à 17h <br>
                        <i class="fa-solid fa-location-dot"></i> : <b><?= esc_html($adresse); ?></b>.
                    </p>
                </div>
                <!-- <button class="card_button">Prendre rendez-vous</button> -->
                <a href="#rdv" class="card_button">Prendre rendez-vous</a>
            </div>
        </article>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <!-- <button id="prevSlide" class="slider-nav slider-nav--prev">&#10094;</button>
    <button id="nextSlide" class="slider-nav slider-nav--next">&#10095;</button> -->

    <button id="prevSlide" class="slider-nav slider-nav--prev" aria-label="Précédent">&#10094;</button>
    <button id="nextSlide" class="slider-nav slider-nav--next" aria-label="Suivant">&#10095;</button>
</section>

<section class="carte">
    <h2 class="section-title">Le Gers</h2>
    <?php include('carte.php'); ?>
    <br>
    <?php
    $planning_file = get_field('planning');
    if($planning_file): ?>
    <p style="text-align: center; margin: 1em 0;">
        Vous pouvez également télécharger le planning en cliquant juste ici :
        <a href="<?php echo esc_url($planning_file['url']); ?>" class="card_button_2" download>
            Télécharger le planning
        </a> 
    </p>
    <?php else: ?>
        <p style="text-align: center;">
            Planning non disponible.
        </p>
    <?php endif; ?>
    <br>
</section>

<?php echo do_shortcode('[formulaire_rdv]'); ?>

</div>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@700&display=swap");

    :root {
        --brand-color: hsl(46, 100%, 50%);
        --black: hsl(0, 0%, 0%);
        --white: hsl(0, 0%, 100%);
        --red: #e30613;
        --blue: #0077b6;
        --light-blue: #ced7d9;
        --white: #ffffff;
        --light-gray: #f8f9fa;
        /* Fonts */
        --font-title: "Montserrat", sans-serif;
        --font-text: "Lato", sans-serif;
    }

    .section-title {
        text-align: center;
        margin-bottom: 40px;
        font-size: 2rem;
        color: var(--blue);
        position: relative;
    }

    .section-title:after {
        content: '';
        display: block;
        width: 80px;
        height: 3px;
        background: var(--red);
        margin: 15px auto;
    }

    /* 
    ############################################# 
                    lieux-cards  
    #############################################
    */

    .lieux {
        position: relative;
        overflow: hidden;
        padding: 2rem;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* .lieux-slider {
        display: flex;
        transition: transform 0.8s ease-in-out;
        width: fit-content;
        gap: 20px;
    }  */

    .lieux-slider {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
        gap: 20px;
        padding: 20px 0;
    }

    .lieux-slider::-webkit-scrollbar {
        display: none;
    }

    .slider-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px; 
        height: 40px;
        border-radius: 50%;
        background: rgba(255,255,255,0.8);
        /* color: white; */
        border: none;
        font-size: 20px;
        padding: 0.5rem 1rem;
        cursor: pointer;
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
    }

    .slider-nav:hover {
        background: rgba(255, 255, 255, 1);
    }
    
    .slider-nav--prev {
        left: 10px;
    }
    
    .slider-nav--next {
        right: 10px;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    .card body,
    h2,
    p {
        margin: 0;
    }

    .card h2 {
        font-size: 1.5rem;
        font-family: var(--font-title);
        color: var(--white);
        line-height: 1.1;
    }

    .card p {
        font-family: var(--font-text);
        font-size: 0.95rem;
        line-height: 1.5;
        color: var(--white);
    }

    .flow > * + * {
        margin-top: var(--flow-space, 1em);
    }

    .card {
        flex: 0 0 calc(100% / 4);
        transition: all 0.3s ease;
        display: grid;
        place-items: center;
        max-width: 21.875rem;
        height: 30rem;
        margin: 0px;
        overflow: hidden;
        border-radius: 0.625rem;
        box-shadow: 0.25rem 0.25rem 0.5rem rgba(0, 0, 0, 0.25);
    }

    .card > * {
        grid-column: 1 / 2;
        grid-row: 1 / 2;
    }

    .card_background {
        object-fit: cover;
        max-width: 100%;
        height: 100%;
    }

    .card_content {
        --flow-space: 0.9375rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-self: flex-end;
        height: 55%;
        padding: 12% 1.25rem 1.875rem;
        background: linear-gradient(
            180deg,
            hsla(0, 0%, 0%, 0) 0%,
            hsla(0, 0%, 0%, 0.3) 10%,
            hsl(0, 0%, 0%) 100%
        );
    }

    .card_content--container {
        --flow-space: 1.25rem;
    }

    .card_title {
        position: relative;
        width: fit-content;
        width: -moz-fit-content; /* Préfixe nécessaire pour Firefox  */
    }

    .card_title::after {
        content: "";
        position: absolute;
        height: 0.3125rem;
        width: calc(100% + 1.25rem);
        bottom: calc((1.25rem - 0.5rem) * -1);
        left: -1.25rem;
        background-color: var(--brand-color);
    }

    .card_button {
        padding: 0.75em 1.6em;
        width: fit-content;
        width: -moz-fit-content; /* Préfixe nécessaire pour Firefox  */
        font-variant: small-caps;
        font-weight: bold;
        border-radius: 0.45em;
        border: none;
        background-color: var(--brand-color);
        font-family: var(--font-title);
        font-size: 1.1rem;
        color: var(--black);
        text-decoration: none;
    }

    .card_button:focus {
        outline: 2px solid black;
        outline-offset: -5px;
    }

    .card_button_2 {
        display: inline-block;
        padding: 0.65em 1.3em;
        width: fit-content;
        width: -moz-fit-content; /* Préfixe nécessaire pour Firefox  */
        font-weight: bold;
        border-radius: 0.60em;
        border: none;
        background-color: var(--red);
        font-size: 1.1rem;
        color: white;
        text-decoration: none;
    }

    /* 
    ############################################# 
                 formulaire de rdv 
    #############################################
    */

    .contact-container {
        max-width: 1100px;
        margin: 0 auto;
        display: flex;
        background-color: white;
        min-height: 500px;
        padding: 0;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        overflow: hidden;
        flex-direction: row-reverse;
    }

    .formulaire {
        width: 60%;
        padding: 40px;
    }

    .formulaire form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .formulaire input, textarea {
        margin: 10px 0;
        padding: 10px;
        border: none;
        outline: none;
        border-bottom: 2px solid #e4e4ec;
        transition: 0.2s;
        width: 100%;
        background: transparent;
    }

    .formulaire input:hover {
        border-bottom: 2px solid var(--blue);     
    }

    .formulaire input:focus {
        border-bottom: 2px solid var(--blue);
    }   

    .formulaire textarea:hover {
        border-bottom: 2px solid var(--blue);     
    }

    .formulaire textarea:focus {
        border-bottom: 2px solid var(--blue);
    }   

    .dual-input {
        flex-direction: row;
        gap: 20px;
    }

    .dual-input .input-wrapper {
        flex: 1;
    }

    .input-wrapper {
        position: relative;
    }

    label {
        font-weight: 500;
        color: #333;
        font-size: 0.9rem;
    }

    input, textarea {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #e0e0e0;
        border-radius: 6px;
        font-size: 1rem;
        transition: all 0.3s;
    }

    textarea {
        resize: vertical;
        min-height: 120px;
    }

    .submit {
        background-color: var(--blue);
        color: white;
        border: none;
        padding: 15px 30px;
        border-radius: 6px;
        font-size: 1rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .submit:hover {
        background-color: #e30613;
        transform: translateY(-2px);
        /* box-shadow: 0 5px 15px rgba(31, 179, 191, 0.3); */
    }

    .formulaire-box {
        width: 40%;
        background-color: var(--blue);
        padding: 40px;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .contact-info {
        max-width: 300px;
        margin: 0 auto;
    }

    .contact-info h3 {
        font-size: 1.5rem;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
        font-size: 1rem;
    }

    .contact-item i {
        font-size: 1.2rem;
        width: 24px;
        text-align: center;
    }

    .contact-hours {
        margin-top: 40px;
        padding-top: 20px;
        border-top: 1px solid rgba(255,255,255,0.2);
    }

    .contact-hours h4 {
        margin-bottom: 15px;
        font-size: 1.1rem;
    }

    .success-message, .error-message {
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 6px;
    }

    .success-message {
        background-color: #d4edda;
        color: #155724;
    }

    /* .error-message {
        background-color: #f8d7da;
        color: #721c24;
    } */

    .error {
        border-color: #ff3860 !important;
    }

    .error-message {
        color: #ff3860;
        font-size: 0.8em;
        margin-top: 0.25rem;
    }

    /* Style pour le bouton pendant l'envoi */
    button[disabled] {
        opacity: 0.7;
        cursor: not-allowed;
    }

    .button-planning {
        display: inline-block;
        align-items: center;
        gap: 8px;
        padding: 12px 30px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        background-color: var(--red);
        color: white;
    }

    .button-planning:hover {
        background-color: #c0050f;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(227, 6, 19, 0.3);
    }

    /* 
    ############################################# 
                        media  
    #############################################
    */

    @media (max-width: 768px) {
        .section-title {
            font-size: 1.45rem;
        }

        .card {
            flex: 0 0 100% 
        }

        .card_button_2 {
            display: block;
            font-size: 1rem; 
            padding: 0.5em;
            margin: 0.5rem auto; 
        }

        .contact-container {
            margin: 0 -20px;
            flex-direction: column;
            min-height: auto;
        }

        .formulaire {
            width: 100%;
            padding: 20px;
        }

        .dual-input {
            flex-direction: column;
        }

        .dual-input .input-wrapper {
            width: 100%;
        }

        .submit {
            width: 100%;
        }

        .formulaire-box {
            display: none;
        }
        
    }

</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.getElementById('slider');
        const prevButton = document.getElementById('prevSlide');
        const nextButton = document.getElementById('nextSlide');
        const cards = document.querySelectorAll('.card');
        const cardWidth = cards[0]?.offsetWidth + 20;

        if (!slider || !prevButton || !nextButton || cards.length === 0) return;

        let autoSlideInterval;
        let isScrolling = false;
        let direction = 1;

        function scrollSlider(offset) {
            isScrolling = true; 
            slider.scrollBy({
                left: offset, 
                behavior: 'smooth'
            });

            clearInterval(autoSlideInterval);
            setTimeout(() => {
               isScrolling = false;
               startAutoSlide(); 
            }, 1000);
        }

        function autoSlide() {
            if(isScrolling) return;

            const atStart = slider.scrollLeft <= 0;
            const atEnd = slider.scrollLeft >= slider.scrollWidth - slider.clientWidth - 1;

            if(atEnd) {
                direction = -1;
            } else if(atStart){
                direction = 1;
            }

            scrollSlider(cardWidth * direction);
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(autoSlide, 4000);
        }

        prevButton.addEventListener('click', () => {
            scrollSlider(-cardWidth);
        });

        nextButton.addEventListener('click', () => {
            scrollSlider(cardWidth);
        });

        slider.addEventListener('mouseenter', () => {
            clearInterval(autoSlideInterval);
        });

        slider.addEventListener('mouseleave', startAutoSlide);

        startAutoSlide();
    });

    document.querySelector('.card_button').addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        targetElement.scrollIntoView({
            behavior: 'smooth'
        });
    });

    // document.getElementById('contactForm').addEventListener('submit', function(event) {
    //     const form = event.target;
    //     const inputs = form.querySelectorAll('input[required], textarea[required]');
    //     let isValid = true;
        
    //     inputs.forEach(input => {
    //         if(!input.value.trim()) {
    //             input.style.borderColor = '#dc3545';
    //             isValid = false;
    //         } else {
    //             input.style.borderColor = '#e0e0e0';
    //         }
    //     });
        
    //     if(!isValid) {
    //         event.preventDefault();
    //         Swal.fire({
    //             icon: 'error',
    //             title: 'Champs manquants',
    //             text: 'Veuillez remplir tous les champs obligatoires',
    //         });
    //     }
    // });

    // document.getElementById('contactForm').addEventListener('submit', function(event) {
    //     // Empêche l'envoi du formulaire par défaut
    //     event.preventDefault(); 

    //     const email = document.getElementById('email').value;
    //     const nom = document.getElementById('nom').value;
    //     const prenom = document.getElementById('prenom').value;
    //     const message = document.getElementById('message').value;

    //     // Vérification que tous les champs sont remplis
    //     if (email && nom && prenom && message) {
    //         // Envoi du formulaire
    //         this.submit(); // Envoie le formulaire après la validation

    //         // Affichage d'une alerte de succès
    //         Swal.fire({
    //             icon: 'success',
    //             title: 'Message envoyé',
    //             text: 'Votre message a bien été envoyé.',
    //             showConfirmButton: false,
    //             timer: 1500
    //         });
    //     } else {
    //         // Affichage d'une alerte d'erreur si un champ est manquant
    //         Swal.fire({
    //             icon: 'error',
    //             title: 'Erreur',
    //             text: 'Veuillez remplir tous les champs.',
    //         });
    //     }
    // });
</script>

<?php include_once('footer.php'); ?>
<?php get_footer(); ?>