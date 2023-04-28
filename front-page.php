<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gogona_ver1
 */

get_header();
?>
<main id="primary" class="site-main">

    <?php
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>

    </main><!-- #main -->
    <!-- <section>
        <div class="jumbotron">
            <div class="container">
                <h1>GOGOna</h1>
                <h4 class="text-center">Packaging Company</h4>
            </div>
        </div>
    </section>
    <section class="sectional">
        <div class="bround">
            <h2>Services</h2>
            <div class="row">
                <div class="cols">
                    <h4>Packaging</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae incidunt illum eveniet culpa quo adipisci beatae nemo ipsam voluptatibus odit nostrum iste ipsa accusantium, eius asperiores accusamus? Minus, dolor quidem.
                    </p>
                    <button>Learn More!</button>  
                </div>
                <div class="cols">
                    <h4>Shipping</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae incidunt illum eveniet culpa quo adipisci beatae nemo ipsam voluptatibus odit nostrum iste ipsa accusantium, eius asperiores accusamus? Minus, dolor quidem.
                    </p>
                    <button>Learn More!</button> 
                </div>
                <div class="cols">
                <h4>Tracking</h4>
                <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae incidunt illum eveniet culpa quo adipisci beatae nemo ipsam voluptatibus odit nostrum iste ipsa accusantium, eius asperiores accusamus? Minus, dolor quidem.
                    </p>
                    <button>Learn More!</button> 
                </div>
            </div>
        </div>
    </section> -->

<?php
// get_sidebar();
get_footer();
