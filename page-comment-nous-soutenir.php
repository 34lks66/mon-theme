<?php get_header();?>

<?php require_once('header.php'); ?>
<?php require_once('head.php'); ?>

<?php require_once('menu.php'); ?>

<div class="content">

    <div class="partenaire">
        <div class="partenaire-title">    
            <h2 class="section-title">DEVENEZ PARTENAIRE !</h2>
            <p>Cette aventure a été rendue possible grâce à nos partenaires engagés. Nous remercions  la Faculté Dentaire de Toulouse, le CHU Purpan, et tous nos sponsors pour leur soutien. 
            Ensemble, nous travaillons à réduire les inégalités d'accès aux soins dentaires</p>
        </div>
    </div>

    <div class="become-partenaire">
        <h2>POURQUOI DEVENIR PARTENAIRE ?</h2>
        <p><b>Devenir partenaire du Bus Dentaire du Gers, c'est bien plus qu'un simple soutien financier :</b>
        <ul>
            <li>Journée de prévention bucco-dentaire dans vos locaux pour vos salariés</li>
            <li>Production d'un rapport d’impact RSE personnalisé, valorisable dans vos bilans</li>
            <li>Votre logo présent sur notre Bus Dentaire, en tournée dans tout le Gers</li>
            <li>Mention de votre engagement dans les publications officielles du Bus Dentaire</li>
            <li>Droit d’usage « Partenaire Santé Croix-Rouge du Gers » pour vos supports officiels</li>
            <li>Invitation à une journée partenaires avec presse et élus sur le thème de la santé en milieu rural</li>
        </ul>
    </div>

    <div class="engagement">
        <h3>Vous engagez à nos côtés avec le soutien régulier c’est :</h3>
        <div class="engagement-container">
        <div class="engagement-row">
            <div class="engagement-card">
                <i class="fas fa-user-md"></i>
                <p><b>Permettre de réduire les inégalités d’accès aux soins et de favoriser la prévention</b> en soutenant une initiative qui répond aux besoins des populations isolées.</p>
            </div>

            <div class="engagement-card">
                <i class="fas fa-hand-holding-heart"></i>
                <p><b>Renforcer l'engagement RSE de votre organisation</b> en vous associant à une démarche solidaire et locale qui a un impact direct sur la communauté.</p>
            </div>
        </div>
        <div class="engagement-row">
            <div class="engagement-card">
                <i class="fas fa-leaf"></i>
                <p><b>Réduire l’empreinte carbone de votre organisation</b> en limitant les trajets médicaux évitables grâce à l'accès facilité aux soins dentaires dans les villages.</p>
            </div>

            <div class="engagement-card">
                <i class="fas fa-bullhorn"></i>
                <p><b>Bénéficier d’une visibilité médiatique nationale et régionale</b> en étant associé à un projet reconnu et soutenu par des acteurs majeurs de la santé.</p>
            </div>
        </div>
        </div>
    </div>

    <div class="partenaire-list">
        <div class="partenaire-content">
            <div class="grid">
                <div class="left">
                    <h2>Plaisir de<br>travailler avec</h2>
                </div>
                <div class="right">
                    <?php afficher_logos_partenaires();?>
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php include_once('footer.php'); ?>
<?php get_footer(); ?>


<style>
    :root {
        --red: #e30613;
        --blue: #0077b6;
        --white: #ffffff;
        --light-gray: #f8f9fa;
    }

    .section-title {
        text-align: center;
        margin-bottom: 25px;
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
                partenaire-section  
    #############################################
    */

    .partenaire {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
        padding: 4rem;
        /* width: 85%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px; */
    }

    .partenaire-title h1 {
        text-align: left;
    }

    .partenaire-title p {
        font-size: 1rem; 
        color: #616161;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .become-partenaire {
        background-color: var(--blue);
        color: white;
        text-align: center;
        padding: 40px;
        width: 100%;
        box-sizing: border-box;
    }

    .become-partenaire h2 {
        margin: 0; 
    }

    .become-partenaire p {
        margin: 10px 0 0; 
    }

    .become-partenaire ul {
        list-style: none;
        padding: 0;
        max-width: 800px;
        margin: 30px auto;
        text-align: left;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 15px 30px;
    }

    .become-partenaire li {
        position: relative;
        padding-left: 30px;
        margin-bottom: 10px;
        line-height: 1.5;
    }

    .become-partenaire li::before {
        content: "";
        position: absolute;
        left: 0;
        top: 8px;
        width: 15px;
        height: 15px;
        background-color: white;
        clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
    }

    .engagement h3 {
        margin-top: 2rem;
        color: var(--blue);
        font-weight: bold;
        text-align: center;
    }

    .engagement-container {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .engagement-row {
        display: flex;
        justify-content: center;
        gap: 30px; 
    }

    .engagement-card {
        color: #0098b5;
        text-align: center;
        width: 100%;
        max-width: 450px;
        min-height: 180px;
        margin: 10px 10px;
        padding: 25px; 
        box-sizing: border-box; 
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
    }

    .engagement-card i {
        font-size: 40px;
        color: var(--red); 
        margin-bottom: 10px; 
    }

    /* 
    ############################################# 
                partenaire-list  
    #############################################
    */

    .partenaires-container {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .partenaires-section h3 {
        font-size: 1.4rem;
        color: #555;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid #ddd;
    }

    .logo-item.institutionnel {
        transition-delay: 0.1s;
    }

    .logo-item.financier {
        transition-delay: 0.2s;
    }

    .partenaire-list {
        padding: 50px 0;
        background: #f9f9f9;
    }

    .partenaire-content {
        max-width: 1200px;
        margin: auto;
        padding: 0 20px;
    }

    .grid {
        display: flex;
        align-items: flex-start;
        flex-wrap: wrap;
    }

    .left {
        flex: 1;
        font-size: 1.8rem;
        font-weight: bold;
        color: #555;
        padding-right: 20px;
        text-align: left;
    }

    .right {
        flex: 3;
    }

    .logos {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .logo-item {
        background: #f9f9f9;
        border-radius: 10px;
        padding: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100px;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .logo-item img {
        max-height: 80px;
        max-width: 100%;
        object-fit: contain;
    }

    /* 
    ############################################# 
                      media  
    #############################################
    */

    @media (max-width: 768px) {

        .section-title {
            font-size: 1.6rem;
        }

        .partenaire {
            padding: 2rem;
        }

        .engagement-container {
            gap: 1px;
        }

        .engagement-row {
            flex-direction: column;
            gap: 1px;
            display: flex;
        }

        .engagement-card {
            margin: 5px 0;
        }

        .partenaire-content {
            padding: 0 10px; 
        }

        .grid {
            flex-direction: column;
            align-items: center;
        }

        .left {
            margin-bottom: 20px;
        }

        .logos {
            grid-template-columns: repeat(2,1fr);
        }
    }

</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const animateLogos = () => {
            const logoSection = document.querySelector('.partenaire-list');
            const logoItems = document.querySelectorAll('.logo-item');

            logoItems.forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            });

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const institutionnels = document.querySelectorAll('.logo-item.institutionnel');
                        const financier = document.querySelectorAll('.logo-item.financier');

                        institutionnels.forEach((item, index) => {
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'translateY(0)';
                            }, index * 350);
                        });

                        financier.forEach((item, index) => {
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'translateY(0)';
                            }, (index + institutionnels.length) * 350);
                        });
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1});
            observer.observe(logoSection);
        };
        animateLogos();
    });  
</script>   