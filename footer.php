<footer><!--rodapé-->
<?php
    $title = get_the_title();
    if($title != 'Contato' && is_404() == false){
?>
    <section class="metodologia">
        <div class="center">
            <h2>Conheça nossa metodologia</h2>
            <p>O que acha de fazermos o que mais gostamos de fazer? Conversar! <br/> Entre em contato por e-mail ou telefone.</p>
            <a href="/contato">Entrar com o contato</a>
        </div><!--center-->
    </section><!--metodologia-->
<?php
    }
?>
         <div class="center">
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div><!--col-footer-->
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div><!--col-footer-->
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div><!--col-footer-->
            <div class="col-footer-img">
              <img src="<?php echo get_theme_root_uri(); ?>/danki/img/logo-dummy.png"/>
            </div><!--col-footer-img-->
         </div><!--center-->  
    </footer>
    <?php
        wp_footer();
    ?>
    <script src="<?php echo get_theme_root_uri(); ?>/danki/js/jquery.js"></script>
    <script src="<?php echo get_theme_root_uri(); ?>/danki/js/slick.min.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
    <script src="<?php echo get_theme_root_uri(); ?>/danki/js/map.js"></script>
    <script type="text/javascript">

    $('section.clientes-slider .slider-container').slick({ 
        dots: true,
        arrows:false,
        infinite: false,
        speed:1000,
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover:false
        });
        $('section.depoimentos .depoimentos-box').slick({ 
        dots: true,
        arrows:false,
        infinite: true,
        speed:1000,
        slidesToShow: 1,
        centerMode: false
        });
</script>
<script>
    //Menu responsivo// 
    $('.menu-mobile i').click(function(){//ao clicar o menu vai aparecer //
        $('.menu-mobile').find('ul').slideToggle();
    })
</script>
</body>
</html>