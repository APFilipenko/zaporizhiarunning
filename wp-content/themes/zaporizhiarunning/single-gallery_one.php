<?php get_template_part('banner', 'top');?>
<div class="section padding_layout_1 service_list">
  <div class="container">
    <div class="row">
        <?if (!empty($post->post_content)) {?>
        <div class="description_gallery">
            <p><?the_content();?></p>
        </div>
        <?}?>
                    <div class="clearfix mosaicflow">
                        <?php $thumb = get_field('gallery_image', $post->ID);
$thumb_int                           = intval($thumb);
$images                              = get_children(array(
    'post_parent'    => $post->ID,
    'post_type'      => 'attachment',
    'numberposts'    => -1, // количество выводимых изображений
    'post_mime_type' => 'image',
    'exclude'        => $thumb_int,
));
foreach ($images as $key => $value) {
    ?>
                        <div class="mosaicflow__item">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="<?php echo wp_get_attachment_url($value->ID) ?>"
                            title=
                            <?if (!empty($value->post_excerpt)) {
        echo '"Фото сделано:   ' . $value->post_excerpt;
    } else {
        echo '"';
    }
    if (!empty($value->post_content)) {
        echo '   Описание:   ' . $value->post_content . '">';
    } else {
        echo '">';
    }?>
                        <img src="<?php echo wp_get_attachment_url($value->ID) ?>" alt=""/>
                        </a>
                        <script>$(document).ready(function () {
                                            $(".fancybox-thumb").fancybox({
                                                prevEffect: 'none',
                                                nextEffect: 'none',
                                                helpers: {
                                                    title: {
                                                        type: 'outside'
                                                    },
                                                    thumbs: {
                                                        width: 50,
                                                        height: 50
                                                    }
                                                }
                                            });
                                        });</script>
                        </div>
                        <?}?>
                    </div>
                    </div>
                    </div>
                    </div>
