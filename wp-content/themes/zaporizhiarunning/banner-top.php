<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title"><?php wp_title("");?></h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                <?$post_type = get_post_type_object(get_post_type($post->ID));
$linc                        = $_SERVER['REQUEST_URI'];
if ($post->post_type == 'gallery' && $post->post_parent == 0 || $post->post_type == 'articles' && $post->post_parent == 0) {?>
                <li><a href="/<?echo $post_type->name; ?>"><?echo $post_type->label; ?></a></li>
                <?} else if ($post->post_type == 'gallery' && $post->post_parent !== 0 && !is_tax() && $linc !== "/gallery/" ||
    $post->post_type == 'articles' && $post->post_parent !== 0 && !is_tax() && $linc !== "/articles/") {
    $parent = get_post($post->post_parent);?>
                  <li><a href="/<?echo $post_type->name; ?>"><?echo $post_type->label; ?></a></li>
                  <li><a href="<?echo get_permalink($parent->ID) ?>"><?echo $parent->post_title ?></a></li>
                <?}?>
                <li class="active"><?php wp_title("");?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>