<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RateRes - Home</title>
    <link rel="stylesheet" href="css/stylehome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="js/homescript3.js"></script>
    <script src="js/homescript5.js"></script>
    <script src="js/homescript6.js"></script>
    <script src="js/homescript7.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</head>
<body>
   <header>
      <nav class="navbar">
         <div class="coiso">
            <span class="barra"></span>
            <span class="barra"></span>
            <span class="barra"></span>
         </div>
         <a href="#" class="logo">RateRes</a>
         <ul class="menu">
            <li class="nav-items"><a href="home.html" class="links">Home</a></li>
            <li class="nav-items"><a href="#" class="links">Sobre nós</a></li>
            <li class="nav-items"><a href="#" class="links">Contatos</a></li>
            <li class="nav-items"><a href="#" class="links">Ajuda</a></li>
            <li class="nav-items">
                <button id="narration-button" aria-label="Ativar narração">
                    <i id="narration-icon" class="fas fa-volume-mute"></i>
                    <span id="narration-status">Mutado</span>
                  </button>
            </li>

         </ul>
         <button type="button" class="login-btn"><a href="#">Login</a></button>
      </nav>
   </header>

   <div class="container">
      <h1>BUSQUE O RESTAURANTE PARA VOCÊ</h1>
   </div>

   <div class="pesquisar">
      <form action="">
        <div class="box">
         <form class="search-form">
          <i class="fa fa-search" aria-hidden="true"></i>
          <input id='inputUser' class="pesquisa" onchange='searchBar()' type='text' placeholder='PESQUISAR'>
             
            <button type="submit" class="buscar">
               <h3>Buscar</h3> 
            </button>
         </form>
      </form>
    </div>
      <div id="search-results"></div>
   </div>
<br><br><br>
<br><br><br>
<br><br><br>
    <Div class="chique">
        <button class="conta" ><a href="Perfil novo/index1.html" class="textinho">Conta</a></button>  
        
        <button class="voto"><a href="Cupons/index.html" class="textinho">Cupons</a></button>
    
        <button class="pontos" ><a href="pontos e comentarios1/pontos.html" class="textinho">Pontos</a> </button>
    
        <button class="participe"><a href="#" class="textinho">Participe do projeto</a></button>
    </Div>
    
    <div class="banner">
    
        
<br><br><br>
<br><br><br>

    

   <main>
    <h1 class="texto">Principais Pesquisas</h1>
    <div class="quadrado">
        <button class="bonito">
            <img src="img/caseiro.png" alt="Comida">
            <h2>Comida Caseira </h2>
            
        </button>
       
        <button class="bonito">
            <img src="img/sushi.png" alt="Comida1">

           <h2> Comida Japonesa</h2>
            
            
        </button>
    </div>
    <br>
    <h1 class="descubra">DESTAQUES</h1>
    <br><br>
    <div class="carousel-container">
        <div class="carousel">
            <div>
                <img src="img/imagem1.jpg" alt="Imagem 1" data-toggle="modal" data-target="#myModal1">
            </div>
            <div>
                <img src="img/imagem2.jpg" alt="Imagem 2" data-toggle="modal" data-target="#myModal2">
            </div>
            <div>
                <img src="img/imagem3.jpg" alt="Imagem 3" data-toggle="modal" data-target="#myModal3">
            </div>
            <div>
                <img src="img/imagem4.jpg" alt="Imagem 4" data-toggle="modal" data-target="#myModal4">
            </div>
            <div>
                <img src="img/imagem5.jpg" alt="Imagem 5" data-toggle="modal" data-target="#myModal5">
            </div>
            <div>
                <img src="img/imagem6.jpg" alt="Imagem 6" data-toggle="modal" data-target="#myModal6">
            </div>
            <!-- Adicione mais itens do carrossel aqui -->
        </div>
        <button class="slick-prev" aria-label="Anterior">&#10094;</button>
        <button class="slick-next" aria-label="Próximo">&#10095;</button>
    </div>

    <!-- Pop-up 1 -->
    <div class="modal" id="myModal1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Título do Pop-up 1</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <img src="img/imagem1.jpg" alt="Imagem 1">
                </div>
            </div>
        </div>
    </div>

    <!-- Pop-up 2 -->
    <div class="modal" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Restaurante </h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <img src="img/imagem2.jpg" alt="Imagem 2">
                </div>
                <h3>Comida famosa no restaurante</h3>
            </div>
        </div>
    </div>

    <!-- Pop-up 3 -->
    <div class="modal" id="myModal3">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Título do Pop-up 3</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <img src="img/imagem3.jpg" alt="Imagem 3">
                </div>
            </div>
        </div>
    </div>

    <!-- Pop-up 4 -->
    <div class="modal" id="myModal4">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Título do Pop-up 4</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <img src="img/imagem4.jpg" alt="Imagem 4">
                </div>
            </div>
        </div>
    </div>

    <!-- Pop-up 5 -->
    <div class="modal" id="myModal5">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Título do Pop-up 5</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <img src="img/imagem5.jpg" alt="Imagem 5">
                </div>
            </div>
        </div>
    </div>

    <!-- Pop-up 6 -->
    <div class="modal" id="myModal6">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Título do Pop-up 6</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <img src="img/imagem6.jpg" alt="Imagem 6">
                </div>
            </div>
        </div>
    </div>
  <br>
  <br>
    <Br>
        <div class="conteiner">
        <div class="coisinho">
            <img src="img/vetor.png" alt="vetor" class="imagem">
        </div>
        <div class="coisao">
        <h1 class="titulo"> Quer cadastrar seu restaurante?</h1>
        <p> Clique no botão abaixo para saber os requisitos do cadastro!</p>
        <Br>
        <button>Saiba mais</button>
    </div>
    </div>
    <br><br><br>
    <br><br><br>
    <div class="votados">
        <h1>Mais votados</h1>
        <br>

        <div class="containerd">
            <div class="primeiro">
                <h1>Nome</h1>
                <div class="estrelas1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
    
            <div class="segundo">
                <h3>Nome</h3>
                <div class="estrelas-amarelas">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star estrela-preta"></i>
                </div>
            </div>

            <div class="terceiro">
                <h3>Nome</h3>
                <div class="estrelas-amarelas">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star estrela-preta"></i>
                </div>
            </div>
        </div>
    </div>
    </main>

<br>
<br>  <br>
<br>  <br>
<br>  <br>
<br>
   <footer>
    <div id="footer_content">
        <div id="footer_contacts">
            <h1>RateRes</h1>
            <p>Achar restaurantes nunca foi tão facil!</p>

            <div id="footer_midia">
                <a href="#" class="footer_link" id="facebook"><i class="fa-brands fa-facebook"></i></a>

                <a href="#" class="footer_link" id="instagram"><i class="fa-brands fa-instagram"></i></a>

                <a href="#" class="footer_link" id="linkedin"><i class="fa-brands fa-linkedin"></i></a>

                <a href="#" class="footer_link" id="Twitter"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
        <ul class="footer_list">
            <li>
                <h3>Empresa</h3>
            </li>
            <li><a href="#" class="footer_link">Sobre nós</a></li>

            <li><a href="#" class="footer_link">Politica de privacidade</a></li>

            <li><a href="#" class="footer_link">Contatos</a></li>

            <li><a href="#" class="footer_link">Afiliados</a></li>
        </ul>
        <ul class="footer_list">
            <li>
                <h3>Descubra</h3>
            </li>
            <li><a href="#" class="footer_link">Restaurantes</a></li>

            <li><a href="#" class="footer_link">Cadastre seu Restaurante</a></li>

            <li><a href="#" class="footer_link">Login</a></li>

            <li><a href="#" class="footer_link">Cadastro</a></li>
        </ul>
        <div id="footer_subscribe">
            <h3>Se inscreva</h3>
            <p>Saiba sobre as novidades</p>
            <div id="input_group">
                <input type="email" id="email">
                <button>
                    <i class="fa-regular fa-envelope"></i>
                </button>
            </div>
        </div>
    </div>
    <div id="footer_copyright">
        &#169
        2023 all rights reserved
    </div>
</div>
</div>

   </footer>
   <script src="js/homescript4.js"></script>
   <script src="js/homescript.js"></script>
   <script src="js/homescript2.js"></script>    
  
   <script>
    initSlider({
        autoPlay: true,
        startAtIndex: 0,
        timeInterval: 2000
    })
    
</script>

<script>
    $(document).ready(function(){
        $('.carousel').slick({
            centerMode: true,
            centerPadding: '0',
            slidesToShow: 4,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: $('.slick-prev'),
            nextArrow: $('.slick-next'),
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>
</div> 
     <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
</body>
</html>