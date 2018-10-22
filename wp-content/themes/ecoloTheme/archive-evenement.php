<?php
get_header(); //appel du template header.php
?>


<div id="content">
    <h1>Tous les évènements</h1>
    <?php

    // The Query
    $the_query = new WP_Query( ( array( 'post_type' => 'evenement' ) ));

    // The Loop
    if ( $the_query->have_posts() ) {
        echo '<ul>';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            echo '<li>' . get_the_title() . '</li>';
        }
        echo '</ul>';
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        // no posts found
        echo "Nous n'avons pas trouvé d'évènement";
    }?>
</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>

