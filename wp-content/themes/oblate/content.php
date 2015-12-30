<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
	 $url = $thumb['0']; ?>
<a href="<?php the_permalink();?>">
<article id="post-<?php the_ID(); ?>" class="article-excerpt">
	<div class="article-header">
		<h2><?php the_title();?></h2>
    <time datetime="<?php the_time('Y-m-d');?>">
			<?php the_time('F j, Y');?>
		</time>
	</div>
<?php if(get_post_thumbnail_id()) {?>
  <div class="flex-responsive">
    <div class="box three-fourths"><img src="<?php echo $url; ?>" class="mobile-only"> <?php } ?>		
<?php the_excerpt(); ?>
<?php if(get_post_thumbnail_id()) {?>
	 </div>
    <div class="box one-fourth thumb">
	 <img src="<?php echo $url; ?>" class="desktop-only" alt="<?php the_title();?>">
	  </div>
	</div><?php } ?>
</article>
</a>
