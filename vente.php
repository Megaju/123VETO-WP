<?php //fix bug header ?>

    <?php
/*
Template Name: vente
*/
?>


        <!-- pour insérer le header -->
        <?php get_header(); ?>

            <div id="attente-bootstrap" class="placement">
                <!-- pour insérer la sidebar -->
                <?php get_sidebar(); ?>

                    <div>
                        <section class="formeindex">
                            <h2>Notre savoir-faire</h2>
                            <div class="index-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas aspernatur dolorum ullam quisquam ut qui velit molestias inventore esse asperiores modi possimus.</p>

                            <div class="vente">
                                <div id="medicament">
                                    <i class="fa fa-medkit fa-3x" aria-hidden="true"></i>
                                    <h3>médicamentation - <small>cliquer ici</small></h3>

                                    <div class="uniform-article" id="article">
                                        <?php query_posts('category_name=medicament'); ?>
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
                                </div>
                                
                                <div id="medicament">
                                    <i class="fa fa-heartbeat fa-3x" aria-hidden="true"></i>
                                    <h3>médicamentation - <small>cliquer ici</small></h3>

                                    <div class="uniform-article" id="article">
                                        <?php query_posts('category_name=medicament'); ?>
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
                                </div>
                                
                                <div id="medicament">
                                    <i class="fa fa-ambulance fa-3x" aria-hidden="true"></i>
                                    <h3>médicamentation - <small>cliquer ici</small></h3>

                                    <div class="uniform-article" id="article">
                                        <?php query_posts('category_name=medicament'); ?>
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
                                </div>
                                
                                <div id="medicament">
                                    <i class="fa fa-plus-square fa-3x" aria-hidden="true"></i>
                                    <h3>médicamentation - <small>cliquer ici</small></h3>

                                    <div class="uniform-article" id="article">
                                        <?php query_posts('category_name=medicament'); ?>
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
                                </div>
                                
                                <div id="medicament">
                                    <i class="fa fa-stethoscope fa-3x" aria-hidden="true"></i>
                                    <h3>médicamentation - <small>cliquer ici</small></h3>

                                    <div class="uniform-article" id="article">
                                        <?php query_posts('category_name=medicament'); ?>
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
                                </div>

                                
                                </div>

                            </div>
                        </section>
                    </div>
            </div>

            <!-- pour insérer le footer -->
            <?php get_footer(); ?>