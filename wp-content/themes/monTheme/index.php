<?php
    get_header(); //appel du template header.php
    get_sidebar(); //appel de sidebar.php
?>

<?php
/*
    <div id="content">
        <h1>Contenu Principal</h1>
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
    </div> <!-- /content -->
 */
?>
        <main role="main" class="probootstrap-main js-probootstrap-main">
            <div class="probootstrap-bar">
                <a href="#" class="probootstrap-toggle js-probootstrap-toggle"><span class="oi oi-menu"></span></a>
                <div class="probootstrap-main-site-logo"><a href="index.html">Aside</a></a></div>
            </div>
            <div class="card-columns">
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_1.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_2.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_3.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_4.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_5.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_6.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_7.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_8.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_9.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_10.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_11.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_12.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_13.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_14.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_15.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_16.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_17.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_18.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_19.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_20.jpg" alt="Card image cap">
                    </a>
                </div>
                <div class="card">
                    <a href="single.html">
                        <img class="card-img-top probootstrap-animate" src="<?php echo IMAGES_URL?>/img_21.jpg" alt="Card image cap">
                    </a>
                </div>
            </div>

            <div class="container-fluid d-md-none">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-unstyled d-flex probootstrap-aside-social">
                            <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
                            <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
                            <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
                        </ul>
                        <p>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Aside</a>. <br> All Rights Reserved. Designed by <a href="https://uicookies.com/" target="_blank">uicookies.com</a></p>
                    </div>
                </div>
            </div>

        </main>
<?php get_footer(); //appel du template footer.php ?>

