<?php
	//Template Name: Contato
?>
<?php
	get_header();
?>
</div>
</section>

	<section class="contato">
		<div class="center">
			<div class="w50 contato-info">
				<h2>A mais importante,<br/>primeira conversa.</h2>
				<br />
				<?php
				while (have_rows('nome_do_tipo_de_contato')){
					the_row();
			?>
			<?php } ?>
		

			<div class="mapa-container">
				<div id="mapa"></div>
			</div><!--mapa-->
			</div>
		
			<div class="w50 contato-form">
				<?php
					the_content();
				?>
				<!--
				<form>
					<input placeholder="Nome" type="text" />
					<input placeholder="E-mail" type="text" />
					<input placeholder="Telefone" type="text" />
					<select>
						<option>Geral</option>
						<option>Suporte</option>
					</select>
					<textarea placeholder="Mensagem"></textarea>
					<input type="submit" value="Enviar!">
				</form>
			-->

			</div>
			<div class="clear"></div>
		</div>
	</section>
	<?php 
		get_footer();
	?>