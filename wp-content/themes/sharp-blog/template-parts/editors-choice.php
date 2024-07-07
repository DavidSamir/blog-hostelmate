<?php
$sharp_blog_editors_choice_section_title 	   = get_theme_mod( 'sharp_blog_editors_choice_section_title', 'Editors Choice' );
$sharp_blog_number_of_editors_choice_items     = get_theme_mod( 'sharp_blog_number_of_editors_choice_items', 3 );
$sharp_blog_editors_choice_id 			  	   = get_theme_mod( 'sharp_blog_editors_choice_category', '' );

$query = new WP_Query( apply_filters( 'sharp_blog_editors_choice_args', array(
	'post_type'           => 'post',
	'post_status'         => 'publish',
	'posts_per_page'      => absint( $sharp_blog_number_of_editors_choice_items ),
	'cat'                 => $sharp_blog_editors_choice_id,
	'offset'              => 0,
	'ignore_sticky_posts' => 1
)));

$sharp_blog_posts_array = $query->get_posts();
$sharp_blog_show_editors_choice = count( $sharp_blog_posts_array ) > 0 && is_home();

if(false){
	?>
	<section class="section-editors-choice">
		<div class="section-header">
			<h2 class="section-title"><?php echo esc_html($sharp_blog_editors_choice_section_title); ?></h2>
		</div><!-- .section-header -->

		<div class="columns-3 clear">
			<?php
			while ( $query->have_posts() ) : $query->the_post(); ?>

	            <article>
	            	<div class="editors-choice-item">
						<div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
							<a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
						</div><!-- .featured-image -->

			            <div class="entry-container">
							<header class="entry-header">
								<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</header>

							<div class="entry-meta">
								<?php emerge_blog_entry_footer() ?>
								<?php emerge_blog_posted_on() ?>

								<?php $sharp_blog_read_more_label = get_theme_mod( 'read_more_label' , 'Read More' );
								if ( !empty($sharp_blog_read_more_label) ) { ?>
									<div class="read-full">
										<a href="<?php the_permalink(); ?>"><?php echo esc_html($sharp_blog_read_more_label);?></a>
									</div><!-- .read-more -->
								<?php } ?>
							</div><!-- .entry-meta -->
				        </div><!-- .entry-container -->
				    </div><!-- .editors-choice-item -->
	            </article>
		        
			<?php
			endwhile; 
			wp_reset_postdata(); ?>
		</div><!-- .columns-4 -->
	</section>
<?php } ?>