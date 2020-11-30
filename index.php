<?php get_header(); ?>

<body>
    <header class="header">
        <?php wp_body_open(); 
            if (have_posts() ) : ?>
            <section id="hero" class="hero"> 
            <?php while (have_posts()):
                    the_post(); ?>
                    <div class="hero--wrapper">
                        <h2 class="hero--wrapper__text"><?php the_title(); ?></h2>
                        <?php the_content() ?>
                    </div>
                    <?php
                    //var_dump(get_the_content());
                    the_post_thumbnail('large', array(
                        'class' => 'hero--img'
                    ));
                endwhile; ?>
            </section> <?php
            endif;
        ?>
    </header>
  <?php 
    get_footer(); 
  ?>