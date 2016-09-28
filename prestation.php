<?php
/*
Template Name: prestation
*/
?>

    <?php get_header('header-single'); ?>


        <div class="page prestation">
            <?php get_sidebar(); ?>

                <div class="content">
                   <h2 class="bandeau bandeau-mt0">PRESTATIONS</h2>
                    <section class="formeindex">

                        <div class="uniform-article">
                            <?php query_posts('category_name=titre-intro-prestation'); ?>
                                <?php if(have_posts()) : ?>
                                    <?php while(have_posts()) : the_post();?>

                                        <!-- affichage des articles -->
                                       <!-- <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>-->
                                        
                                        <div class="post" id="post-<?php the_ID(); ?>">
                                            <div class="post_content alignement_article">
                                                <div class="contenu_article">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                            <?php endif; ?>
                                            <div class="index-separator"></div>
                        </div>

                        <div class="icone-generique">
                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_stethoscope.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('consultation')">Consul.</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_camera.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('imagerie')">Imagerie</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_microscope.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('analyse')">Analyses</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_scalpel.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('chirurgie')">Chirurgie</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_hopital.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('hospitalisation')">Hosp.</button>
                            </div>

                            <div class="center-generique">
                                <div class="numero animation anim">
                                    <?php include("img/svg/prestation_svg/prestation_lapin.php"); ?>
                                </div>
                                <button class="bouton-generique" onclick="affiche_presta('nac')">NAC</button>
                            </div>
                        </div>
                    </section>

                    <section>

                        <div class="uniform-article" id="consultation">
                            <?php query_posts('category_name=consultation'); ?>
                                <?php if(have_posts()) : ?>
                                    <?php while(have_posts()) : the_post();?>

                                        <!-- affichage des articles -->
                                        <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>
                                        <div class="index-separator"></div>
                                        <div class="post" id="post-<?php the_ID(); ?>">
                                            <div class="post_content alignement_article">
                                                <div class="imgPage">
                                                    <?php the_post_thumbnail();?>
                                                </div>

                                                <div class="contenu_article">
                                                    <?php the_post(); the_content(array(250,250)); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                            <?php endif; ?>
                        </div>

                        <div class="uniform-article" id="imagerie">
                            <?php query_posts('category_name=imagerie'); ?>
                                <?php if(have_posts()) : ?>
                                    <?php while(have_posts()) : the_post();?>

                                        <!-- affichage des articles -->
                                        <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>
                                        <div class="index-separator"></div>
                                        <div class="post" id="post-<?php the_ID(); ?>">
                                            <div class="post_content alignement_article">
                                                <div class="imgPage">
                                                    <?php the_post_thumbnail(array(250,250));?>
                                                </div>

                                                <div class="contenu_article">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                            <?php endif; ?>
                        </div>

                        <div class="uniform-article" id="analyse">
                            <?php query_posts('category_name=analyses'); ?>
                                <?php if(have_posts()) : ?>
                                    <?php while(have_posts()) : the_post();?>

                                        <!-- affichage des articles -->
                                        <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>
                                        <div class="index-separator"></div>
                                        <div class="post" id="post-<?php the_ID(); ?>">
                                            <div class="post_content alignement_article">
                                                <div class="imgPage">
                                                    <?php the_post_thumbnail(array(250,250));?>
                                                </div>

                                                <div class="contenu_article">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                            <?php endif; ?>
                        </div>

                        <div class="uniform-article" id="chirurgie">
                            <?php query_posts('category_name=chirurgie'); ?>
                                <?php if(have_posts()) : ?>
                                    <?php while(have_posts()) : the_post();?>

                                        <!-- affichage des articles -->
                                        <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>
                                        <div class="index-separator"></div>
                                        <div class="post" id="post-<?php the_ID(); ?>">
                                            <div class="post_content alignement_article">
                                                <div class="imgPage">
                                                    <?php the_post_thumbnail(array(250,250));?>
                                                </div>

                                                <div class="contenu_article">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                            <?php endif; ?>
                        </div>

                        <div class="uniform-article" id="hospitalisation">
                            <?php query_posts('category_name=hospitalisation'); ?>
                                <?php if(have_posts()) : ?>
                                    <?php while(have_posts()) : the_post();?>

                                        <!-- affichage des articles -->
                                        <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>
                                        <div class="index-separator"></div>
                                        <div class="post" id="post-<?php the_ID(); ?>">
                                            <div class="post_content alignement_article">
                                                <div class="imgPage">
                                                    <?php the_post_thumbnail(array(250,250));?>
                                                </div>

                                                <div class="contenu_article">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                            <?php endif; ?>
                        </div>

                        <div class="uniform-article" id="nac">
                            <?php query_posts('category_name=nac'); ?>
                                <?php if(have_posts()) : ?>
                                    <?php while(have_posts()) : the_post();?>

                                        <!-- affichage des articles -->
                                        <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>
                                        <div class="index-separator"></div>
                                        <div class="post" id="post-<?php the_ID(); ?>">
                                            <div class="post_content alignement_article">
                                                <div class="imgPage">
                                                    <?php the_post_thumbnail(array(250,250));?>
                                                </div>

                                                <div class="contenu_article">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                            <?php endif; ?>
                        </div>
                    </section>
                </div>
        </div>
        <?php get_footer(); ?>

            </body>

            </html>