<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 15/10/2018
 * Time: 10:20
 */
get_header();
?>

<?php
// boucle WordPress
if (have_posts()){
    while (have_posts()){
        the_post();
        ?>
        <h1><?php the_title(); ?></h1>
        <h2>Posté le <?php the_time('F jS, Y') ?></h2>
        <p><?php the_content(); ?></p>
        <?php
    }
}
else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
}
?>

<?php
get_footer();
?>
