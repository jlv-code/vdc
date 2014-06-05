
		</div> <!-- ## Ends content -->


		<div id="footer-icons">
			<div class="foot-icons">
				<div class="icons">
					<figure class="medio"><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/ahorrarenergia.png" alt="tves"></a></figure>
					<figure class="medio"><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/festivallatcar.png" alt="telesur"></a></figure>
					<figure class="medio"><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/ahorrarenergia.png" alt="rnv"></a></figure>
					<figure class="medio"><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/festivallatcar.png" alt="anv"></a></figure>
					<figure class="medio"><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/ahorrarenergia.png" alt="tves"></a></figure>
				</div>
			</div>
			
		</div>

		<div id="footer-sibci">
			<div class="inner-footer">
				<div class="foot-one">
					<div class="foot-title">
						<h4>SISTEMA NACIONAL DE MEDIOS PUBLICOS</h4>
					</div>	
					<div class="foot-one-one">
						<figure class="medio"><a href="http://www.tves.gob.ve/"><img src="<?php print get_template_directory_uri() ?>/static/images/logos-medios/tves.png" alt="tves"></a></figure>
						<figure class="medio"><a href="http://www.telesurtv.net/"><img src="<?php print get_template_directory_uri() ?>/static/images/logos-medios/telesur.png" alt="telesur"></a></figure>
						<figure class="medio"><a href="http://www.rnv.gob.ve/"><img src="<?php print get_template_directory_uri() ?>/static/images/logos-medios/rnv.png" alt="rnv"></a></figure>
						<figure class="medio"><a href="http://www.avn.info.ve/"><img src="<?php print get_template_directory_uri() ?>/static/images/logos-medios/avn.png" alt="anv"></a></figure>
						<figure class="medio"><a href="http://www.vtv.gob.ve/"><img src="<?php print get_template_directory_uri() ?>/static/images/logos-medios/vtv.png" alt="vtv"></a></figure>
						<figure class="medio"><a href="http://www.radiomundial.com.ve/"><img src="<?php print get_template_directory_uri() ?>/static/images/logos-medios/yvke.png" alt="yvke"></a></figure>
						<figure class="medio"><a href="http://www.ciudadccs.info/"><img src="<?php print get_template_directory_uri() ?>/static/images/logos-medios/cccs.png" alt="cccs"></a></figure>
					</div>	
						
					<div class="foot-one-two">
						<figure class="medio"><a href="#"><img src="<?php print get_template_directory_uri() ?>/static/images/logos-medios/avilatv.png" alt="avilatv"></a></figure>
						<figure class="medio"><a href="http://www.laradiodelsur.com/"><img src="<?php print get_template_directory_uri() ?>/static/images/logos-medios/rdsur.png" alt="rdsur"></a></figure>
						<figure class="medio"><a href="http://www.correodelorinoco.gob.ve/"><img src="<?php print get_template_directory_uri() ?>/static/images/logos-medios/cdo.png" alt="cdo"></a></figure>
						<figure class="medio"><a href="http://www.albatv.org/"><img src="<?php print get_template_directory_uri() ?>/static/images/logos-medios/albatv.png" alt="albatv"></a></figure>
						<figure class="medio"><a href="http://www.antv.gob.ve/"><img src="<?php print get_template_directory_uri() ?>/static/images/logos-medios/antv.png" alt="antv"></a></figure>
						<figure class="medio"><a href="http://www.vive.gob.ve/"><img src="<?php print get_template_directory_uri() ?>/static/images/logos-medios/vive.png" alt="vive"></a></figure>
						<figure class="medio"><a href="http://www.colombeia.edu.ve/"><img src="<?php print get_template_directory_uri() ?>/static/images/logos-medios/colombeia.png" alt="colombeia"></a></figure>
					</div>
				</div>
			</div>				
		</div>



		<footer id="footer-two">
			<div class="foot-two">
					<div class="foot-logo">
						<a href="#menu-top"><img src="<?php print get_template_directory_uri() ?>/static/images/villadelcine-logo-footer.png" alt="Villa del Cine"></a>
					</div>
					<div class="main-foot">

						<div class="main-secondary">
							<div id="list-secondary">
							<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
							</div>
						</div>

						<div class="main-primary">
							<div id="list-primary">
							<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
							</div>
						</div>	

					</div>	

					<div class="foot-copyright">
						<div class="copyright">
							&copy;2014
							<br>Fundación Villa del Cine
							<h6>Adscrito al Ministerio del Poder Popular para la Comunicación y la información</h6> <br>
							<h6>Todos los derechos reservados.</h6>
						</div>						
					</div>
			</div>
		</footer>

	</div> <!-- ## Ends wrap -->
	<?php wp_footer(); ?>
</body>
</html>
