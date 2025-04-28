<?php require_once('header.php'); ?>
<?php require_once('head.php'); ?>

<?php require_once('menu.php'); ?>

<div class="content">

<div class="homepage">
    <section class="hero" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hero/index.jpg');">
        <div class="hero-content">
            <h1>Bus Dentaire Gersois</h1>
            <h2>Soins dentaires gratuits sur RDV</h2>
            <div class="hero-buttons">
                <a href="<?php echo site_url('/lieux-planning');?>" class="btn btn-primary">Prendre RDV</a>
                <a href="#lieux" class="btn btn-secondary">Voir les lieux</a>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon" style="background-color: #0077b6;">
                        <i class="fas fa-tooth"></i>
                    </div>
                    <h3>Consultations</h3>
                </div>
                <div class="service-card">
                    <div class="service-icon" style="background-color: #e30613;">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <h3>Urgences</h3>
                </div>
                <div class="service-card">
                    <div class="service-icon" style="background-color: #0077b6;">
                        <i class="fas fa-teeth-open"></i>
                    </div>
                    <h3>Soins des dents et des racines</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="lieux">
        <h2 class="section-title">Où nous trouver ?</h2>
        <center><h3>Le Bus Dentaire se déplace dans 10 communes rurales du Gers :</h3></center>
        <?php include('carte.php'); ?>
    </section>

    <br><br>

    <section class="image">
        <div class="container">
            <h2 class="section-title">Notre Bus Dentaire</h2>
            <center><p>Le bus dentaire dispose de tout l'équipement nécessaire pour fournir des soins dentaires, allant du simple détartrage à l'extraction des dents. <br>Il est équipé d'un fauteuil dentaire, d'un système de radiologie, des consommables dentaires et de divers instruments spécialisés.</p></center><br>
            <div class="image-grid">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bus_presentation/bus2.jpg" alt="Bus dentaire">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bus_presentation/bus1.jpg" alt="Bus dentaire">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bus_presentation/bus3.jpg" alt="Bus dentaire">
            </div>
        </div>
    </section>

    <br><br>

    <section class="support">
        <div class="container">
            <h2 class="section-title">Comment nous soutenir ?</h2>
            <p style="text-align: center;">Votre soutient nous permet de continuer à offir des soins dentaires gratuits aux populations vulnérables et isolées</p><br>
            <div class="support-content">
                    <div class="support-option" style="background-color: #e30613; color: white;">
                        <i class="fas fa-hand-holding-heart"></i>
                        <h3>Faire un don</h3>
                        <a href="<?php echo site_url('/faire-un-don');?>" class="btn btn-light">Je donne</a>
                    </div>
            </div>
        </div>
    </section>

    <section class="press">
        <div class="container">
            <h2 class="section-title">La presse parle de nous !</h2>
            <div class="press-grid">
                <?php
                $press_query = new WP_Query([
                    'post_type' => 'article_presse',
                    'posts_per_page' => -1
                ]);
                
                if($press_query->have_posts()) :
                    while($press_query->have_posts()) : $press_query->the_post();
                    $lien = get_field('lien_article');
                    $image = get_field('image_article');
                    if (is_array($image)) {
                        $image = $image['url'];
                    }
                    $titre = get_field('titre_article');
                ?>
                <a href="<?= esc_url($lien);?>" target="_blank" class="press-card" style="background-image: url('<?= esc_url($image);?>');">
                    <div class="press-overlay">
                        <h3><?= esc_html($titre); ?></h3>
                        <span>Lire la suite</span>
                    </div>
                </a>
              <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </section>
    <br>

</div>

<?php include_once('footer.php'); ?>

<style>
    :root {
        --red: #e30613;
        --blue: #0077b6;
        --light-blue: #ced7d9;
        --white: #ffffff;
        --light-gray: #f8f9fa;
    }

    .homepage {
        font-family: 'Poppins', sans-serif;
        color: #333;
        line-height: 1.6;
    }

    .container {
        width: 85%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .section-title {
        text-align: center;
        margin-bottom: 40px;
        font-size: 2rem;
        color: var(--red);
        position: relative;
    }

    .section-title:after {
        content: '';
        display: block;
        width: 80px;
        height: 3px;
        background: var(--blue);
        margin: 15px auto;
    }

    .hero {
        height: 70vh;
        background-size: 100% auto !important;
        background-position: center !important;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        padding: 0 20px;
    }

    .hero-content h1 {
        font-size: 3rem;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    .hero-content h2 {
        font-size: 1.8rem;
        margin-bottom: 30px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    .btn {
        display: inline-block;
        padding: 12px 30px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        margin: 0 10px;
        transition: all 0.3s ease;
    }

    .btn-primary {
        background-color: var(--red);
        color: white;
    }

    .btn-primary:hover {
        background-color: #c00511;
        transform: translateY(-3px);
    }

    .btn-secondary {
        display: inline-block;
        background-color: var(--blue);
        color: white;
    }

    .btn-secondary:hover {
        background-color: #00629c;
        transform: translateY(-3px);
    }

    .btn-light {
        background-color: white;
        color: var(--red);
    }

    .btn-light:hover {
        background-color: var(--blue);
        transform: translateY(-3px);
    }

    .services {
        padding: 80px 0;
        background-color: white;
    }

    .services-grid {
        display: flex;
        justify-content: space-between;
        gap: 15px;
    }

    .service-card {
        flex: 1;
        min-width: 0;
        text-align: center;
        padding: 20px 10px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-10px);
    }

    .service-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 30px;
    }

    .image {
        display: flex;
        justify-content: center;
    }

    .image-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .image-grid img {
        width: 100%;
        height: 450px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        transition: tranform 0.3s ease;
    }

    .image-grid img:hover {
        transform: scale(1.03);
    }

    .support {
        padding: 60px 0;
    }

    .support-content {
        text-align: center;
        max-width: 450px;
        margin: 0 auto;
    }

    .support-option {
        padding: 30px;
        border-radius: 10px;
        text-align: center;
    }

    .support-option i {
        font-size: 40px;
        margin-bottom: 20px;
        color: white;
    }

    .press-grid {
        display: flex;
        margin-left: -10px;
        width: auto;
        /* grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px; */
    }

    .press-card {
        width: calc(33.333% - 20px);
        margin-left: 10px;
        margin-bottom: 20px;
        background-size: cover;
        background-position: center;
        border-radius: 10px;
        color: white;
        text-decoration: none;
        overflow: hidden;
        position: relative;
        min-height: 240px;
        transition: transform 0.3s ease;
    
        /* position: relative;
        display: block;
        height: 280px;
        background-size: cover;
        background-position: center;
        overflow: hidden;
        text-decoration: none;
        color: white;
        transition: transform 0.3s ease; */
    }

    .press-card:hover {
        transform: scale(1.02);
    }

    .press-overlay {
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 20px;
        background: linear-gradient(transparent, rgba(0,0,0,0.7), transparent);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        height: 100%;
    }

    .press-overlay h3 {
        font-size: 1.1rem;
        margin: 0 0 10px;
        font-weight: bold;
    }

    .press_overlay span {
        font-size: 0.9rem;
        color: #fff;
        text-decoration: underline;
    }

    @media (max-width: 1024px) {
        .press-card {
            width: calc(50% - 20px);
        }
    }

    @media (max-width: 600px) {
        .press-card {
            width: 100%;
            margin-left: 0;
        }
    }
    
    @media (max-width: 768px) {
        .hero {
            height: 60vh;
        }

        .hero-content h1 {
            font-size: 2rem;
        }
        
        .hero-content h2 {
            font-size: 1.4rem;
            margin-bottom: 45px;
        }
        
        .hero-buttons {
            display: flex;
            flex-direction: column;
        }
        
        .section-title {
            font-size: 1.35rem;
        }

        .btn {
            margin: 5px 0;
            width: 100%;
            max-width: 250px;
        }

        .services {
            padding: 80px 0;
            background-color: white;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;  
        }

        .image-grid img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
            transition: tranform 0.3s ease;
        }
    }
    
</style>

<script>
    document.querySelector('.btn-secondary').addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        targetElement.scrollIntoView({
            behavior: 'smooth'
        });
    });

    document.querySelector('.btn-primary').addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        targetElement.scrollIntoView({
            behavior: 'smooth'
        });
    });

    src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"
    document.addEventListener("DOMContentLoaded", function() {
        const grid = document.querySelector('.press-grid');
        if(grid){
            new Masonry(grid, {
                itemSelecor: '.press-card',
                columnWidth: '.press-card',
                percentPosition: true,
                gutter: 20
            });
        }
    });
</script>

