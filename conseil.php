<?php
/*
Template Name: conseils
*/
?>


        <!-- pour insérer le header -->
        <?php get_header(); ?>

            <div class="page">
                <?php get_sidebar(); ?>

                    <div class="content">
                        <section class="formeindex">

                            <div class="uniform-article">
                                <?php query_posts('category_name=titre-intro-conseils'); ?>
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

                            <!-- ICONES -->
                            <div class="icone-generique">
                                <div class="center-generique">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 52.488 52.488" style="enable-background:new 0 0 52.488 52.488;" xml:space="preserve" width="60px" height="60px">
                                        <g>
                                            <path d="M46.324,8.615c-0.111-2.072-1.259-4.713-2.296-5.924c-1.038-1.21-2.974-2.359-4.321-2.567   c-1.349-0.207-4.108-0.148-6.164,0.133l-7.299,0.995l-7.299-0.995c-2.057-0.281-4.816-0.34-6.165-0.133   c-1.349,0.208-3.283,1.357-4.321,2.567C7.422,3.902,6.275,6.543,6.163,8.615c-0.198,3.667,0.046,9.474,2.672,14.804   c0,0,1.879,3.758,1.879,9.77c0,4.396,1.675,13.876,3.85,18.093c0.951,1.845,3.801,1.491,4.378-0.503   c2.02-6.988,3.46-24.59,7.301-24.541c3.839-0.049,5.279,17.553,7.302,24.541c0.578,1.994,3.428,2.348,4.379,0.503   c2.174-4.217,3.85-13.694,3.85-18.093c0-6.012,1.879-9.77,1.879-9.77C46.278,18.089,46.522,12.282,46.324,8.615z" fill="#F58900" />
                                        </g>
                                    </svg>
                                    <button class="bouton-generique" onclick="fiche_conseil('dents')">Dents</button>
                                </div>

                                <div class="center-generique">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 297 297" style="enable-background:new 0 0 297 297;" xml:space="preserve" width="60px" height="60px">
                                        <path d="M294.908,142.226c-0.566-0.756-14.168-18.72-38.881-36.693c-32.842-23.887-70.023-36.511-107.525-36.511  c-37.501,0-74.683,12.624-107.526,36.51C16.262,123.506,2.658,141.47,2.092,142.226c-2.789,3.718-2.789,8.831,0,12.549  c0.566,0.756,14.17,18.72,38.884,36.694c32.844,23.885,70.025,36.51,107.526,36.51c37.502,0,74.683-12.625,107.525-36.511  c24.713-17.974,38.315-35.938,38.881-36.693C297.697,151.057,297.697,145.943,294.908,142.226z M141.274,90.398  c-5.92,17.643-10.027,51.152-10.027,58.102c0,6.949,4.107,40.459,10.027,58.102c-28.893-3.574-51.336-28.258-51.336-58.102  C89.939,118.656,112.382,93.973,141.274,90.398z M155.73,206.602c5.92-17.643,10.028-51.152,10.028-58.102  c0-6.949-4.108-40.459-10.028-58.102c28.893,3.574,51.336,28.258,51.336,58.102C207.065,178.344,184.622,203.027,155.73,206.602z   M24.153,148.5c5.686-6.283,15.785-16.427,29.681-26.457c9.118-6.581,18.458-12.157,27.996-16.725  c-8.088,12.443-12.807,27.268-12.807,43.182s4.719,30.738,12.807,43.182c-9.538-4.567-18.878-10.144-27.996-16.725  C39.937,164.925,29.836,154.779,24.153,148.5z M243.167,174.957c-9.115,6.581-18.456,12.156-27.991,16.724  c8.086-12.442,12.805-27.268,12.805-43.181s-4.719-30.738-12.805-43.181c9.535,4.567,18.876,10.143,27.991,16.724  c13.897,10.032,23.998,20.178,29.68,26.457C267.162,154.783,257.063,164.927,243.167,174.957z" fill="#F58900" />
                                    </svg>
                                    <button class="bouton-generique" onclick="fiche_conseil('yeux')">Yeux / Oreilles</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-paw fa-3x text-center"></i>
                                    <button class="bouton-generique" onclick="fiche_conseil('pelage')">Pelage</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-bug fa-3x text-center"></i>
                                    <button class="bouton-generique" onclick="fiche_conseil('parasites')">Parasites</button>
                                </div>
                            </div>

                            <div class="icone-generique">
                                <div class="center-generique">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="60px" height="60px">
                                        <g>
                                            <path d="m495,93.5l-76.2-76.5c-8-8-20.9-8-28.9,0-8,8-8,20.9 0,28.9l23.7,23.8-19.9,19.9 28.8,28.9 19.9-19.9 23.7,23.7c12.5,11 24.9,4 28.9,0 8-7.9 8-20.9 0-28.8z" fill="#F58900" />
                                            <path d="m320.8,74.2c-8-8-20.9-8-28.9,0-8,8-8,20.9 0,28.9l11,11-102.2,102.2 94.9,95.1 102.2-102.2 11,11c3.7,4.7 18,10.9 28.9,0 8-8 8-20.9 0-28.9l-116.9-117.1z" fill="#F58900" />
                                            <path d="m103.6,313.4c-21.2,21.2-25.2,53.1-12.2,78.4l-74.4,74.3c-8,8-8,20.9 0,28.9 4,4 15.8,11.2 28.9,0l74.3-74.3c9.4,4.9 45,19.1 78.3-12.1l68.3-68.3-94.9-95.1-68.3,68.2z" fill="#F58900" />
                                        </g>
                                    </svg>
                                    <button class="bouton-generique" onclick="fiche_conseil('vaccinChien')">Vaccin Chien</button>
                                </div>

                                <div class="center-generique">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 58.45 58.45" style="enable-background:new 0 0 58.45 58.45;" xml:space="preserve" width="60px" height="60px">
                                        <g>
                                            <path d="M58.157,56.743l-5.614-5.614c0.304-0.304,0.38-0.769,0.188-1.154l-2.539-5.078c1.457-1.935,1.325-4.694-0.436-6.455   l-2.992-2.992H24.136l14.305,14.305c0.934,0.934,2.174,1.448,3.495,1.448c1.087,0,2.11-0.366,2.963-1.01l5.075,2.538   c0.142,0.071,0.295,0.105,0.447,0.105c0.26,0,0.516-0.101,0.708-0.293l5.614,5.614c0.195,0.195,0.451,0.293,0.707,0.293   s0.512-0.098,0.707-0.293C58.547,57.766,58.547,57.133,58.157,56.743z M36.45,40.45c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1   s1,0.448,1,1C37.45,40.002,37.002,40.45,36.45,40.45z M41.45,46.45c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1s1,0.448,1,1   C42.45,46.002,42.002,46.45,41.45,46.45z M42.45,40.45c0-0.552,0.448-1,1-1s1,0.448,1,1c0,0.552-0.448,1-1,1   S42.45,41.002,42.45,40.45z" fill="#F58900" />
                                            <path d="M18.278,23.935l-6.748-6.748l1.414-1.414l6.748,6.748l2.829-2.829l-6.748-6.748l1.414-1.414l6.748,6.748l2.829-2.829   l-6.748-6.748l2.121-2.121c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0l-2.121,2.121l-2.829,2.829L9.485,3.828   l2.121-2.121c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0l-9.899,9.899c-0.391,0.391-0.391,1.023,0,1.414   C0.488,11.802,0.744,11.899,1,11.899s0.512-0.098,0.707-0.293l2.121-2.121l6.288,6.288l-2.829,2.829l-2.121,2.121   c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l2.121-2.121l6.748,6.748   L18.278,23.935z M5.253,8.082l2.829-2.829l6.277,6.277l-2.829,2.829L5.253,8.082z" fill="#F58900" />
                                            <path d="M23.692,33.45h21.071L28.177,16.864l-2.829,2.829l0,0l-5.657,5.657l0,0l-2.829,2.829l1.808,1.808l4.242-4.243   c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414l-4.242,4.243l1.414,1.414l4.243-4.242c0.391-0.391,1.023-0.391,1.414,0   s0.391,1.023,0,1.414L23.692,33.45z" fill="#F58900" />
                                        </g>
                                    </svg>
                                    <button class="bouton-generique" onclick="fiche_conseil('vaccinChat')">Vaccin Chat</button>
                                </div>

                                <div class="center-generique">
                                    <i class="fa fa-barcode fa-3x text-center"></i>
                                    <button class="bouton-generique" onclick="fiche_conseil('identification')">Identification</button>
                                </div>

                                <div class="center-generique">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve" width="60px" height="60px">
                                        <g>
                                            <circle cx="119.646" cy="117.515" r="40.848" fill="#F58900" />
                                        </g>
                                        <g>
                                            <path d="M214.324,264.816l-68.217-3.305l-34.558-69.43l9.199,11.48c4.197-14.65-4.277-29.929-18.927-34.126    c-19.032-5.453-39.476-2.711-56.399,7.563s-28.789,27.147-32.733,46.547L0.978,281.149c-2.917,14.352,0.765,29.254,10.032,40.595    c8.859,10.841,21.927,17.314,35.855,17.864c3.907,0.873,3.54,0.554,45.145,0.431l-66.147,56.156    c-9.35,7.937-10.495,21.952-2.557,31.303c7.943,9.355,21.959,10.491,31.303,2.557l112.46-95.472    c4.641-3.941,7.338-9.502,7.762-15.322c-10.992-0.532-38.487-1.865-49.453-2.396c-12.363-0.599-22.383-9.447-25.022-20.945    c-4.599-20.044-18.375-80.18-18.375-80.18l35.827,71.977c2.985,5.998,8.98,9.915,15.672,10.239    c0.707,0.034,79.257,3.853,79.965,3.853c9.808,0,17.989-7.708,18.469-17.612C232.409,273.988,224.533,265.31,214.324,264.816z" fill="#F58900" />
                                        </g>
                                        <g>
                                            <path d="M334.219,219.22c-8.638-3.051-17.38-0.604-18.948,3.838c-1.567,4.441-4.241,34.307,4.397,37.358    c8.64,3.051,25.317-21.867,26.885-26.308C348.122,229.667,342.858,222.271,334.219,219.22z" fill="#F58900" />
                                        </g>
                                        <g>
                                            <path d="M509.081,337.92c-2.306-0.842-4.856,0.344-5.698,2.65l-0.094,0.255c-3.975,10.88-10.475,21.113-17.705,28.975    c-4.875,5.075-10.783,10.123-17.762,13.407c-1.016-11.826-5.256-30.095-40.272-57.105c-58.323-38.589-72.356-57.539-72.356-57.539    s-3.35-5.865-7.546-13.097c-8.252,10.441-19.65,21.273-32.181,16.846c-13.799-4.874-14.279-23.583-14.436-29.731    c-0.128-5.018,0.165-11.338,0.844-16.519l-0.307,0.072c-11.516,2.736-20.547,11.662-23.418,23.145l-13.025,7.974    c-2.37,1.45-4.001,3.853-4.474,6.59c-0.473,2.739,0.255,5.548,2,7.711l7.762,9.621c6.333,7.85,17.063,10.624,26.407,6.827    c4.023-1.635,8.55-1.52,12.494,0.297c3.944,1.817,6.962,5.183,8.338,9.301c2.182,6.538,4.917,14.476,7.921,22.62l-20.949-4.871    c-2.572-0.598-5.266-0.402-7.723,0.564l-25.434,9.988c-6.708,2.634-10.011,10.208-7.377,16.917    c2.633,6.707,10.209,10.01,16.914,7.377l21.659-8.505l35.107,8.162c0.534,1.112,1.065,2.191,1.593,3.226l-14.432,66.433    c-1.53,7.043,2.939,13.992,9.981,15.522c7.052,1.531,13.994-2.947,15.522-9.982l10.75-49.486    c6.326,2.152,14.553,3.852,23.479,5.531c2.451-7.212,6.533-13.825,12.076-19.368c2.57-2.57,6.733-2.57,9.304,0    c2.646,2.648,2.435,6.868,0,9.303c-10.265,10.264-13.205,24.861-9.164,37.618c-17.557,0-10.912,0-15.157,0    c-7.207,0-13.048,5.842-13.048,13.049c0,7.206,5.842,13.049,13.048,13.049c55.567,0,53.55,0.129,57.35-0.6    c14.416-2.766,23.672-13.41,27.438-26.799c13.19-6.227,23.363-16.085,31.328-28.168c6.702-10.581,11.871-23.185,14.099-36.347    C512.29,340.761,511.127,338.667,509.081,337.92z" fill="#F58900" />
                                        </g>
                                    </svg>
                                    </i>
                                    <button class="bouton-generique" onclick="fiche_conseil('education')">Education</button>
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



            <!-- pour insérer le footer -->
            <?php get_footer(); ?>