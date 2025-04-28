<?php get_header();?>

<div class="content">

<div class="don">
    <div class="don-title">    
        <h2 class="section-title">JE FAIS UN DON</h2>
        <p>Votre soutien est essentiel pour continuer notre mission. En faisant un don, vous contribuez à l'accès aux soins dentaires pour les populations isolées du Gers. Chaque euro compte et permet de financer des journées de soins, d'acheter du matériel dentaire et de former de futurs dentistes. Ensemble, faisons la différence !
        <br><i style="color: #e30613; font-size: 15px;">En soutenant le Bus Dentaire du Gers, vous bénéficiez d'avantages fiscaux significatifs. 60% de votre don est déductible de vos impôts, vous permettant ainsi de maximiser votre impact tout en réduisant votre charge fiscale.</i></p>
    </div>

    <div class="don-card">
        <h2>MON DON</h2>
        <div class="tabs">
            <button class="tab active" onclick="toggleTab(this, 'one')">Je donne une fois</button>
            <button class="tab" onclick="toggleTab(this, 'month')">Je donne chaque mois</button>
        </div>
        <div id="one" class="tab-content">
            <div class="amounts">
                <div class="row-line">
                    <?php 
                    $montants = [50, 90, 180, 350, 575];
                    foreach($montants as $montant){
                        echo '<button class="amount-btn">'. $montant .' €</button>';
                    }
                    ?>
                </div>
                <div class="input-wrapper always-visible">
                    <!-- <button class="amount-btn" onclick="toggleOther('one')">Autre montant</button> -->
                    <input id="otherInputOne" class="other-input" placeholder="Montant">
                    <span class="euro-symbol">€</span>
                </div>
            </div>
        </div>
        <div id="month" class="tab-content" style="display: none;">
            <div class="amounts">
                <div class="row-line">
                    <?php 
                    $montants_mensuels = [15,25,35];
                    foreach($montants_mensuels as $montant){
                        echo '<button class="amount-btn">'. $montant .' € / mois</button>';
                    }
                    ?>
                </div>
                <div class="input-wrapper always-visible">
                    <!-- <button class="amount-btn" onclick="toggleOther('month')">Autre montant</button> -->
                    <input id="otherInputMonth" class="other-input" placeholder="Montant">
                    <span class="euro-symbol">€ / mois</span>
                </div>
            </div>
        </div>
        <div class="cout-don" id="text-cout-info" style="display: none;"></div>
    </div>

    <div class="don-card">
        <h2>MES COORDONNÉES</h2>
        <form>
            <div class="form-group">
                <label>EMAIL</label>
                <input type="email" required>
            </div>
            <div class="row">
                <div class="form-group full">
                    <label>CIVILITÉ</label>
                    <select required>
                        <option value="">-- Sélectionnez --</option>
                        <option value="mr">M.</option>
                        <option value="mme">Mme</option>
                    </select>
                </div>
                <div class="form-group half">
                    <label>PRÉNOM</label>
                    <input name="prenom" type="text" required>
                </div>
                <div class="form-group half">
                    <label>NOM</label>
                    <input name="nom" type="text" required>
                </div>
            </div>
            <div class="form-group full">
                <label>PAYS</label>
                <select required>
                    <option value="france">France</option>
                </select>
            </div>
            <div class="form-group">
                <label>ADRESSE</label>
                <input type="text" placeholder="Commencez à tapez votre adresse..." required>
            </div>
        </form>
    </div>

    <div class="don-card">
        <h2>MON RÈGLEMENT</h2>
        <div class="payment">
            <div class="method-icon selected" onclick="selectMethod(this, 'cb')">
                <i class="fa-solid fa-credit-card fa-2x"></i>
                <p>Carte Bancaire</p> 
            </div>
            <div class="method-icon" onclick="selectMethod(this, 'paypal')">
                <i class="fa-brands fa-paypal fa-2x"></i>
                <p>PayPal</p>
            </div>
        </div>
        <div id="cb-form">
            <form id="payment-form">
                <div id="card-element"></div>
                <div id="card-errors" role="alert"></div>
                <button class="btn submit-btn">Valider le paiement <i class="fa-solid fa-arrow-right"></i></button>
            </form>
        </div>
    </div>
    <div class="logo-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/label_don_en_confiance.png" alt="don_en_confiance">
    </div>
</div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
        margin:0;
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
    }

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

    .logo-item img {
        max-height: 130px;
        max-width: 100%;
        object-fit: contain;
    }

   
      /* 
    ############################################# 
                      media  
    #############################################
    */

    @media (max-width: 768px) {

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
    }

</style>

<script src="https://js.stripe.com/v3/"></script>
<script>

    const stripe = Stripe('<?php echo STRIPE_PUBLIC_KEY; ?>');
    const elements = stripe.elements();
    const card = elements.create('card');
    card.mount('#card-element');

    // document.querySelector('.submit-btn').addEventListener('click', function() {
    document.getElementById('payment-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const amount = document.querySelector('.amount-btn.active-amount')?.textContent || document.getElementById('otherInputOne').value;
        const email = document.querySelector('input[type="email"]').value;
        const method = document.querySelector('.method-icon.selected').textContent.includes("PayPal") ? 'paypal' : 'stripe';

        fetch('process-donation.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                amount: parseFloat(amount),
                email: email,
                paymentMethod: method
            })
        })
        .then(res => res.json())
        .then(data => {
            if(data.clientSecret) {
                stripe.confirmCardPayment(data.clientSecret, {
                    payment_method: {
                        card: card,
                        billing_details: {
                            name: document.querySelector('input[name="nom"]').value + ' ' + document.querySelector('input[name="prenom"]').value,
                            email: email
                        }
                    }
                }).then(function(result){
                    if(result.error) {
                        alert("Erreur de paiement: " + result.error.message);
                    } else {
                        if(result.paymentIntent.status === 'succeeded') {
                            window.location.href = '/merci';
                        }
                    }
                });
            } else if(data.redirectUrl) {
                window.location.href = data.redirectUrl;
            } 
        });
    });

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

    document.addEventListener("DOMContentLoaded", function() {
        const stripe = Stripe('<?php echo STRIPE_PUBLIC_KEY;?>');
        const elements = stripe.elements();
        const card = elements.create('card');
        card.mount('#card-element');

        const form = document.getElementById('payment-form');
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            stripe.createToken(card).then(function(result) {
                if(result.error) {
                    document.getElementById('card-errors').textContent = result.error.message;
                } else {
                    fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
                        method: 'POST',
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                        body: new URLSearchParams({
                            action: 'process_donation',
                            stripeToken: result.token.id,
                            montant: montantChoisi, 
                            email: emailUtilisateur
                        })
                    })
                    .then(r => r.json())
                    .then(response => {
                        if(response.success) {
                            alert("Don reçu, merci !");
                        } else {
                            alert("Erreur: " + response.data.message);
                        }
                    });
                }
            });
        });
    });

</script>   