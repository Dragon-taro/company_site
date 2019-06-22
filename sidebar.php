<h3>News</h3>
<ul>
  <?php
    $paged = (int) get_query_var('paged');
    $args = array(
      'posts_per_page' => 5,
      'paged' => $paged,
      'orderby' => 'post_date',
      'order' => 'DESC',
      'post_type' => 'post',
      'post_status' => 'publish'
    );
    $the_query = new WP_Query($args);
    if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post();
  ?>
  <?php
  $cat = get_the_category();
  $catname = $cat[0]->cat_name; //カテゴリー名
  $date = get_the_date();
  ?>
  <li class="newsRow">
    <a href="<?php the_permalink(); ?>" class="cf">
      <?php the_title(); ?>
    </a>
  </li>
  <?php endwhile; endif; ?>
</ul>

<h3>Category</h3>
<ul>
<!--	<?php wp_nav_menu( array('menu' => 'カテゴリー' )); ?> -->
</ul>
<ul class="category-list">
<?php
// パラメータを指定
$args = array(
    'orderby' => 'id',
    // 降順で指定
    'order' => 'ASC'
);
$categories = get_categories( $args );

foreach( $categories as $category ){
	echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a> </li> ';
}
?>
</ul>
<h3>Archive</h3>
<ul>
  <?php wp_get_archives('type=yearly'); ?>
</ul>
