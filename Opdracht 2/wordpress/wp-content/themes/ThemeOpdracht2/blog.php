<?php
/**
 * Template Name: blog
 */
 get_header(); ?>

    <body>
        <header class="header">
            <h1 class="main-header">ESCAPE VELOCITY</h1>
            <ul class="header-subnav">
                <li><a href="http://iwtsl.ehb.be/~mathias.papeleu/wordpress/">Home</a></li>
                <li><a href="#" class="is-active">Blog</a></li>
                <li><a href="http://iwtsl.ehb.be/~mathias.papeleu/wordpress/about/">Over Ons</a></li>
                <li><a href="http://iwtsl.ehb.be/~mathias.papeleu/wordpress/screenshots/">Screenshots</a></li>
            </ul>
        </header>

        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

        <div class="row">

            <?php
            $query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 4 ) );
            while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="large-6 large-offset-0 medium-8 medium-offset-2 columns">
                    <div class="post">
                        <div class="row author">
                            <p class="smallText">
                                Posted By:
                                <?php the_author_posts_link();  echo "  "; the_time();?>
                            </p>
                        </div>
                        <h1><?php the_title_attribute(); ?></h1>
                        <p>
                            <?php the_content(); ?>
                        </p>
                        <!--<img src="../wp-content/uploads/2016/01/img-placeholder.png">-->
                    </div>
                </div>
                <?php endwhile; ?>

        </div>


        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/what-input.min.js"></script>
        <script src="js/foundation.min.js"></script>
        <script src="js/app.js"></script>
        </script>
    </body>

    </html>