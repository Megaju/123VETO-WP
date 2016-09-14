<?php //fix bug header ?>

    <?php
/*
Template Name: vente
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

                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2" x="0px" y="0px" viewBox="0 -70 310.883 310.883" style="enable-background:new 0 0 310.883 310.883;" xml:space="preserve">
                                            <path d="M299.459,174.267c0,0-16.433-71.773-16.707-72.356c-3.429-10.694-17.078-19.279-40.725-25.565  c-23.243-6.181-53.993-9.584-86.586-9.584c-32.592,0-63.343,3.403-86.586,9.584c-23.657,6.29-37.308,14.879-40.729,25.58  c-0.272,0.578-16.702,72.342-16.702,72.342C4.778,176.576,0,182.879,0,190.312c0,18.79,17.893,33.075,53.18,42.458  c27.533,7.32,63.85,11.353,102.261,11.353c0.002,0,0.004,0,0.006,0c38.41,0,74.724-4.031,102.255-11.352  c35.287-9.383,53.18-23.668,53.18-42.459C310.883,182.879,306.105,176.576,299.459,174.267z M211.452,189.198  c0,7.987-6.498,14.486-14.485,14.486c-7.755,0-14.107-6.124-14.471-13.79h-54.11c-0.365,7.666-6.715,13.79-14.469,13.79  c-7.988,0-14.486-6.499-14.486-14.486c0-3.783,1.458-7.232,3.842-9.815c-2.384-2.583-3.842-6.032-3.842-9.815  c0-7.987,6.499-14.486,14.486-14.486c7.754,0,14.104,6.124,14.469,13.79h54.11c0.364-7.666,6.716-13.79,14.471-13.79  c7.987,0,14.485,6.499,14.485,14.486c0,3.783-1.458,7.232-3.842,9.815C209.994,181.966,211.452,185.415,211.452,189.198z   M235.357,120c-21.545,5.448-49.926,8.449-79.916,8.449c-29.99,0-58.371-3.001-79.916-8.449  c-20.722-5.24-28.012-10.998-29.796-13.382c1.8-2.425,9.104-8.177,29.8-13.409c21.544-5.448,49.924-8.448,79.912-8.448  c29.987,0,58.367,3,79.911,8.448c20.654,5.223,27.97,10.961,29.789,13.395C263.329,109.033,256.023,114.773,235.357,120z" fill="#F58900" />
                                            <g>
                                        </svg>
                                        <h3>croquettes</h3>
                                        <i class="fa fa-chevron-down direction-vente" aria-hidden="true"></i>

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
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                                            <g>
                                                <circle cx="44" cy="40" r="1" fill="#F58900" />
                                                <circle cx="46" cy="57" r="1" fill="#F58900" />
                                                <circle cx="21" cy="49" r="1" fill="#F58900" />
                                                <circle cx="37" cy="43" r="1" fill="#F58900" />
                                                <circle cx="52" cy="48" r="1" fill="#F58900" />
                                                <circle cx="15" cy="57" r="1" fill="#F58900" />
                                                <path d="M17.071,12.899C15.182,11.011,12.671,9.97,10,9.97s-5.182,1.041-7.071,2.929C1.04,14.788,0,17.299,0,19.971   c0,2.671,1.04,5.182,2.929,7.071l15.556,15.556l14.142-14.142L17.071,12.899z" fill="#F58900" />
                                                <path d="M57.071,3.929C55.182,2.04,52.671,1,50,1s-5.182,1.04-7.071,2.929L27.373,19.485l14.142,14.142l15.556-15.557   C58.96,16.182,60,13.671,60,11S58.96,5.818,57.071,3.929z" fill="#F58900" />
                                                <path d="M40,36c0-2.206-1.794-4-4-4s-4,1.794-4,4s1.794,4,4,4S40,38.206,40,36z" fill="#F58900" />
                                                <path d="M29,40c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S31.206,40,29,40z" fill="#F58900" />
                                                <path d="M39,46c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S41.206,46,39,46z" fill="#F58900" />
                                                <path d="M29,51c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S31.206,51,29,51z" fill="#F58900" />
                                            </g>
                                        </svg>
                                        <h3>vermifuges et antiparasitaires externes</h3>
                                        <i class="fa fa-chevron-down direction-vente" aria-hidden="true"></i>

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
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2" viewBox="0 0 297 297" enable-background="new 0 0 297 297">
                                            <g>
                                                <path d="m96.734,46.798c5.775,0 10.458-4.682 10.458-10.458 0-13.683 11.924-15.271 15.584-15.425h15.266v32.26c-7.847,2.148-14.716,6.661-19.824,12.708h60.563c-5.108-6.047-11.977-10.56-19.824-12.708v-32.26h32.68c5.775,0 10.458-4.682 10.458-10.458s-4.682-10.457-10.457-10.457h-69.021c-0.07,0-0.141,0.001-0.211,0.002-14.522,0.293-36.129,10.213-36.129,36.339-0.001,5.775 4.682,10.457 10.457,10.457z" fill="#F58900" />
                                                <polygon points="155.82,227.456 222.301,227.456 212.066,155.82 155.82,155.82  " fill="#F58900" />
                                                <path d="m104.698,80.967c-5.204,0-9.616,3.827-10.353,8.979l-24.526,171.672c-1.645,8.703 0.623,17.599 6.246,24.459 5.691,6.942 14.102,10.923 23.078,10.923h98.712c8.976,0 17.388-3.981 23.08-10.923 5.623-6.859 7.891-15.756 6.246-24.458l-2.789-19.521h-75.892c-4.043,0-7.32-3.277-7.32-7.32v-86.278c0-4.043 3.277-7.32 7.32-7.32h61.474l-7.32-51.234c-0.736-5.152-5.148-8.979-10.353-8.979h-87.603z" fill="#F58900" />
                                            </g>
                                        </svg>
                                        <h3>shampoings</h3>
                                        <i class="fa fa-chevron-down direction-vente" aria-hidden="true"></i>

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
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2" x="0px" y="0px" viewBox="0 0 53.516 53.516" style="enable-background:new 0 0 53.516 53.516;" xml:space="preserve">
                                            <path d="M52.638,15.594L37.923,0.879C37.36,0.316,36.598,0,35.802,0c-0.795,0-1.559,0.316-2.121,0.879L28.469,6.09l-5.365,5.365  L11.455,23.105L6.09,28.469l-5.211,5.211C0.316,34.243,0,35.006,0,35.802c0,0.796,0.316,1.559,0.879,2.122l14.715,14.714  c0.585,0.585,1.354,0.878,2.121,0.878s1.536-0.293,2.122-0.879c1.171-1.171,1.171-3.071,0-4.243l-6.769-6.769l0.969-0.969  l6.769,6.769c0.585,0.585,1.354,0.878,2.121,0.878s1.536-0.293,2.122-0.879c1.171-1.171,1.171-3.071,0-4.243l-6.769-6.769  l1.122-1.122l6.769,6.769c0.585,0.585,1.354,0.878,2.121,0.878s1.536-0.293,2.122-0.879c1.171-1.171,1.171-3.071,0-4.243  l-6.769-6.769l1.582-1.582l6.769,6.769c0.585,0.586,1.354,0.879,2.121,0.879s1.536-0.293,2.121-0.879  c1.172-1.171,1.172-3.071,0-4.242l-6.769-6.769l1.582-1.582l6.769,6.769c1.171,1.171,3.071,1.172,4.243,0  c1.172-1.172,1.172-3.071,0-4.243l-6.769-6.769l1.122-1.122l6.769,6.769c1.171,1.171,3.071,1.172,4.243,0  c1.172-1.172,1.172-3.071,0-4.243l-6.769-6.769l0.969-0.969l6.769,6.769c1.171,1.171,3.071,1.172,4.243,0  C53.809,18.665,53.809,16.765,52.638,15.594z" fill="#F58900" />
                                            <g>
                                        </svg>
                                        <h3>brosses</h3>
                                        <i class="fa fa-chevron-down direction-vente" aria-hidden="true"></i>

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
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2" x="0px" y="0px" viewBox="0 -40 326.577 326.577" style="enable-background:new 0 0 326.577 326.577;" xml:space="preserve">
        <path d="M275.201,55.683c-30.025-9.884-69.769-15.327-111.912-15.327c-42.142,0-81.887,5.443-111.913,15.327  C8.913,69.662,0,87.578,0,100.146v59.709c0,12.568,8.913,30.484,51.376,44.462c22.988,7.567,51.681,12.52,82.778,14.43  c4.218,7.774,11.461,13.673,20.135,16.126v10.688h-12.238c0.002-0.105,0.003-0.212,0.003-0.317c0-9.22-7.501-16.721-16.721-16.721  c-9.22,0-16.721,7.501-16.721,16.721c0,4.77,2.007,9.079,5.222,12.128c-3.215,3.05-5.222,7.359-5.222,12.129  c0,9.22,7.501,16.721,16.721,16.721c9.22,0,16.721-7.501,16.721-16.721c0-0.106-0.001-0.213-0.003-0.318h42.476  c-0.002,0.106-0.003,0.212-0.003,0.318c0,9.22,7.501,16.721,16.722,16.721c9.219,0,16.72-7.501,16.72-16.721  c0-4.77-2.008-9.08-5.222-12.129c3.214-3.049,5.222-7.358,5.222-12.128c0-9.22-7.5-16.721-16.72-16.721  c-9.22,0-16.722,7.501-16.722,16.721c0,0.105,0.001,0.212,0.003,0.317h-12.238v-10.688c8.674-2.453,15.916-8.352,20.135-16.126  c31.096-1.91,59.79-6.862,82.777-14.43c42.463-13.977,51.376-31.893,51.376-44.462v-59.71  C326.577,87.577,317.664,69.661,275.201,55.683z M64.623,129.834c23.256-8.26,56.936-14.338,98.666-14.338  c41.729,0,75.41,6.078,98.665,14.338c-27.257,7.82-61.892,12.102-98.665,12.102S91.879,137.654,64.623,129.834z M308.577,100.145  c0,5.408-6.088,13.102-22.017,20.677c-4.082-2.117-8.704-4.19-13.917-6.198v-40.8C299.058,83.038,308.577,93.381,308.577,100.145z   M57.004,72.781c28.257-9.302,66.003-14.425,106.284-14.425c33.559,0,65.336,3.567,91.354,10.133v40.232  c-26.054-7.268-57.889-11.226-91.354-11.226c-39.399,0-76.57,5.466-104.666,15.391c-7.187,2.539-13.335,5.203-18.606,7.937  C24.088,113.248,18,105.554,18,100.146C18,93.125,28.247,82.248,57.004,72.781z M163.289,218.126  c-8.338,0-15.123-6.784-15.123-15.124c0-8.339,6.784-15.123,15.123-15.123c8.338,0,15.123,6.784,15.123,15.123  C178.411,211.342,171.627,218.126,163.289,218.126z" fill="#F58900" />
        <g>
    </svg>
    <h3>Colliers et laisses</h3>
    <i class="fa fa-chevron-down direction-vente" aria-hidden="true"></i>

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
                            </section>
                        </div>
                </section>
                </div>

                <?php get_footer(); ?>

                    </body>

                    </html>