<nav class="navbar">
    <div class="logo">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO_CROIX_ROUGE_2.png" alt="Logo">

    </div>
    <button class="menu-toggle" aria-label="Toggle menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </button>
    <ul class="menu" id="menu">
        <li><a href="<?php echo site_url('/'); ?>">Accueil</a></li>
        <li><a href="#">Lieux & Planning</a></li>
        <li><a href="#">Témoignages & Interviews</a></li>
        <li><a href="">Comment nous soutenir</a></li>
        <li><a href="<?php echo site_url('/activites'); ?>">Activités</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
        margin:0;
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
    }

    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: white;
        padding: 10px 20px;
        border-bottom: 4px solid #e30613; 
    }

    .logo img {
        height: 50px;
    }

    .menu {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    .menu li {
        margin-left: 30px
    }

    .menu a {
        text-decoration: none;
        color: black;
        transition: color 0.3s;
    }

    .menu a:hover {
        color: #e30613;
    }

    .menu-toggle {
        display: none;
        flex-direction: column;
        cursor: pointer;
        background: transparent;
        border: none;
        padding: 10px;
    }

    .menu-toggle .bar {
        height: 3px;
        width: 25px;
        background-color: black;
        margin: 3px 0;
        transition: all 0.3s ease;
    }

    .menu-toggle.active .bar:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .menu-toggle.active .bar:nth-child(2) {
        opacity: 0;
    }

    .menu.toggle.active .bar:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -5px); 
    }

    .menu-toggle:hover .bar {
        background-color: #e30613;
    }

    @media (max-width: 768px){
        .menu {
            display: none;
            flex-direction: column;
            width: 100%;
            background-color:  #ced7d8;
            position: absolute;
            top: 60px;
            left: 0;
            padding: 10px 0;
            border-top: 1px solid #e30613;
        }

        .menu li {
            margin: 10px  0;
            text-align: center;
        }

        .menu-toggle {
            display: flex;
        }

        .menu.active {
            display: flex;
        }
    }
</style>

<script>
    document.querySelector('.menu-toggle').addEventListener('click', function() {
        const menu = document.querySelector('.menu');
        const menuToggle = document.querySelector('.menu-toggle');
        menu.classList.toggle('active');
        menuToggle.classList.toggle('active');
    });
</script>