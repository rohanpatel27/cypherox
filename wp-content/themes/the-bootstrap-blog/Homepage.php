<?php
/**
 * Template Name: Home Page
 *

 */
get_header();
?>
<h1 class="title"><?php the_field('title'); ?></h1>
<h4 class="subtitle"><?php the_field('sub_title'); ?></h4>
<?php $select_image_position = get_field('select_image_position');

if( get_field('display_post') == '1' ) {
$style = 'style="width:100%";';
}
if( get_field('display_post') == '2' ) {
$style = 'style="width:49%";';
}
if( get_field('display_post') == '3' ) {
$style = 'style="width:33%";';
}
if( get_field('display_post') == '4' ) {
$style = 'style="width:24%";';
}
 ?>
<?php $term = get_field('select_category');
$select_post = get_field('select_post');
$section_class = get_field('section_class');
$section_class_value = get_field('section_class_value');
$section_id = get_field('section_id');
$section_id_value = get_field('section_id_value'); ?>

<?php
if(!empty($term) && $select_post == "recent"){
	$args = array('post_type' => 'post', 'post_status'=>'publish', 'posts_per_page' =>-1,'order'=> 'DESC',
		'tax_query' => array(
        array (
            'taxonomy' => 'category',
            'field' => 'id',
            'terms' => $term,
        )
    	),'paged'=> $paged);
} elseif(!empty($term) && $select_post == 'featured') {
	$args = array('post_type' => 'post', 'post_status'=>'publish', 'posts_per_page' =>-1,
		'meta_query' => array(
        array (
            'key' => 'featured_post',
            'value' => '"yes"',
            'compare' => 'LIKE',
        )
    	), 'order'=> 'ASC','paged'=> $paged);
}elseif($select_post == 'featured'){
	$args = array('post_type' => 'post', 'post_status'=>'publish', 'posts_per_page' =>-1,
		'meta_query' => array(
        array (
            'key' => 'featured_post',
            'value' => '"yes"',
            'compare' => 'LIKE',
        )
    	), 'order'=> 'ASC','paged'=> $paged);
} else{
	$args = array('post_type' => 'post', 'post_status'=>'publish', 'posts_per_page' =>-1, 'order'=> 'DESC','paged'=> $paged);
}



                    $loop = new Wp_Query($args);
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $featured_post = get_field('featured_post');

                    $postid = get_the_ID();
                    $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($postid) );?>

<article id="post-<?php echo get_the_ID(); ?> <?php echo $section_id; ?>" class="blog-post post-<?php echo get_the_ID(); ?> post type-post status-publish format-standard has-post-thumbnail hentry category-news newpost <?php echo $section_class; ?>" <?php echo $style; ?>>
	<?php if ($select_image_position == 'above'){?>
	<a href="<?php the_permalink(); ?>">
		<div class="text-center">
			<img width="700" height="420" src="<?php echo $featuredImage; ?>" class="img-fluid mb-3  wp-post-image" alt="<?php the_title(); ?>">
		</div>
	</a>
	<?php } ?>
	<h2 class="h2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="blog-post-meta"><time class="entry-date updated"><?php echo get_the_date(); ?></time></p>
<?php if ($select_image_position == 'below'){?>
	<a href="<?php the_permalink(); ?>">
		<div class="text-center">
			<img width="700" height="420" src="<?php echo $featuredImage; ?>" class="img-fluid mb-3  wp-post-image" alt="<?php the_title(); ?>">
		</div>
	</a>
	<?php } ?>
	<p><?php $content = get_the_content();
	$trimmed_content = wp_trim_words( $content, 50);
	 echo $trimmed_content; ?>
	<a class="read-more" href="<?php the_permalink(); ?>">→Read&nbsp;more</a></p>


	</article>
<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>