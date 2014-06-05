<?php  get_header() ?>

<div class="inner-content">

	<div class="slider">
		<?php $s = new WP_Query(array('post_type' => 'produccion')) ?>
		<?php if ($s->have_posts()): while ($s->have_posts()): $s->the_post() ?>
		<?php $bg = types_render_field("background", array("output"=>"raw")) ?>
		<?php $pl = types_render_field("poster-landscape", array("output"=>"raw")) ?>
		<div class="bg-movie"><img src="<?php print $bg ?>" alt="<?php the_title() ?>"></div>
		<div class="inner-slider">
			<div class="top">
				<div class="poster-landscape">
					<img src="<?php print $pl ?>" alt="<?php the_title() ?>">
					<div class="left-arrow"><a id="larrow" href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/larrow.png" alt="left"></a></div>
					<div class="right-arrow"><a id="rarrow" href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/rarrow.png" alt="right"></a></div>
					<div class="other-bottom"></div>
				</div>
			</div>
			<div class="bottom">
				<ul>
					<li><a href=""><img src="" alt=""></a></li>
					<li><a href=""><img src="" alt=""></a></li>
					<li><a href=""><img src="" alt=""></a></li>
					<li><a href=""><img src="" alt=""></a></li>
				</ul>
			</div>
		</div>
		<?php endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>

	<div class="news">
		<div class="inner-news">
			<h1 class="white">
				<span>Noticias</span>
			</h1>
			<div class="last-news">
				<div class="news-items">
					<?php $n = new WP_Query(array('posts_per_page' => 3)) ?>
					<ul>
					<?php if ($n->have_posts()): while ($n->have_posts()): $n->the_post() ?>
						<li>
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium') ?></a>
							<div class="post-meta">
								<div class="post-date-cat">
									<span class="date"><?php the_time('d/M Y') ?></span>
									<span class="cat"><?php the_category(' ') ?></span>
								</div>
								<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
							</div>
						</li>
					<?php endwhile; endif; ?>
					<?php wp_reset_postdata(); ?>
					</ul>
				</div>
				<div class="more-news">
					<span class="more"><a href="#">Ver más Noticias</a></span>
				</div>
			</div>
			<div class="twitter">
				<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/VILLADELCINE" data-widget-id="474275383236259840">Tweets por @VILLADELCINE</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
	</div>

	<div class="movies">
		<div class="inner-movies">
			<h1 class="black">
				<span>Peliculas</span>
			</h1>
			<div class="last-movies">
				<div class="movies-items">
					<?php $p = new WP_Query(array('post_type' => 'produccion')) ?>
					<ul>
					<?php if ($p->have_posts()): while ($p->have_posts()): $p->the_post() ?>
						<?php $img = types_render_field("poster-portrait", array("output"=>"raw")) ?>
						<li><a href="<?php the_permalink() ?>"><img src="<?php print $img ?>" alt="<?php print $img ?>"></a></li>
					<?php endwhile; endif; ?>
					<?php wp_reset_postdata(); ?>
					</ul>
				</div>
				<div class="more-movies">
					<span class="more"><a href="#">Ver más Películas</a></span>
				</div>
			</div>
		</div>		
	</div>
	
</div>

<?php  get_footer() ?>
