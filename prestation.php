<?php
/*
Template Name: prestations
*/
?>


        <!-- pour insérer le header -->
        <?php get_header(); ?>

            <div id="page">
                <section class="flexbox">
                    <!-- aside -->
                    <?php get_sidebar(); ?>
                        <div>
                        <section class="formeindex">
                            
                            <div class="uniform-article">
                                <?php query_posts('category_name=titre-intro-prestation'); ?>
                                    <?php if(have_posts()) : ?>
                                        <?php while(have_posts()) : the_post();?>

                                            <!-- affichage des articles -->
                                            <h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2>
                                            <div class="index-separator"></div>
                                            <div class="post" id="post-<?php the_ID(); ?>">
                                                <div class="post_content alignement_article">
                                                    <div class="contenu_article">
                                                        <?php the_content(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                                <?php endif; ?>
                            </div>
                            
                            <div class="icone-generique">
                                <div class="center-generique">
                                    <i class="fa fa-stethoscope fa-3x"></i>
                                    <button class="bouton-generique" onclick="affiche_presta('consultation')">Consul.</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-camera fa-3x"></i>
                                    <button class="bouton-generique" onclick="affiche_presta('imagerie')">Imagerie</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-medkit fa-3x text-center"></i>
                                    <button class="bouton-generique" onclick="affiche_presta('analyse')">Analyses</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-heartbeat fa-3x"></i>
                                    <button class="bouton-generique" onclick="affiche_presta('chirurgie')">Chirurgie</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-hospital-o fa-3x"></i>
                                    <button class="bouton-generique" onclick="affiche_presta('hospitalisation')">Hosp.</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-paw fa-3x"></i>
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

            <!-- pour insérer le footer -->
            <?php get_footer(); ?>