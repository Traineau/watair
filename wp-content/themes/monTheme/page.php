<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 15/10/2018
 * Time: 10:20
 */
get_header();
get_sidebar();
?>

<main role="main" class="probootstrap-main js-probootstrap-main">
    <div class="probootstrap-bar">
        <a href="#" class="probootstrap-toggle js-probootstrap-toggle"><span class="oi oi-menu"></span></a>
        <div class="probootstrap-main-site-logo"><a href="index.html">Aside</a></a></div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-12">
                <p class="mb-5"><?php echo get_the_post_thumbnail(get_the_ID(), 'page-thumb', array('class'=>'img-fluid')); ?></p>
                <div class="row">
                    <div class="col-xl-8 col-lg-12 mx-auto">
                        <div id="content">
                            <h1>Contenu Principal</h1>
                            <?php
                            // boucle WordPress
                            if (have_posts()) {
                                while (have_posts()) {
                                    the_post();
                                    ?>
                                    <h1 class="mb-3"><?php the_title(); ?></h1>
                                    <h2>Posté le <?php the_time('F jS, Y') ?></h2>
                                    <p><?php the_content(); ?></p>
                                    <?php
                                }
                            } else {
                                ?>
                                Nous n'avons pas trouvé d'article répondant à votre recherche
                                <?php
                            }
                            ?>
                        </div> <!-- /content -->
                    </div>
                </div>

            </div>
        </div>

        <?php
        get_footer();
        ?>
