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
                    <div class="logos">
                        <?php afficher_logos_partenaires();?>
                    </div>
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
                    don-section  
    #############################################
    */

    .don {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
        padding: 4rem;
    }

    .don-title h1 {
        text-align: left;
    }

    .don-title p {
        font-size: 1.125rem; 
        color: #616161;
        margin-bottom: 1.5rem;
        text-align: center;
        /* border-bottom: 3px solid var(--blue); */
    }

    .don-card {
        background-color: var(--white);
        border: 2px solid var(--blue);
        border-radius: 10px;
        padding: 20px;
        width: 340px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .don-card h2 {
        background-color: var(--blue);
        color: white;
        text-align: center;
        padding: 12px;
        margin: -20px -20px 20px -20px;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        font-size: 18px;
    }

    .tabs {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
    }

    .tab {
        flex: 1;
        padding: 12px;
        border: 1px solid var(--red);
        color: var(--red);
        background: var(--white);
        font-weight: normal;
        text-align: center;
        cursor: pointer;
        border-radius: 4px;
        position: relative;
    }

    .tab.active {
        background-color: var(--red);
        color: white;
    }

    .tab.active::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid var(--red);
    }

    .amounts {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .row-line {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
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

    .amount-btn {
        flex: 1 1 calc(33.33% - 10px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: #eef6ff; 
        cursor: pointer;
        text-align: center;
        transition: all 0.3s;
    }

    .amount-btn.active-amount {
        background-color: #0077b6;
        color: white;
        border-color: #0077b6;
    }

    .input-wrapper {
        position: relative;
        /* width: 100%; */
        flex: 1 1 calc(33.33% - 10px);
        background: #eef6ff;
    }

    .other-input {
        width: 100%;
        padding: 10px 35px 10px 10px;
        border: 1px solid black;
        /* margin-top: 10px; */
        margin-top: 0;
        /* display: block; */
        border-radius: 5px;
    }

    .euro-symbol {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #666;
        pointer-events: none;
        font-weight: bold;
    }

    .cout-don strong.red {
        color: red;
    }

    .cout-don strong.green {
        color: green;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: 600;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .row {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .half {
        flex: 1 1 45%;
    }

    .full {
        width: 100%;
    }

    .payment {
        display: flex;
        gap: 10px;
        margin-bottom: 15px;
    }

    .method-icon {
        flex: 1;
        text-align: center;
        padding: 15px;
        border: 2px solid #ccc;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.3s ease;
        position: relative;
    }

    .method-icon.selected {
        border: 3px solid var(--blue);
        background: #eef6ff;
    }

    .method-icon.selected::after {
        content: "✔";
        position: absolute;
        top: -10px;
        right: -10px;
        background: var(--blue);
        color: white;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .method-icon p {
        margin-top: 8px;
        font-weight: bold;
        font-size: 11px;
    }

    .submit-btn {
        background-color: var(--blue);
        color: white;
        padding: 12px;
        border: none;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
        border-radius: 6px;
        margin-top: 15px;
    }

    .submit-btn:hover {
        background-color: #0077b6;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(6, 35, 227, 0.3);
    }

    .submit-btn i {
        margin-left: 8px;
    }

    .cout-don {
        margin-top: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: white;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
        min-height: 80px;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .logo-item img {
        max-height: 60px;
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

        .don-title p {
            font-size: 1.1rem; 
            text-align: justify;
        }

        .don {
            padding: 1rem;
        }

        .don-card {
            background-color: var(--white);
            border: none;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .don-card h2 {
            background-color: var(--blue);
            color: white;
            text-align: center;
            padding: 12px;
            margin: -20px -20px 20px -20px;
            font-size: 18px;
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
    function toggleTab(button, method) {
        const tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab => tab.classList.remove('active'));
        button.classList.add('active');

        const tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach(content => content.style.display = 'none');
        document.getElementById(method).style.display = 'block';
    }

    function toggleOther(tab) {
        const inputId = tab  === 'one' ? 'otherInputOne' : 'otherInputMonth';
        const input = document.getElementById(inputId);
        input.style.display = input.style.display === "none" ? "block" : "none";

        if(input.style.display === "block") {
            input.focus();
        } 
    }

    document.addEventListener("DOMContentLoaded", () => {
        const don_buttons = document.querySelectorAll('.amount-btn');
        const otherInputOne = document.getElementById('otherInputOne');
        const otherInputMonth = document.getElementById('otherInputMonth');
        const coutInfo = document.getElementById('text-cout-info');

        function sendMontant(montant) {
            fetch("<?php echo get_template_directory_uri(); ?>/don-calcul.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded" 
                },
                body: "montant=" + montant
            })
            .then(response => response.json())
            .then(data => {
                coutInfo.innerHTML = `Votre don de <strong class="red">${data.montant} €</strong>, ne vous coûte que <strong class="green">${data.cout_reel} €</strong> après réduction d'impôts de 66%.`;
                coutInfo.style.display = 'block';
            });
        }

        don_buttons.forEach(button => {
            button.addEventListener('click', () => {
                don_buttons.forEach(btn => btn.classList.remove('active-amount'));
                button.classList.add('active-amount');

                const montant = parseFloat(button.textContent);
                if(!isNaN(montant)) {
                    sendMontant(montant);
                }
                otherInputOne.value = '';
            });
        });

        otherInputOne.addEventListener('input', () => {
            const val = parseFloat(otherInputOne.value);
            don_buttons.forEach(btn => btn.classList.remove('active-amount'));
            if(!isNaN(val) && val >= 0) {
                sendMontant(val);
            } else {
                coutInfo.style.display = 'none';
            }
        });

        otherInputMonth.addEventListener('input', () => {
            const val = parseFloat(otherInputMonth.value);
            don_buttons.forEach(btn => btn.classList.remove('active-amount'));
            if(!isNaN(val) && val >= 0) {
                sendMontant(val);
            } else {
                coutInfo.style.display = 'none';
            }
        });
    });
    
    function selectMethod(clicked, method) {
        document.querySelectorAll('.method-icon').forEach(icon => {
            icon.classList.remove('selected');
        });
        clicked.classList.add('selected');

        const cbForm = document.getElementById('cb-form');

        if(method == 'cb') {
            cbForm.style.display = 'block';
        } else if (method == 'paypal') {
            cbForm.style.display = 'none';
        }
    }

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
                        logoItems.forEach((item, index) => {
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'translateY(0)';
                            }, index * 350);
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