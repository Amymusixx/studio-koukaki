
<?php

get_header();

?>

    <main id="primary" class="site-main">
        <section class="banner animation fadeInDown">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " class="banner-img animation fadeInUp avatar" alt="logo Fleurs d'oranger & chats errants">
        <video id="background-video" autoplay loop muted src="<?php echo get_stylesheet_directory_uri() . '/assets/medias/Studio+Koukaki-vidéo+header+sans+son+(1).mp4'; ?>">
        </video>
        </section>
        <section id="#story" class="story">
            <h2 id="section-story"><span class="titre animation fadeInUp">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters" class="animation fadeInUp">
            <div class="titre-characters"><h3><span class="titre animation-titre">Les </span><span class="titre animation-titre2"> personnages</span></h3></div>
                <div class="main-character">
                    <?php include("template-parts/characters-swiper.php"); ?>
                </div>
            </article>


            <article id="place" class="animation fadeInUp">
                <div>
                    <h3 class="titre-characters"><span class="titre hidden-title">Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>

        <section id="studio" class="animation fadeInUp">
            <h2><span class="titre hidden-title">Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
            
        <section id="oscars" class="animation fadeInUp">
            <?php 
                include("template-parts/section-oscars.php"); ?>
        </section>

    </main><!-- #main -->

<?php
get_footer();
