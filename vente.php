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
                            <div class="uniform-article">
                                <?php query_posts('category_name=titre-intro-vente'); ?>
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

                            <div class="vente">
                                <div id="croquettes" class="separation">
                                    <i class="fa fa-medkit fa-3x" aria-hidden="true"></i>
                                    <h3>croquettes - <small>cliquer ici</small></h3>

                                    <div class="uniform-article" id="article-croquettes">
                                        <?php query_posts('category_name=croquettes'); ?>
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
                                
                                <div id="vermifuges" class="separation">
                                    <i class="fa fa-heartbeat fa-3x" aria-hidden="true"></i>
                                    <h3>vermifuges et antiparasitaires externes - <small>cliquer ici</small></h3>

                                    <div class="uniform-article" id="article-vermifuges">
                                        <?php query_posts('category_name=vermifuges'); ?>
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
                                
                                <div id="shampoings" class="separation">
                                    <i class="fa fa-ambulance fa-3x" aria-hidden="true"></i>
                                    <h3>shampoings - <small>cliquer ici</small></h3>

                                    <div class="uniform-article" id="article-shampoings">
                                        <?php query_posts('category_name=shampoings'); ?>
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
                                
                                <div id="brosses" class="separation">
                                    <i class="fa fa-plus-square fa-3x" aria-hidden="true"></i>
                                    <h3>brosses - <small>cliquer ici</small></h3>

                                    <div class="uniform-article" id="article-brosses">
                                        <?php query_posts('category_name=brosses'); ?>
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
                                
                                <div id="colliers" class="separation">
                                    <i class="fa fa-stethoscope fa-3x" aria-hidden="true"></i>
                                    <h3>Colliers et laisses - <small>cliquer ici</small></h3>

                                    <div class="uniform-article" id="article-colliers">
                                        <?php query_posts('category_name=colliers-laisses'); ?>
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