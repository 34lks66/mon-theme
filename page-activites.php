<?php get_header();?>

<?php require_once('header.php'); ?>
<?php require_once('head.php'); ?>
<?php require_once('menu.php'); ?>

<div class="content">

<section class="hero">
    <div class="hero-content">
        <h1 class="hero-title">Qui sommmes-nous ?</h1>
        <p class="hero-subtitle">Rendre les soins dentaires accessibles aux Gersois, dans les zones rurales isolées</p>
    </div>
</section>

<section class="presentation">
    <div class="presentation-content">
        <h2 class="section-title">Notre Mission</h2>
        <p style="text-align: center;">Le Bus Dentaire Gersois incarne une solution mobile pour offrir des soins dentaires <i style="color: #e30613;">gratuits</i> aux populations isolées.</p>
            <div class="presentation-c" style="background-color: #ffebee;">
                <h4>Contexte</h4>
                <!-- <p>Face à la désertification médicale dans le Gers, seulement un dentiste pour 1 641 habitants et 25% des habitants renoncent aux soins faute de praticiens ou de mobilité.</p> -->
                <p>Face à la désertification médicale dans le Gers, de nombreux habitants renoncent à se faire soigner, faute de praticiens disponibles à proximité ou simplement problème de mobilité.</p> 
                <div class="box-container">
                    <div class="box">
                        <div class="pourcent">
                            <svg>
                                <circle cx="70px" cy="70px" r="70px"></circle>
                                <circle cx="70px" cy="70px" r="70px"></circle>
                            </svg>
                            <span>1</span>
                        </div>
                        <h4>dentiste</h4>
                        <p>pour 1 641 habitants</p>
                    </div>
                    <div class="box">
                        <div class="pourcent">
                            <svg>
                                <circle cx="70px" cy="70px" r="70px"></circle>
                                <circle cx="70px" cy="70px" r="70px"></circle>
                            </svg>
                            <span>60,9</span>
                        </div>
                        <h4>praticiens</h4>
                        <p>pour 100 000 habitants</p>
                    </div>
                    <div class="box">
                        <div class="pourcent">
                            <svg>
                                <circle cx="70px" cy="70px" r="70px"></circle>
                                <circle cx="70px" cy="70px" r="70px"></circle>
                            </svg>
                            <span>50%</span>
                        </div>
                        <h4>des communes gersoises</h4>
                        <p>sans cabinet dentaire</p>   
                    </div>
                    <div class="box">
                        <div class="pourcent">
                            <svg>
                                <circle cx="70px" cy="70px" r="70px"></circle>
                                <circle cx="70px" cy="70px" r="70px"></circle>
                            </svg>
                            <span>25%</span>
                        </div>
                        <h4>des habitants</h4>
                        <p>renoncent aux soins</p>
                    </div>
                    <div class="box">
                        <div class="pourcent">
                            <svg>
                                <circle cx="70px" cy="70px" r="70px"></circle>
                                <circle cx="70px" cy="70px" r="70px"></circle>
                            </svg>
                            <span>8</span>
                        </div>
                        <h4>mois d’attente</h4>
                        <p>pour obtenir un rendez-vous</p>
                    </div>
                </div>
            </div>
            <br>
                <div class="presentation-c" style="background-color: #e3f2fd ;">
                    <h4 style="color: #0077b6;font-size: 20px;">Notre Engagement</h4>
                    <p>Notre bus dentaire apporte une solution rapide pour répondre à l'urgence en promulguant des soins spécifiques aux populations isolées.
                    Chaque action du Bus Dentaire est guidée par les 7 principes de la <b style="color: #e30613;">Croix-Rouge</b> : <br><b>Humanité, Impartialité, Neutralité, Indépendance, Volontariat, Unité et Universalité.</b></p> 
                </div>
    </div>
</section>
<br>
<section class="timeline">
    <h2 class="section-title">Notre Histoire</h2>
    <div class="timeline-content">
        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-item-t">Octobre 2022</div>
            <h3>Lancement du projet</h3>
            <p>Début de l'initiative avec une vision claire : répondre à l'urgence dentaire auprès des populations isolées du Gers, en réalisant des soins et un suivi régulier.</p> 
        </div>
        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-item-t">2022 - 2023</div>
            <h3>Phase de préparation</h3>
            <p>Aménagement du bus avec tout l'équipement nécessaire et établissement des partenariats.</p>
        </div>
        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-item-t">Mai 2023</div>
            <h3>Premières consultations</h3>
            <p>Début des soins après la signature de la convention avec la faculté dentaire de Toulouse.</p>
        </div>
    </div>
</section>
<br>
<section class="team-section">
    <div class="team-content">
        <div class="container">
            <h2 class="section-title">Fonctionnement & Équipe</h2>
            <div class="bus-card">
                <h3 class="bus-title">Équipement du bus - Matériel médical</h3>
                <div class="bus-grid">
                    <div class="bus-features">
                        <ul class="feature-list">
                            <li>Fauteuil dentaire</li>
                            <li>Système de radiologie</li>
                            <li>Instruments spécialisés</li>
                            <li>Consommables dentaires</li>
                        </ul>
                    </div>
                    <div class="bus-image">
                        <!-- --- IMAGE ---  -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bus_interieur/bus_interieur_5.jpg" alt="Bus dentaire">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bus_interieur/bus_interieur_1.jpg" alt="Bus dentaire">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bus_interieur/bus_interieur_3.jpg" alt="Bus dentaire">
                    </div>
                </div>
            </div>
        </div>
        <div class="team-cards">
            <div class="team-card">
                <div class="card-icon">
                    <i class="fa-solid fa-user-gear" style="color: #e30613;"></i>
                </div>
                <h3>Équipe Administrative</h3>
                <p>Un coordinateur, une secrétaire et la direction de la Croix-Rouge du Gers assurent la gestion quotidienne.</p>
            </div>
            <div class="team-card">
                <div class="card-icon">
                    <i class="fa-solid fa-stethoscope" style="color: #e30613;"></i>
                </div>
                <h3>Équipe Médicale</h3>
                <p>Une équipe de dentistes superviseurs bénévoles et des étudiants en dernière année de la Faculté Dentaire de Toulouse.</p>
            </div>
            <div class="team-card">
                <div class="card-icon">
                    <i class="fa-solid fa-truck" style="color: #e30613;"></i>
                </div>
                <h3>Équipe Logistique</h3>
                <p>Personnel de la Croix-Rouge assurant le bon fonctionnement et la maintenance du bus.</p>
            </div>
        </div>
        <div class="operation-card">
            <div class="operation-header">
                <i class="fa-regular fa-calendar" style="color: #e30613;"></i>
                <h3>Mode de fonctionnement</h3>
            </div>
            <p>Le bus se déplace 2 à 3 fois par semaine principalement les lundis, mardis et mercredis dans 10 communes rurales isolées du Gers</p>
            <a href="<?php echo site_url('/prise-de-rendez-vous');?>" class="btn btn-primary">voir le planning</a>
        </div>
    </div>
</section>

<section class="soins">
    <div class="soins-content">
        <h2 class="section-title">Que propose le Bus Dentaire ?</h2>
        <p class="soins-intro">Le Bus Dentaire vous offre des soins dentaires <b style="color: #e30613;">gratuits</b> et <b style="color: #e30613;">accessibles à tous</b></p>
        <!-- <p class="soins-intro">allant du <b style="color: #e30613;">détartrage à l'extraction des dents</b> sauf prothèse</p> -->
        <div class="soins-container">
            <div class="soins-card-row">
                <div class="soins-card">
                    <h4><i class="fas fa-tooth"></i> Soins Préventifs</h4>
                    <ul>
                        <li>Contrôle bucco-dentaire</li>
                        <li>Conseils d'hygiène bucco-dentaire</li>
                        <li>Détartrage</li>
                    </ul>
                </div>
                <div class="soins-card">
                    <h4><i class="fas fa-syringe"></i> Soins Curatifs</h4>
                    <ul>
                        <li>Urgence de la douleur</li>
                        <li>Traitement des caries</li>
                        <li>Soins des gencives</li>
                        <li>Extraction des dents</li>
                        <li>Rescellement de couronnes ou de bridge</li>
                        <li>Retouche d'appareil</li>
                        <b><li style="color: #e30613;">Pas de prothèse dentaire, ni d'implant</li></b>
                    </ul>
                </div>
            </div>
            <div class="soins-card-row">
                <div class="soins-card">
                    <h4><i class="fas fa-shield-alt"></i> Prévention et Éducation</h4>
                    <ul>
                        <li>Sensibilisation à l’importance du brossage et des soins réguliers.</li>
                        <li>Une journée de prévention mensuelle dans chaque commune d'intervention.</li> 
                        <!-- <li>Sessions éducatives pour apprendre aux plus jeunes à protéger leurs dents.</li> -->
                    </ul>
                </div>
                <div class="soins-card">
                    <h4><i class="fas fa-heart"></i> Soins Gratuits et Accessibles à Tous !</h4>
                    <ul>
                        <li>Tous nos soins sont entièrement gratuits.</li>
                        <li>Une équipe bienveillante prête à vous accueillir et répondre à vos besoins.</li>
                        <li>Une prise en charge rapide et un suivi régulier de tous les actes réalisés sur place.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<br>

<section class="impact">
    <div class="container">
        <h2 class="section-title">L'impact du Bus Dentaire en chiffres</h2>

        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number" style="color: #e30613;">1000+</div>
                <div class="stat-label">Patients soignés et accompagnés</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" style="color: #0077b6;">9</div>
                <div class="stat-label">Communes rurales isolées</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" style="color: #e30613;">1250+</div>
                <div class="stat-label">Actes de soins réalisés</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" style="color: #0077b6;">14 000 km.</div>
                <div class="stat-label">parcourus sur 9 communes</div>
            </div>
        </div>

        <div class="impact-layout">
            <!-- Témoignage 1 -->
             <div class="testimonial-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/temoignage/temoignage_1.jpeg')">
                <div class="testimonial-content">
                    <div class="quote">“</div>
                    <p class="text">Grâce au Bus Dentaire, j’ai retrouvé confiance et l’envie de prendre soin de ma santé.</p>
                    <span class="author">Léa, 36 ans – Le Houga</span>
                </div>
             </div>

             <!-- Témoignage 2 -->
              <div class="testimonial-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/temoignage/temoignage_2.jpg')">
                <div class="testimonial-content">
                    <div class="quote">“</div>
                    <p class="text">Cette expérience m’a convaincue de m’installer dans le Gers, pour recréer un réseau de soins de proximité.</p>
                    <span class="author">Manon, 23 ans – <strong>Etudiante en 6e année de dentaire</strong></span>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

<?php get_footer(); ?>

<style>
      :root {
        --red: #e30613;
        --blue: #0077b6;
        --light-blue: #ced7d9;
        --white: #ffffff;
        --light-gray: #f8f9fa;
    }

    .section-title {
        text-align: center;
        margin-bottom: 25px;
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

     /* 
    ############################################# 
                hero-section  
    #############################################
    */

    .hero {
        position: relative;
        height: 80vh;
        background-size: 100% auto !important;
        background-position: center 60% !important;
        min-height: 500px;
        background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), 
                    url('<?php echo get_template_directory_uri(); ?>/assets/images/hero/activite.jpg') center/cover no-repeat;
        background-color: var(--blue);
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        padding: 0 20px;
        overflow: hidden;
        animation: fadeIn 1.5s ease-out;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 800px;
        padding: 0 20px;
        transform: translateY(20px);
        opacity: 0;
        animation: slideUp 1s ease-out 0.5s forwards;
    }

    .hero-title {
        font-size: clamp(2.5rem, 5vw, 4rem);
        margin-bottom: 20px;
        font-weight: 700;
        letter-spacing: 1px;
        text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
        line-height: 1.2;
    }
    
    .hero-subtitle {
        font-size: clamp(1.2rem, 2vw, 1.8rem);
        margin-bottom: 40px;
        font-weight: 700;
        text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
        line-height: 1.5;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes slideUp {
        from { 
            transform: translateY(20px);
            opacity: 0;
        }
        to { 
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* 
    ############################################# 
                presentation-section  
    #############################################
    */

    .presentation-content {
        background-color: white;
        border-radius: 0.5rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        padding: 2rem;
    }

    .presentation-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }

    .presentation-c {
        padding: 1.5rem; 
        text-align: center;
        border-radius: 0.5rem;
        opacity: 1; 
    }

    .presentation-c h4 {
        color: var(--red);
        font-size: 20px;
    }

    .presentation-content p {
        font-size: 1.125rem; 
        color: #616161;
        margin-bottom: 1.5rem;
    }

    .box-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .box {
        padding: 3em 3em;  
        flex-direction: column;
        position: relative; 
        align-items: center;
        opacity: 0; 
        transform: translateY(20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .pourcent {
        position: relative;
    }

    .box-container span {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 2em; 
        font-weight: 500;
        color: var(--red)
    }

    svg {
        height: 150px;
        width: 150px;
    }

    svg circle {
        fill: none;
        stroke: var(--red);
        stroke-width: 10px;
        transform: translate(5px, 5px);
        stroke-linecap: round;
        stroke-dasharray: 440;
        stroke-dashoffset: 440;
    }

    svg circle:nth-child(1) {
        stroke: var(--light-gray);
        stroke-dashoffset: 0;
    }

    svg circle:nth-child(2) {
        animation: circle 2s forwards;
    }

    .box:nth-child(1) svg circle:nth-child(2) {
        animation: circle1 2s forwards;
    }

    .box:nth-child(2) svg circle:nth-child(2) {
        animation: circle2 2s forwards;
    }

    .box:nth-child(3) svg circle:nth-child(2) {
        animation: circle3 2s forwards;
    }

    .box:nth-child(4) svg circle:nth-child(2) {
        animation: circle4 2s forwards;
    }

    .box:nth-child(5) svg circle:nth-child(2) {
        animation: circle5 2s forwards;
    }

    @keyframes circle1 {
        to {
            stroke-dashoffset: 435;
        }
    }

    @keyframes circle2 {
        to {
            stroke-dashoffset: 172;
        }
    }

    @keyframes circle3 {
        to {
            stroke-dashoffset: 220;
        }
    }

    @keyframes circle4 {
        to {
            stroke-dashoffset: 330;
        }
    }

    @keyframes circle5 {
        to {
            stroke-dashoffset: 147;
        }
    }

    /* 
    ############################################# 
                timeline-section  
    #############################################
    */

    .timeline-content {
        max-width: 900px;
        margin: 0 auto; 
        padding: 0 2rem;
        margin-top: 3rem;
    }       

    .timeline-item {
        position: relative;
        padding-left: 3rem; 
        padding-bottom: 3rem;
        border-left: 3px solid var(--red);
        margin-left: 1.5rem;
    }

    .timeline-item:last-child {
        padding-bottom: 0;
        border-left: 3px solid transparent;
    }

    .timeline-dot {
        position: absolute;
        left: -15px;
        top: 0;
        width: 1.8rem;
        height: 1.8rem;
        background-color: var(--red);
        border-radius: 50%;
        border: 4px solid white;
        box-shadow: 0 0 0 3px var(--red);
    }

    .timeline-item-t {
        font-size: 1.1rem;
        color: var(--red); 
        font-weight: 700; 
        margin-bottom: 1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .timeline-item h3 {
        font-size: 1.5rem ; 
        font-weight: 700; 
        margin-bottom: 1rem;
        color: #333;
    }

    .timeline-item p {
        color: #616161;
        font-size: 1.1rem;
        line-height: 1.6;
        max-width: 700px;
    }

    /* 
    ############################################# 
                team-section  
    #############################################
    */

    .team-content {
        background-color: white;
        border-radius: 0.5rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        padding: 2rem;
    }

    .team-section {
        padding: 2rem 0;
    }

    .container {
        width: 85%;
        max-width: 1200px;
        margin: 0 auto;
    }

    .bus-card {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 8px 30px rgba(0,0,0,0.1);
        padding: 2.5rem;
        margin-bottom: 3rem;
    }

    .bus-title {
        color: var(--red);
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .bus-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        align-items: center;
    }

    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0;
        /* list-style-type: disc;
        padding-left: 1.5rem;
        color: #616161; */
    }

    .feature-list li {
        padding: 0.8rem 0;
        font-size: 1.1rem;
        color: #616161;
        display: flex;
        align-items: center;
        gap: 12px;
        border-bottom: 1px solid #eee ;
    }

    .feature-list li i {
        color: var(--red);
        width: 24px;
        text-align: center;
    }

    .bus-image {
        border-radius: 8px;
        height: 100%;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: auto auto;
        padding: 1rem;
        gap: 1rem;
    }

    .bus-image img {
        width: 100%;
        height: auto;
        border-radius: 4px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .bus-image img:hover {
        transform: scale(1.02);
    } 

    .bus-image img:first-child {
        grid-column: span 2;
        height: 220px;
    }

    .bus-image img:nth-child(n+2) {
        height: 180px;
    }

    .team-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-bottom: 3rem; 
    }

    .team-card {
        background color: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .team-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .card-icon {
        margin: 0 auto 1rem;
        font-size: 2rem;
    }

    .team-card h3 {
        font-size: 1.3rem;
        color: #333;
        margin-bottom: 1rem;
    }

    .team-card p {
        color: #616161; 
        line-height: 1.6;
    }

    .operation-card {
        background-color: #E3F2FD; 
        padding: 2rem; 
        border-radius: 12px;
    }

    .operation-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 1.5rem;
    }

    .operation-header h3 {
        font-size: 20px;
        color: var(--blue);  
    }

    .operation-card p {
        color: #333;
        margin-bottom: 1.5rem;
        line-height: 1.6;
    }

    .btn {
        display: inline-block;
        align-items: center;
        gap: 8px;
        padding: 12px 30px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-primary {
        background-color: var(--red);
        color: white;
    }

    .btn-primary:hover {
        background-color: #c0050f;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(227, 6, 19, 0.3);
    }

    /* 
    ############################################# 
                soins-section  
    #############################################
    */

    .soins-content {
        margin: 2em auto;
        max-width: 1200px;
        padding: 0 20px; 
    }

    .soins-intro {
        text-align: center;
        font-size: 1.125rem;
        color: #616161;
        margin-bottom: 1rem;
    }

    .soins-container {
        display: flex;
        flex-direction: column; 
        gap: 30px;
        /* justify-content: space-evenly;
        align-items: center;
        max-width: 1400px;
        margin: 0 auto; 
        flex-wrap: wrap; */
    }

    .soins-card-row {
        display: flex;
        justify-content: center;
        gap: 30px;
    }

    .soins-card {
        width: 100%;
        max-width: 500px;
        min-height: 180px;
        margin: 20px 20px;
        padding: 25px; 
        box-sizing: border-box; 
        border-radius: 10px;
        box-shadow: 0px 0px 45px -10px #d2d2d2;
        display: flex;
        flex-direction: column;
        transition: 0.3s;
        cursor: pointer;
        position: relative;
    }

    .soins-card:hover {
        transform: translateY(-15px);
    }

    .soins-card::before {
        content: "";
        position: absolute;
        height: 5px;
        background-color: var(--blue);
        bottom: 0;
        left: 0;
        right: 100%;
        border-radius: 50px;
        transition: 0.3s;
    }

    .soins-card:hover::before {
        right: 0%;
    }

    .soins-card h4 {
        margin: 20px 0 7px 0;
        font-size: 1.3em; 
        color: var(--blue);
    }

    .soins-card p {
        font-size: 0.9em;
        color: #616161;
    }

    .soins-card ul {
        padding-left: 20px;
        margin: 0;
    }
    
    .soins-card li {
        margin-bottom: 10px;
        color: #616161;
        line-height: 1.5;
    }

    /* 
    ############################################# 
                stats-section  
    #############################################
    */

    .stats {
        padding: 80px 0;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        text-align: center;
    }

    .stat-number {
        font-size: 2.8rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .stat-label {
        font-size: 0.9rem;
    }

    /* 
    ############################################# 
                impact-section  
    #############################################
    */

    .impact {
        background: #f9f9f9;
        padding: 4rem 0;
    }

    .impact-layout {
        display: grid;
        grid-template-areas:
            "testimonial1 stats"
            "testimonial2 stats";
        grid-template-columns: 2fr 1fr;
        grid-gap: 2rem;
        margin-top: 2rem;
    }

    .testimonial-bg {
        position: relative;
        background-size: cover;
        background-position: center;
        min-height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
        color: white;
        overflow: hidden;
    }

    .testimonial-content {
        position: relative;
        z-index: 2;
        max-width: 80%;
        text-align: left;
    }

    .testimonial-bg::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4));
        z-index: 1;
    }

    .quote {
        font-size: 4rem;
        font-weight: bold;
        line-height: 1;
        margin-bottom: 1rem;
        color: white;
    }

    .text {
        font-size: 1.3rem;
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .author {
        font-size: 1rem;
        font-style: italic;
        color: #fff;
    }

    /* 
    ############################################# 
                      media  
    #############################################
    */

    @media (max-width: 768px) {
        
        .hero {
            height: 50vh;
            background-size: 120% auto !important;
            background-position: center 0% !important;
            min-height: 300px;
        }

        .hero-content {
            padding: 0 0;
        }

        .hero-title {
            font-size: 1.7rem;
        }

        .section-title {
            font-size: 1.35rem;
        }

        .presentation-content p {
        font-size: 1rem; 
        }

        .box {
            padding: 1em 4em;  
        }

        .timeline-item h3 {
            font-size: 1.15rem ; 
            font-weight: 700; 
            margin-bottom: 0.5rem;
        }

        .timeline-item p {
            font-size: 1rem;
        }

        .container {
            width: 100%;
        }

        .bus-title {
            font-size: 1.2rem;
        }

        .bus-grid {
            grid-template-columns: 1fr; 
        }

        .bus-image {
            grid-template-columns: 1fr 1fr;
            padding: 0;
            gap: 0.8rem;
        }

        .bus-image img:first-child {    
            height: 200px;
            width: 100%;
        }

        .bus-image img:nth-child(n+2) {
            height: 170px;
            width: 100%;
        }

        .team-cards {
            grid-template-columns: 1fr;  
        }

        .bus-card, .opperation-card {
            padding: 1.5rem;
        }

        .operation-header h3 {
            font-size: 16px;
        }

        .soins-card-row {
            flex-direction: column;
        }
        
        .soins-card {
            margin: 0 0;
        }

        .stat-number {
            font-size: 2.5rem;
            margin-bottom: 0.1rem;
        }

        .stat-label {
            font-size: 1rem;
        }

    }

</style>

<script>
    document.addEventListener('DOMContentLoaded', function() { 
        const animateStatsSection = () => {
            const statsSection = document.querySelector('.presentation-c');
            const boxes = document.querySelectorAll('.box');

            boxes.forEach(box => {
                box.style.opacity = '0';
                box.style.transform = 'translateY(20px)';
                box.style.transition = 'opacity 0.5s ease, transform 0.5s ease';

                const circles = box.querySelectorAll('svg circle:nth-child(2)');
                circles.forEach(circle => {
                    circle.style.animation = 'none';
                });
            });

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                         boxes.forEach((box, index) => {
                            setTimeout(() => {
                                box.style.opacity = '1';
                                box.style.transform = 'translateY(0)';

                                const circle = box.querySelector('svg circle:nth-child(2)');
                                if(circle){
                                    void circle.offsetWidth;
                                    circle.style.animation = '';
                                }
                            },  index * 350);
                        });
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1});
            observer.observe(statsSection);
        };
        animateStatsSection();
    });
</script>