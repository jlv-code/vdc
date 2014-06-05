<?php get_header() ?>

<?php 
global $post;
$id = $post->ID;
$cat = get_the_category(); $cat = $cat[0];
$myposts = get_posts('numberposts=5&offset=0&exclude='.$id.'&category='.$cat->cat_ID); ?>

<div class="content-single-posts">
	<div class="top-single-posts">
		<ul class="post-related">
			<?php foreach($myposts as $post) : ?>
			<li>
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('img-300x210'); ?></a>
				<div class="title-top-single">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>

	<div class="sp">
		<div class="inner-single-post">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="single-posts">

				<div class="title-single-posts">
					<?php the_title(); ?>
				</div>
				
				<div class="entry-single">
					<?php the_content(); ?>
				</div>

			</div>

			<?php endwhile; ?>

			<?php else : ?>

				<h2>pagina no encontrada</h2>

			<?php endif; ?>
		</div>

		<div class="sidebar-sp">

			<div class="note-related">
			<h2>NOTAS RELACIONADAS </h2>
					
				
				<?php 

					$post_esp_id = get_the_ID();

					$tags_id = array();
					$tags = get_the_tags();
					
					foreach($tags as $tag):
						array_push($tags_id, $tag->term_id);
					endforeach;

				?>
				
				<?php $args = array('tag__in' => $tags_id, 'post__not_in' => array($post_esp_id), 'posts_per_page' => 6, 'caller_get_posts'=>1 ); ?>
				<?php $the_query = new WP_Query($args); ?>
				<?php $c = 0 ?>
				<?php if ($the_query->have_posts()): ?>
					<ul class="related-posts">
					<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
						<?php 
							if ($c==0): 
								$m = '20px'; 
								$c = 1; 
							else: 
								$m = '0'; 
								$c = 0; 
							endif; 
						?>
						<li style="margin-right:<?php print $m ?>;">
							<a href="<?php the_permalink() ?>"><?php if (has_post_thumbnail()) the_post_thumbnail('img-218x200'); ?></a>
							<div class="title-rsp">
								<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>

			</div>
		</div>
		
	</div>
</div>
<?php get_footer() ?>