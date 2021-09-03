 <?php
    // Template Name: Home
 ?>
 <?php
    get_header();
 ?>
 <!--clear: evitar que tenha conflitos no fluxo do site-->
            <div class="clear"></div><!--clear-->
                <br/>
                <br/>
                <div class="w50 time-descricao">
                    <h2>Melhore a comunicação com o seu cliente e time.</h2>
                    <p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
                    <a target="_blank" href="https://dankicode.com">Ver demostração</a>
                </div><!--w50 time-descricao-->
                <div class="w50 time-imagem">
                    <img src="<?php echo get_theme_root_uri(); ?>/danki/img/equipe.png"/>
                </div><!--w50 time-imagem-->
                <!--clear: evitar que tenha conflitos no fluxo do site-->
                <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section><!--topo-->
    <div class="circle"><i class="fas fa-angle-down"></i></div><!--circle-->
    <section class="conteudo-da-pagina">
   
    </section><!--conteudo-da-pagina-->
    <section class="clientes-slider">
        <div class="center">
            <div style="max-width: 700px; margin: 0 auto; overflow: hidden; " class="slider-container">
            <img src="<?php echo get_theme_root_uri(); ?>/danki/img/amazon.png"/>
            <img src="<?php echo get_theme_root_uri(); ?>/danki/img/costco.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/danki/img/dominos.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/danki/img/uber.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/danki/img/walmart.png"/>
            </div><!--slider-container-->
        </div><!--center-->

    </section><!--clientes-slider-->
    <section class="diferenciais">
        <div class="center">
            <h2>Contribuímos de ponta a ponta</h2>
            <div class="icons-diferenciais">
                <div class="box-single-diferenciais">
                    <img src="<?php echo get_theme_root_uri(); ?>/danki/img/icon01.png">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda a sua comunicação esteja alinhado com seu propósito, cada palavra conta.</p>
                </div><!--box-single-diferenciais-->
                <div class="box-single-diferenciais">
                    <img src="<?php echo get_theme_root_uri(); ?>/danki/img/icon2.png">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda a sua comunicação esteja alinhado com seu propósito, cada palavra conta.</p>
                </div><!--box-single-diferenciais-->
                <div class="box-single-diferenciais">
                    <img src="<?php echo get_theme_root_uri(); ?>/danki/img/icon3.png">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda a sua comunicação esteja alinhado com seu propósito, cada palavra conta.</p>
                </div><!--box-single-diferenciais-->
            </div><!--icons-diferenciais-->
        </div><!--center-->
    </section><!--diferenciais-->
    <section class="sobre-time">
        <div class="center">
            <div class="w50 time-descricao-2">
                <h2>Um time experiente, <br/>comunicador e coeso.</h2>
                <p>A Product Runt acredita que marcas fortes são contruídas a partir de transformações importantes e positivas na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira flâmula.
                <br/> 
                <br/>
                Comunicar bem, de forma coerente e clara não é algo fácil e estamos aqui para ajudar você e o seu time. Você escolhe, remoto ou presencial, para seu cliente ou seu público interno, você determina como vamos te ajudar.</p>
            </div><!--w50 time-descricao-2-->
            <div class="w50 img-time">
                <img src="<?php echo get_theme_root_uri(); ?>/danki/img/ilustracao-04.png"/>
            </div><!--w50 img-time-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--sobre-time-->
    <section class="depoimentos">
        <div class="center">
            <h2>Depoimentos</h2>
            <div class="depoimentos-box">
                <div class="depoimento-single">
                    <p>" Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum non vero necessitatibus quis voluptatem libero dicta, illo veniam minus quaerat. "</p>
                    <p>Gislene Oliveira</p>
                    <img src="<?php echo get_theme_root_uri(); ?>/danki/img/oval-2.png"/>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                    <p>" Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum non vero necessitatibus quis voluptatem libero dicta, illo veniam minus quaerat. "</p>
                    <p>Gislene Oliveira</p>
                    <img src="<?php echo get_theme_root_uri(); ?>/danki/img/oval-2.png"/>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                    <p>" Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum non vero necessitatibus quis voluptatem libero dicta, illo veniam minus quaerat. "</p>
                    <p>Gislene Oliveira</p>
                    <img src="<?php echo get_theme_root_uri(); ?>/danki/img/oval-2.png"/>
                </div><!--depoimento-single-->
            </div><!--depoimentos-box-->
        </div><!--center-->
    </section><!--depoimentos-->
<?php
    get_footer();
?>