<?php get_header(); ?>
<?php require_once('menu.php'); ?>

<main>
    <?php
     while ( have_posts() ) : the_post();
        echo '<div class="page-content">';
        the_title('<h1>', '</h1>');
        the_content();
        echo '</div>';
    endwhile;
    ?>
</main>

<?php get_footer(); ?>

<style>
    .page-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 2rem;
        line-height: 1.6;
        font-size: 1.1rem;
    }

    .page-content h1 {
        color: #0f4761;
    }
    
    .page-content h2, .page-content h3 {
        margin-top: 2rem;
        margin-bottom: 1rem;
    }

    .page-content p {
        margin-bottom: 1.2rem;
    }

    .page-content ul {
        margin-left: 1.5rem;
        list-style: disc;
    }

    .page-content img {
        max-width: 100%;
        height: auto;
        margin: 1.5rem 0;
    }
</style>