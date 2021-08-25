<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Danki Code - Tema</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="topo">
        <div class="center">
            <header>
                <div class="logo">
                    <img src="img/logo.png"/>
                </div>
            </header>
            <ul class="menu-desktop">
                <li><a href="">HOME</a></li>
                <li><a href="">SOBRE</a></li>
                <li><a href="">CONTATO</a></li>
            </ul><!--menu-desktop-->
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
                    <img src="img/equipe.png"/>
                </div><!--w50 time-imagem-->
                <!--clear: evitar que tenha conflitos no fluxo do site-->
                <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section><!--topo-->
    <script type="text/javascript">
    $('.container-slider').slick({
        dots: true,
        arrows:false,
        infinite: true,
        centerMode: true,
        centerPadding:0,
        speed:1000,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover:false
        });
</script>
</body>
</html>