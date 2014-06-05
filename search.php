<?php get_header() ?>


<div id="content-search">
	
	<div class="all-content-search">


			<div class="the-title-search">

				<div class="the-title">
					RESULTADOS DE LA BUSQUEDA
				</div>				

			</div>


	<?php if (have_posts()): while (have_posts()): the_post(); ?>

			<div class="item-content-search">

						  <div class="post-title-search">
										<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
							</div>


							<div class="url-post-search">
										<a href="<?php the_permalink() ?>"><?php echo get_site_url() ?></a>
							</div>


							<div class="excerpt-search">
										<?php the_excerpt(); ?>                                                     
							</div>

			</div>

	<?php endwhile; ?>
	<?php  villa_post_paging() ?>

	<?php else: ?>
				 <h2 class="search-title"> No se encontraron resultados </h2>
	<?php endif; ?>
		 
	</div>
</div>


<?php get_footer() ?>