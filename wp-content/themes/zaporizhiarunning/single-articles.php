 <?php get_header();

if (have_posts()): while (have_posts()): the_post();
        if ($post->post_parent == 0) {
            get_template_part('single', 'articles_list');
        } else {
            get_template_part('single', 'articles_one');
        }
    endwhile;
else:
endif;

get_footer();?>

