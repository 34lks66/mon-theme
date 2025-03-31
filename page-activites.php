<?php get_header();?>

<?php require_once('header.php'); ?>
<?php require_once('head.php'); ?>

<?php require_once('menu.php'); ?>


<div class="content">

<section class="hero">
    <div class="hero-content">
        <h1>Qui sommmes nous ?</h1>
        <p>Rendre les soins dentaires accessibles aux Gersois, même dans les zones rurales isolées</p>
    </div>
</section>

<section class="presentation">
    <div class="presentation-content">
        <h2 class="section-title">Notre Mission</h2>
        <p>Face à la désertification médicale touchant près de 11 millions de personnes en France, le Bus Dentaire Gersois représente une solution mobile innovante pour lutter contre le manque de soins dentaires dans les zones rurales.</p>
        <div class="presentation-grid">
            <div class="presentation-c" style="background-color: #e3f2fd ;">
                <h3 style="color: #1565C0;">Contexte</h3>
                <p>Dans le Gers, avec seulement un dentiste pour 1 641 habitants, 25% des habitants renoncent aux soins faute de praticiens ou de mobilité. Notre bus dentaire apporte une solution concrète à cette problématique.</p>
            </div>
            <div class="presentation-c" style="background-color: #ffebee;">
                <h3 style="color: #e30613;">Notre Engagement</h3>
                <p>Apporter des soins dentaires accessibles aux populations isolées, dans un esprit d'égalité territoriale. 
            </div>
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
            <p>Début de l'initiative avec une vision claire : apporter des soins dentaires aux zones rurales du Gers.</p>
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
                --- IMAGE --- 
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
            <div class="icon-card">
                <i class="fa-solid fa-stethoscope" style="color: #e30613;"></i>
            </div>
            <h3>Équipe Médicale</h3>
            <p>Une équipe de dentistes superviseurs bénévoles et des étudiants en dernière année de la Faculté Dentaire de Toulouse.</p>
        </div>
        <div class="team-card">
            <div class="team-card">
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
        <a href="#" class="btn btn-primary">voir le planning</a>
    </div>
</section>
<br>
<section class="care">
    <h2 class="section-title">Nos Soins</h2>   
</section>
<br>
<section class="statistic">
    <h2 class="section-title">Statistiques</h2>
</section>


</div>

<?php include_once('footer.php'); ?>
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
        height: 50vh;
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
        border-radius: 0.5rem;
    }
    
    .presentation-c h3 {
        font-size: 1.25rem;
        font-weight: 600; 
        margin-bottom: 1rem;  
    }

    .presentation-content p {
        font-size: 1.125rem; 
        color: #616161;
        margin-bottom: 1.5rem;
    }

    .timeline-content {
        max-width: 768px;
        margin: 0 auto; 
    }

    .timeline-item {
        position: relative;
        padding-left: 2rem; 
        padding-bottom: 2rem;
        border-left: 2px solid var(--red);
    }

    .timeline-item:last-child {
        border-left: none;
    }

    .timeline-dot {
        position: absolute;
        left: -9px;
        top: 0;
        width: 1rem;
        height: 1rem;
        background-color: var(--red);
        border-radius: 50%;
    }

    .timeline-item-t {
        font-size: 0.875rem;
        color: var(--red); 
        font-weight: 600; 
        margin-bottom: 0.5rem;
    }

    .timeline-item h3 {
        font-size: 1.125rem ; 
        font-weight: 600; 
        margin-bottom: 0.5rem;
    }

    .timeline-item p {
        color: #616161;
    }

    .team-section {
        padding: 4rem 0;
        background-color: var(--light-gray);
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
        border-top: 4px solid var(--red); 
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

    .image-placeholder {
        background-color: var(--light-blue);
        border-radius: 8px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
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
        border-top: 3px solid var(--red);
    }

    .team-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .card-icon {
        width: 70px;
        height: 70px;
        background-color: rgba(227,6,19,0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        margin: 0 auto 1.5rem;
        font-size: 1.8rem;
        color: var(--red);
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
        border-left: 4px solid var(--blue);
    }

    .operation-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 1.5rem;
    }

    .operation-header h3 {
        font-size: 1.4rem;
        color: var(--blue);  
        margin: 0;
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

        .bus-grid {
            grid-template-columns: 1fr;
        }

        .team-cards {
            grid-template-columns: 1fr;  
        }

        .bus-card, .opperation-card {
            padding: 1.5rem;
        }

    }

</style>