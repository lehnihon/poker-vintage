<?php
get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container-fluid">
			<div class="row">		
				<?php putRevSlider( "banner-index" ) ?>		
			</div>
		</div>
	</section>
	<section id="apresentacao">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small">Vintage Poker Club</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 anima-a">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-1.jpg"; ?>"/></a>
					<h3>Veja a galeria de fotos</h3>
					<p>Somos uma agência de marketing digital especializada em micro e pequenas empresas brasileiras a se destacaremno mercado digital.</p>
					<a href="<?php echo esc_url( home_url( '/' ) )."atelie-culinario"; ?>" class="btn-saiba-mais">Confira</a>
				</div>
				<div class="col-md-4 anima-b">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-2.jpg"; ?>"/></a>
					<h3>Fique de olho no ranking</h3>
					<p>Somos uma agência de marketing digital especializada em micro e pequenas empresas brasileiras a se destacaremno mercado digital.</p>
					<a href="<?php echo esc_url( home_url( '/' ) )."atelie-culinario"; ?>" class="btn-saiba-mais">Confira</a>
				</div>
				<div class="col-md-4 anima-c">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-3.jpg"; ?>"/></a>
					<h3>Confira a nossa agenda</h3>
					<p>Somos uma agência de marketing digital especializada em micro e pequenas empresas brasileiras a se destacaremno mercado digital.</p>
					<a href="<?php echo esc_url( home_url( '/' ) )."atelie-culinario"; ?>" class="btn-saiba-mais">Confira</a>
				</div>
			</div>
		</div>
	</section>
	<section id="detalhes">
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left anima-h">
					<h3 class="laranja">Vintage Poker Club</h3><br>
					<p>Somos uma agência de marketing digital especializada em micro e pequenas empresas brasileiras a se destacarem no mercado digital. <br>	
						Somos uma agência de marketing digital especializada em micro e pequenas empresas brasileiras a se destacarem no mercado digital.

					</p>
					<ul>
						<li>Agência de marketing digital</li>
						<li>Agência de marketing digital</li>
						<li>Agência de marketing digital</li>
						<li>Agência de marketing digital</li>
					</ul><br>
					<a href="<?php echo esc_url( home_url( '/' ) )."fotos"; ?>" class="btn-confira">Confira</a>
				</div>
				<div class="col-md-5 text-left anima-i">
					<div class="fotos-sobre row">
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-1.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-1.jpg"; ?>"/>
						</div>
					</div>
					<div class="fotos-sobre row">	
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-1.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-1.jpg"; ?>"/>
						</div>
					</div>
			
				</div>
			</div>
		</div>		
	</section>

	<section id="maps">
		<div class="container maps-title">
			<div class="row">
				<div class="col-md-12">
					<h3 class="verde">Localização</h3>
					<p>
						Estrada do Capuava, 4.421 - Sala 202 - Cotia - São Paulo <br>
						<strong>Telefone: </strong>11 1234-5678 <strong>Email: </strong>contato@vintagepoker.com.br
					</p>
				</div>
			</div>			
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 videoWrapper">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467814.9804093564!2d-47.041120950597595!3d-23.64717016917304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5855caa088ef%3A0xee3fef7424d63dfc!2sR.+S%C3%A3o+Bento%2C+545+-+Centro%2C+S%C3%A3o+Paulo+-+SP%2C+01011-100!5e0!3m2!1spt-BR!2sbr!4v1449080600451" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>			
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
