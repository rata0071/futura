<?php get_header(); ?>
<script>
	jQuery(document).ready(function(){
				jQuery('.bar').mosaic({
					animation	:	'slide'		//fade or slide
				});
	});
</script>
			<?php $showed = array(); ?>
			<?php query_posts('posts_per_page=3&cat=19'); ?>
			<?php if ( have_posts() ) :
				the_post();
			?>
			<div id="destacados" class="clearfix row-fluid">
					<article class="span6">
						<?php $showed[] = $post->ID; ?>
						<div class="mosaic-block bar clearfix">
							<div class="mosaic-backdrop">
								<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'wpbs-featured' ); ?>
								</a>
							</div>
							<div class="mosaic-overlay">
								<?php the_excerpt(); ?>
							</div>
						</div>
						<div>
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						</div>

					</article>
					<article class="span3">
				<?php if ( have_posts() ) : 
					the_post();
				?>
						<?php $showed[] = $post->ID; ?>
						<div class="mosaic-block bar clearfix">
							<div class="mosaic-backdrop">
								<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'wpbs-featured' ); ?>
								</a>
							</div>
							<div class="mosaic-overlay">
								<?php the_excerpt(); ?>
							</div>
						</div>
						<div>
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						</div>
				<?php endif ?>
				</article>
				<article class="span3">
				<?php if ( have_posts() ) : 
					the_post();
				?>
						<?php $showed[] = $post->ID; ?>
						<div class="mosaic-block bar clearfix">
							<div class="mosaic-backdrop">
								<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'wpbs-featured' ); ?>
								</a>
							</div>
							<div class="mosaic-overlay">
								<?php the_excerpt(); ?>
							</div>
						</div>
						<div>
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						</div>
				<?php endif ?>
				</article>
			</div>
			<?php endif ?>
			<?php wp_reset_query(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span8 clearfix" role="main">
					<div class="row-fluid">
						<?php $zz = 0 ?> 
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php if ( ! in_array($post->ID, $showed) ) : ?>

								<?php $showed[] = $post->ID; $zz++; ?>
								<?php if ( $zz < 3 ) : ?>
									<?php get_template_part( 'content', get_post_format() ); ?>
								<?php elseif ( $zz < 7 ) : ?>
									<?php get_template_part( 'content-short', get_post_format() ); ?>
								<?php else : ?>
									<?php get_template_part( 'content-title', get_post_format() ); ?>
								<?php endif ?>

								<?php if ( $zz % 2 == 0 ) : ?>
							</div>
							<div class="row-fluid">
								<?php endif ?>
							<?php endif ?>

						<?php endwhile; ?>	
					
					</div>

					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>

				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
