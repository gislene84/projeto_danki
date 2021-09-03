<?php
    //Template Name: Sobre
?>
    <?php
        get_header();
    ?>

    <section class="sobre-equipe">
        <div class="center">
        <div class="w50 equipe-sobre-text">
            <h2>Uma equipe estratégica para um trabalho incrível</h2>
            <p>Com foco permanente na geração de resultados para empresas, atuamos na consultoria estratégica e na criação e implementação de soluções de comunicação criativas, consistentes e adequadas ás necessidades e características de cada campanhia. Para isso, trabalhamos sempre em parceria e colaboração com interfaces e executivos das organizações, mantendo completo envolvimento com os negócios de cada clientes.</p>
        </div><!--w50-equipe-sobre-text-->
        <div class="w50">
            <img src="<?php echo get_theme_root_uri(); ?>/danki/img/foto-equipe-01.png"/>
        </div><!--w50-->
        <!--clear: evitar que tenha conflitos no fluxo do site-->
        <div class="clear"></div><!--clear--> 
</div><!--center-->
    </section><!--sobre-equipe-->
    <section class="sobre-img">
        <div class="center">
            <div class="img-sobre">
                <img src="<?php echo get_theme_root_uri(); ?>/danki/img/foto-2.png"/>
            </div><!--img-sobre-->
            <div class="img-sobre">
                <img src="<?php echo get_theme_root_uri(); ?>/danki/img/foto-1.png"/>
            </div><!--img-sobre-->
            <div class="img-sobre">
                <img src="<?php echo get_theme_root_uri(); ?>/danki/img/foto-3.png"/>
            </div><!--img-sobre-->
            <div class="img-sobre">
                <img src="<?php echo get_theme_root_uri(); ?>/danki/img/foto-4.png"/>
            </div><!--img-sobre-->
        </div><!--center-->
    </section><!--sobre-img-->
    <?php 
		get_footer();
	?>