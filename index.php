<?php require_once('header.php'); ?>
<?php require_once('head.php'); ?>

<?php require_once('menu.php'); ?>

<div class="content">

<div class="homepage">
    <section class="hero" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo get_template_directory_uri(); ?>/assets/images/bus-dentaire4.jpg');">
        <div class="hero-content">
            <h1>Bus Dentaire Gersois</h1>
            <h2>Soins dentaires gratuits sur RDV</h2>
            <div class="hero-buttons">
                <a href="#rdv" class="btn btn-primary">Prendre RDV</a>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bus2.jpg" alt="Bus dentaire">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bus1.jpg" alt="Bus dentaire">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bus3.jpg" alt="Bus dentaire">
            </div>
        </div>
    </section>

    <br><br>

    <section class="stats" style="background-color: #f8f9fa;">
            <div class="container">
            <h2 class="section-title">Notre Impact</h2>
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number" style="color: #e30613;">1000+</div>
                    <div class="stat-label">Patients soignés et accompagnés</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" style="color: #0077b6;">10</div>
                    <div class="stat-label">Communes rurales isolées</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" style="color: #e30613;">14 000</div>
                    <div class="stat-label">Kilomètres parcourus</div>
                </div>
            </div>
        </div>
    </section>

    <section class="support">
        <div class="container">
            <h2 class="section-title">Comment nous soutenir ?</h2>
            <p style="text-align: center;">Votre soutient nous permet de continuer à offir des soins dentaires gratuits aux populations isolées</p><br>
            <div class="support-content">
                    <div class="support-option" style="background-color: #e30613; color: white;">
                        <i class="fas fa-hand-holding-heart"></i>
                        <h3>Faire un don</h3>
                        <a href="<?php echo site_url('/comment-nous-soutenir');?>" class="btn btn-light">Je donne</a>
                    </div>
            </div>
        </div>
    </section>

    <section id="rdv" class="contact" style="background-color: #f8f9fa; padding: 40px;">
        <h2 class="section-title">Prendre un rendez-vous</h2>                                                                              
        <p style="text-align: center;">Vous avez besoin d'un rendez-vous ?  Écrivez-nous un message !</p><br>
        <div class="contact-container">
            <div class="formulaire">
                <form id="contactForm" method="post" action="traitement_formulaire.php">
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
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea placeholder="Votre message..." name="message" id="message" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="submit" name="envoyer">Envoyer</button>
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
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .support {
        padding: 80px 0;
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
        background-color: #1a9ca6;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(31, 179, 191, 0.3);
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

    .error-message {
        background-color: #f8d7da;
        color: #721c24;
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

    document.getElementById('contactForm').addEventListener('submit', function(event) {
        const form = event.target;
        const inputs = form.querySelectorAll('input[required], textarea[required]');
        let isValid = true;
        
        inputs.forEach(input => {
            if(!input.value.trim()) {
                input.style.borderColor = '#dc3545';
                isValid = false;
            } else {
                input.style.borderColor = '#e0e0e0';
            }
        });
        
        if(!isValid) {
            event.preventDefault();
            Swal.fire({
                icon: 'error',
                title: 'Champs manquants',
                text: 'Veuillez remplir tous les champs obligatoires',
            });
        }
    });

    document.getElementById('contactForm').addEventListener('submit', function(event) {
        // Empêche l'envoi du formulaire par défaut
        event.preventDefault(); 

        const email = document.getElementById('email').value;
        const nom = document.getElementById('nom').value;
        const prenom = document.getElementById('prenom').value;
        const message = document.getElementById('message').value;

        // Vérification que tous les champs sont remplis
        if (email && nom && prenom && message) {
            // Envoi du formulaire
            this.submit(); // Envoie le formulaire après la validation

            // Affichage d'une alerte de succès
            Swal.fire({
                icon: 'success',
                title: 'Message envoyé',
                text: 'Votre message a bien été envoyé.',
                showConfirmButton: false,
                timer: 1500
            });
        } else {
            // Affichage d'une alerte d'erreur si un champ est manquant
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: 'Veuillez remplir tous les champs.',
            });
        }
    });
</script>

