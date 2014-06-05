<?php get_header() ?>

<div class="content-category">

	<div class="post-item-news">

		<div class="post-dest">
			<?php $args = array('category_name' => 'Destacado Noticias', 'posts_per_page' => '1'); ?>
				<?php $the_query = new WP_Query($args) ?>
				<?php if ($the_query->have_posts()): ?>
					<ul class="posts-dnews">
						<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
							<li>
								<div class="image-news">
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('img-1524x800'); ?></a>
								</div>
								<div class="inner-news">
									<div class="title-news">
										<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
										<?php the_excerpt(); ?>

										<div class="readmore">
											<a href="<?php the_permalink() ?>">Leer más</a>
										</div>

									</div>
								</div>

							</li>
						<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					</ul>
					<?php endif; ?>
		</div>

		<div class="morenews">MAS NOTICIAS</div>

		<div class="section-post-news">
			<div class="post-news">
				
				<?php while (have_posts()): the_post(); ?>

				<div class="content-post-news">
				
					<div class="thumb-news">
						<?php the_post_thumbnail('img-280x210'); ?> 
					</div>
					
					<div class="inner-td">	
						<div class="item-title-news">
							<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						</div>

						<div class="time-post-news"><?php the_time('d/M Y') ?></div>
					</div>
				
				</div>

				<?php endwhile; ?>
				<nav class="paging">
					<?php vdc_post_paging() ?>
				</nav>
			</div>
		</div>

		<div class="tweet-vdl">
			<a class="twitter-timeline" href="https://twitter.com/VILLADELCINE" data-widget-id="474213594079313920">Tweets por @VILLADELCINE</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>

	</div>
</div>

<?php get_footer() ?>