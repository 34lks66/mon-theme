<?php require_once('head.php'); ?>

<footer class="footer">
    <div class="footer-content">
        <div class="contact">
            <h3>Contactez-nous</h3>
            <p><i class="fa fa-phone"></i> 05 62 62 57 90</p>
            <p><i class="fa fa-location-arrow"></i> 11 Rue Dr Samalens, 32000 Auch</p>
            <p><i class="fa fa-envelope"></i> alexandre.oberdorf@croix-rouge.fr</p>
        </div>
        <div class="legal">
            <h3>Informations légales</h3>
            <ul>
                <li><a href="#">Mentions légales</a></li>
                <li><a href="#">Conditions d'utilisation</a></li>
                <li><a href="#">Politique de confidentialité</a></li>
            </ul>
        </div>
        <div class="social-media">
            <h3>Suivez-nous</h3>
            <div class="footer_social_area">
                <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</footer>

<style>
    html, body {
        height: 100%;
        margin: 0;
    }

    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .content {
        flex: 1;
    }

    .content-fluid {
        flex: 1; 
    }

    .footer {
        background-color: white;
        border-top: 4px solid #e30613;
        padding: 20px 0;
    }

    .footer-content {
        display: flex;
        justify-content: space-around;
        align-items: flex-start;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;

        align-items: center;
        text-align: center;
    }

    .footer h3, .legal h3 {
        margin-bottom: 10px;
    }

    .footer p, .footer ul {
        margin: 0;
    }

    .footer ul {
        list-style: none;
        padding:0;
    }

    .footer a {
        text-decoration: none;
        color: black;
        transition: color 0.3s;
    }

    .footer a:hover {
        color: #e30613;
    }

    .social-media {
        display: flex;
        justify-content: center;
        gap: 10px;
        flex-direction: column;
        align-items: center; 
    }

    .footer_social_area {
        position: relative;
        z-index: 1;
    }

    .footer_social_area a {
        border-radius: 50%;
        height: 40px;
        text-align: center;
        width: 40px;
        display: inline-block;
        background-color: #f5f5ff;
        line-height: 40px;
        -webkit-box-shadow: none;
        box-shadow: none;
        margin-right: 10px;
    }
    .footer_social_area a i {
        line-height: 36px;
    }
    .footer_social_area a:hover,
    .footer_social_area a:focus {
        color: #e30613;
    }

    @media (max-width: 768px){
        .footer-content {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .footer-content > div {
            margin-bottom: 20px;
        }

        .footer h3, .legal h3 {
            font-size: 1.1rem;
        }

        .footer p, .footer ul {
            font-size: 0.85rem;
        }

        .social-media {
            flex-direction: row;
            gap: 15px;
        }

        .footer_social_area a {
            margin-right: 0;
        }
    }
</style>

