<?php
get_header(); ?>

<div id="content">

	<section id="contato-pag">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small">Contato</h1>
					<h5><strong>Entre em contato com o Vintage Poker Club.</strong></h5>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-5 info-left text-left">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?>
				</div>
				<div class="col-md-6 col-md-offset-1 text-left">
					<div class="info-right">
						<strong>Endereço</strong>
						<br>Estrada do Capuava, 4.421 - Sala 202
						<br>Cotia - São Paulo
						<br><br><strong>Telefone</strong>
						<br>73 3162-7600
						<br><br><strong>Email</strong>
						<br>contato@pokervintage.com.br
					</div>
				</div>
			</div>
		</div>
	</section> 

	<?php get_template_part( 'template-parts/redes-bot'); ?>
</div>

<?php get_footer(); ?>
