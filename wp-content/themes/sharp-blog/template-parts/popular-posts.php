<?php
$sharp_blog_popular_posts_section_title 		= get_theme_mod( 'sharp_blog_popular_posts_section_title', 'Popular Posts' );
$sharp_blog_number_of_popular_posts_items    = get_theme_mod( 'sharp_blog_number_of_popular_posts_items', 3 );
$sharp_blog_popular_posts_id 			  	= get_theme_mod( 'sharp_blog_popular_posts_category', '' );

$query = new WP_Query( apply_filters( 'sharp_blog_popular_posts_args', array(
	'post_type'           => 'post',
	'post_status'         => 'publish',
	'posts_per_page'      => absint( $sharp_blog_number_of_popular_posts_items ),
	'cat'                 => $sharp_blog_popular_posts_id,
	'offset'              => 0,
	'ignore_sticky_posts' => 1
)));

$sharp_blog_posts_array = $query->get_posts();
$sharp_blog_show_popular_posts = count( $sharp_blog_posts_array ) > 0 && is_home();

// if( get_theme_mod( 'sharp_blog_popular_posts', true ) && $sharp_blog_show_popular_posts ) {
if(false) {
	?>
	<section class="section-popular-posts">
		<div class="section-header">
			<h2 class="section-title"><?php echo esc_html($sharp_blog_popular_posts_section_title); ?></h2>
		</div><!-- .section-header -->

		<div class="columns-3 clear">
			<?php
			while ( $query->have_posts() ) : $query->the_post(); ?>

	            <article>
		        	<?php if ( has_post_thumbnail() ) : ?>
						<div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
							<a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
						</div><!-- .featured-image -->
					<?php endif; ?>

		            <div class="entry-container">
		            	<div class="entry-meta">
			        		<?php emerge_blog_entry_footer() ?>
							<?php emerge_blog_posted_on() ?>
			        	</div><!-- .entry-meta -->

						<header class="entry-header">
							<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</header>

						<?php $sharp_blog_excerpt = get_the_excerpt();
						if ( !empty($sharp_blog_excerpt) ) { ?>
							<div class="entry-content">
								<?php the_excerpt(); ?>
							</div><!-- .entry-content -->
						<?php } ?>

						<?php $sharp_blog_read_more_label = get_theme_mod( 'read_more_label' , 'Read More' );
						if ( !empty($sharp_blog_read_more_label) ) { ?>
							<div class="read-full">
								<a href="<?php the_permalink(); ?>"><?php echo esc_html($sharp_blog_read_more_label);?></a>
							</div><!-- .read-more -->
						<?php } ?>
			        </div><!-- .entry-container -->
	            </article>
		        
			<?php
			endwhile; 
			wp_reset_postdata(); ?>
		</div><!-- .columns-4 -->
	</section>
<?php } ?>