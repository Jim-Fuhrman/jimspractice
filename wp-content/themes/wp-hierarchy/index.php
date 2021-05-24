<?php get_header(); ?>

<div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php $pages = new WP_Query([
                'post_type' => 'page',
                'posts_per_page' => -1
            ]);
            echo "There are " . $pages->found_posts . " pages in Jim's database. ";
            if($pages->have_posts()) : while (have_posts()) : the_post();
                get_template_part('template-parts/content');
            endwhile; else : 
                get_template_part('template-parts/content-none');
            endif; ?>
        </main>
    </div>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>

    
