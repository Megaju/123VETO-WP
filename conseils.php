<?php //fix bug header ?>

    <?php
/*
Template Name: conseils
*/
?>


        <!-- pour insérer le header -->
        <?php get_header(); ?>

            <div class="page conseils">
                <?php get_sidebar(); ?>

                    <div class="content">
                       <h2 class="bandeau bandeau-mt0">CONSEILS</h2>
                       
                        <section class="formeindex">

                            <!-- ICONES -->
                            <div class="icone-generique">
                                <div class="center-generique">
                                    <div class="numero animation anim">
																		<?php include("img/svg/conseil_svg/conseil_dent.php"); ?>
                                    </div>
                                    <a href="#dents"><button class="bouton-generique" onclick="fiche_conseil('dents')">Dents</button></a>
                                </div>

                                <div class="center-generique">
                                    <div class="numero animation anim">
																		<?php include("img/svg/conseil_svg/conseil_eyecat.php"); ?>
																		</div>
                                    <a href="#yeux"><button class="bouton-generique" onclick="fiche_conseil('yeux')">Yeux / Oreilles</button></a>
                                </div>

                                <div class="center-generique">
                                    <div class="numero animation anim">
																		<?php include("img/svg/conseil_svg/conseil_pelage.php"); ?>
																		</div>
                                    <a href="#pelage"><button class="bouton-generique" onclick="fiche_conseil('pelage')">Pelage</button></a>
                                </div>

                                <div class="center-generique">
                                    <div class="numero animation anim">
																		<?php include("img/svg/conseil_svg/conseil_parasite.php"); ?>
																		</div>
                                    <a href="#parasites"><button class="bouton-generique" onclick="fiche_conseil('parasites')">Parasites</button></a>
                                </div>
                            </div>

                            <div class="icone-generique">
                                <div class="center-generique">
                                    <div class="numero animation anim">
																		<?php include("img/svg/conseil_svg/conseil_vaccin_chien.php"); ?>
																		</div>
                                    <a href="#vaccinChien"><button class="bouton-generique" onclick="fiche_conseil('vaccinChien')">Vaccin Chien</button></a>
                                </div>

                                <div class="center-generique">
                                    <div class="numero animation anim">
																		<?php include("img/svg/conseil_svg/conseil_vaccin_chat.php"); ?>
																		</div>
                                    <a href="#vaccinChat"><button class="bouton-generique" onclick="fiche_conseil('vaccinChat')">Vaccin Chat</button></a>
                                </div>

                                <div class="center-generique">
                                    <div class="numero animation anim">
																		<?php include("img/svg/conseil_svg/conseil_barcode.php"); ?>
																		</div>
                                    <a href="#identification"><button class="bouton-generique" onclick="fiche_conseil('identification')">Identification</button></a>
                                </div>

                                <div class="center-generique">
                                    <div class="numero animation anim">
																		<?php include("img/svg/conseil_svg/conseil_education.php"); ?>
																		</div>
                                    <a href="#education"><button class="bouton-generique" onclick="fiche_conseil('education')">Education</button></a>
                                </div>
                            </div>
                        </section>



                        <section>
                            <!--AFFICHAGE DES ARTICLES-->

                            <!-- articles dents -->
                            <div class="uniform-article" id="dents">
                                <?php query_posts('category_name=dents'); ?>
                                    <?php if(have_posts()) : ?>
                                        <?php while(have_posts()) : the_post();?>

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

                            <!-- articles yeux oreilles -->
                            <div class="uniform-article" id="yeux">
                                <?php query_posts('category_name=yeux'); ?>
                                    <?php if(have_posts()) : ?>
                                        <?php while(have_posts()) : the_post();?>

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

                            <!-- articles pelage -->
                            <div class="uniform-article" id="pelage">
                                <?php query_posts('category_name=pelage'); ?>
                                    <?php if(have_posts()) : ?>
                                        <?php while(have_posts()) : the_post();?>

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

                            <!-- articles parasites -->
                            <div class="uniform-article" id="parasites">
                                <?php query_posts('category_name=parasites'); ?>
                                    <?php if(have_posts()) : ?>
                                        <?php while(have_posts()) : the_post();?>

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

                            <!-- articles vaccin chien -->
                            <div class="uniform-article" id="vaccinChien">
                                <?php query_posts('category_name=vaccinChien'); ?>
                                    <?php if(have_posts()) : ?>
                                        <?php while(have_posts()) : the_post();?>

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

                            <!-- articles vaccin chat -->
                            <div class="uniform-article" id="vaccinChat">
                                <?php query_posts('category_name=vaccinChat'); ?>
                                    <?php if(have_posts()) : ?>
                                        <?php while(have_posts()) : the_post();?>

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

                            <!-- articles identification -->
                            <div class="uniform-article" id="identification">
                                <?php query_posts('category_name=identification'); ?>
                                    <?php if(have_posts()) : ?>
                                        <?php while(have_posts()) : the_post();?>

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

                            <!-- articles education -->
                            <div class="uniform-article" id="education">
                                <?php query_posts('category_name=education'); ?>
                                    <?php if(have_posts()) : ?>
                                        <?php while(have_posts()) : the_post();?>


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
            
            <script>

</script>



            <!-- pour insérer le footer -->
            <?php get_footer(); ?>
