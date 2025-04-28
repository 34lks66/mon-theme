<?php get_header();?>

<?php require_once('header.php'); ?>
<?php require_once('head.php'); ?>
<?php require_once('menu.php'); ?>

<div class="content">

<section class="hero">
    <div class="hero-content">
        <h1 class="hero-title">Contactez-nous</h1>
    </div>
</section>

<section class="contactez-nous">
    <?php echo do_shortcode('[formulaire_contact]'); ?>
</section>

<section class="informations">
    <h2>DELEGATION TERRITORIALE DU GERS</h2>
    <div class="info-grid">
        <div class="info-card">
            <p>11 Rue DU DOCTEUR SAMALENS <br>32000 AUCH</p>
        </div>
        <div class="info-card">
            <p style="color: #e30613;">Contact</p>
            <div style="display: flex; align-items: center;">
                <i class="fa-solid fa-phone" style="color: #e30613; margin-right: 5px;"></i>
                <p>05 62 63 57 90</p>
            </div>
            <div style="display: flex; align-items: center;">
                <i class="fa-regular fa-envelope" style="color: #e30613; margin-right: 5px;"></i>
                <p>Contacter par mail</p>
            </div>
        </div>
        <div class="info-card">
            <p style="color: #e30613;">Horaires</p>
            <p>Lundi 8h00-11h00 14h00-17h00</p>
            <p>Mercredi 8h00-11h00 14h00-17h00</p>
            <p>Jeudi 8h00-11h00 14h00-17h00</p>
        </div>
    </div>
</section>

</div>

<?php include_once('footer.php'); ?>
<?php get_footer(); ?>

<style>

    .hero {
        position: relative;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero/contact.jpg');
        background-size: cover;
        background-position: center;
        height: 60vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
    }

    .hero-title {
        font-size: 3rem;
        text-align: center;
        margin: 0;
    }

     /* 
    ############################################# 
                    formulaire  
    #############################################
    */

    .contactez-nous {
        max-width: 800px;
        margin: 0 auto;
        padding: 2rem;
    }

    .contactez-nous form {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .input-group {
        display: flex;
        gap: 1.5rem;
        width: 100%;
    }

    .input-group input {
        flex: 1;
    }

    .contactez-nous input,
    .contactez-nous textarea {
        padding: 1rem;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
        width: 100%;
    }

    .contactez-nous input:focus,
    .contactez-nous textarea:focus {
        border-color: #0077b6;
        outline: none;
    }

    .contactez-nous textarea {
        resize: vertical;
        min-height: 150px;
    }

    button.submit {
        background-color: #0077b6;
        color: white;
        padding: 1rem;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    button.submit:hover {
        background-color: #0056b3;
    }

    /* 
    ############################################# 
                    informations  
    #############################################
    */

    .informations {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
    }

    .informations h2 {
        text-align: center;
        margin-bottom: 2rem;
        font-size: 2.2rem;
    }

    .info-grid {
        display: flex;
        justify-content: space-between;
        gap: 15px;
        position: relative;
    }   

    .info-card {
        flex: 1;
        min-width: 0;
        padding: 25px 20px;
        position: relative;
    }

    .info-card:not(:last-child)::after {
        content: "";
        position: absolute;
        right: -8px;
        top: 20%;
        height: 60%;
        width: 1px;
        background-color: #ddd;
    }

    .info-card p {
        margin: 0.8rem 0;
        line-height: 1.5;
    }

    .info-card:nth-child(2) p {
        transition: color 0.3s ease;
    }

    .info-card:nth-child(2) p:hover {
        color: #e30613;
        cursor: pointer;
    }

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


    /* 
    ############################################# 
                      media  
    #############################################
    */

    @media (max-width: 768px) {
        
        .hero-title {
            font-size: 2.5rem;
        }

        .input-group {
            flex-direction: column;
            gap: 1.5rem;
        }

        .contactez-nous {
            padding: 1rem;
        }

        .informations h2 {
            text-align: left;
            margin-bottom: 1rem;
            font-size: 1.7rem;
        }

        .info-grid {
        flex-direction: column;
        }
        
        .info-card:not(:last-child)::after {
            content: none;
        }
        
        .info-card:not(:last-child) {
            border-bottom: 1px solid #ddd;
            padding-bottom: 1.5rem;
            margin-bottom: 1rem;
        }

    }


</style>