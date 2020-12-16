 <?php get_header();

if (have_posts()): while (have_posts()): the_post();
        if ($post->post_parent == 0) {
            get_template_part('single', 'gallery_list');
        } else {
            get_template_part('single', 'gallery_one');
        }
    endwhile;
else:
endif;

get_footer();?>


