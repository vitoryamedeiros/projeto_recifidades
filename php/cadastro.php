<?php
$con = mysqli_connect('localhost', 'root', '', 'recificidades');
 
if (!$con) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email =$_POST['email'];
    $senha = $_POST['senha'];
    $endereco = $_POST['endereco'];
    $cidade =$_POST['cidade'];

   
    // Código SQL para inserir os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, cpf, email, senha, endereço, cidade)
            VALUES ('$nome', '$cpf', '$email', '$senha', '$endereco', '$cidade')";

    // Executa a consulta SQL
    if (mysqli_query($con, $sql)) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Erro ao inserir os dados: " . mysqli_error($con);
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recifidades</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- bootstrap import -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS IMPORT'S -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/buttons.css">

    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/history.css">
    <link rel="stylesheet" href="../css/apresentation.css">
    
    <link rel="stylesheet" href="../css/population.css">

    <link rel="stylesheet" href="../css/tourism.css">

    <link rel="stylesheet" href="../css/culture.css">
    <link rel="stylesheet" href="../css/banner-finalizacao.css">

    <link rel="stylesheet" href="../css/reciclube.css">
    <link rel="stylesheet" href="../css/reciclube-beneficios.css">
    <link rel="stylesheet" href="../css/form.css">

    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/carrossel.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew  +OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9 reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
    <main>
        <!-- HEADER SECTION -->
        <header class="header-banner" id="inicio">   

            <!-- BARRA DE NAVEGACAO -->
            <nav class="nav-bar">
                <ul class="nav-links">
                    
                    <li>
                        <a href="../index.html">Inicio</a>
                    </li> 
                    <img class="brilhinho" src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                    
                    <li>
                        <a href="#history">Historia</a>
                    </li>
                    <img class="brilhinho" src="../assets/icons/brilhinho.png" alt="Icone de Brilho">
                    
                    <li>
                        <a href="#tourism">Turismo</a> 
                    </li>
                    <img class="brilhinho" src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                    
                    <li>
                        <a href="#culture">Cultura</a>
                    </li>
                    <img class="brilhinho" src="../assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                    
                    <li><a href="#reciclube">Reciclube</a></li>
                </ul>
            </nav>

            <!-- BANNER INICIAL DA PAG -->
            <section class="section-banner">

                <div class="text-box">
                    <div class="title">
                        <h1>
                            <span class="conheca">CONHEÇA</span>
                            <br> 
                            <span>A MAIOR CIDADE EM LINHA RETA</span> 
                            <hr>
                            <br> 
                            <span class="mundo">DO MUNDO</span>
                        </h1> 
                    </div>
                    <p>Fonte Oficial: Meu prefeito</p>
                </div>

                <div class="background">
                    <div class="predios">
                        <img src="assets/img/header-banner/rua da aurora-grande.png" alt="prediosbackground" >
                    </div>

                    <div class="pista">
                        <img src="assets\img\header-banner\pista-grande.png" alt="pistafundo">
                    </div>
                </div>
            </section>
        </header>

        <!-- SECTION DE APRESENTACAO DO SITE -->
        <section class="section-apresentation">
            
            <div class="box-content">
                <h3>Iai boy! </h3>
                <p>
                    Somos um <strong>squad de desenvolvedores</strong>,  que assim como todo cidadão Recifense, tem muito orgulho de ter nascido na capital do nosso país Pernambuco!
                </p>
                <p> 
                    Se tu é um <strong>recifense orgulhoso</strong> ou um <strong>turista curioso</strong>  e queres saber um pouquinho mais sobre a melhor cultura do nordeste e do Brasil, te chega que foi pra isso que criamos esse site aqui. <br> <br>
                </p>
                <p>
                    <strong class="call-action">Perde tempo não, tabacudo!</strong>     
                </p>
            </div>

            <a href="#" class="scroll" ></a>

            <div class="figure-apresentation">

                <div class="boyzinhos">
                    <img class="boyzinho um" src="assets/img/stickers/passinho-verde.png" alt="" width="300px">
                    <img class="boyzinho dois" src="assets/img/stickers/passinho-rosa.png" alt="" width="300px">
                </div>
                <img class="pista-unica" src="assets/img/header-banner/pista-unica-grande.png" alt="">
            </div>
        </section>

        <!-- ARROW TOP BUTTON -->
        <a href="#inicio" class="arrow-up back-to-top" onclick="scrollToTop()">
            <span class="left-arm"></span>
            <span class="right-arm"></span>
            <span class="arrow-slide"></span>
        </a>

        <!-- SECTION HISTORIA -->
        <section id="history" class="section-history">
            <header>
                <div class="head-sections head-history">
                    <img class="icon-brilho brilhinho" src="assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                    <h2>HISTORIA</h2> 
                    <img class="icon-brilho brilhinho" src="assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                </div>

                <!-- banner da secao -->
                <div class="banner-history">
                    <h3>Bora começar do começo?</h3> 
                    <span>Desde Duarte Coelho até João Campos</span> 
                    <img src="assets/img/stickers/duarte-coelho.png" class="left" alt="duarte coelho"> 
                
                    <img src="assets/img/stickers/joao-campos.png" class="right" alt="joao campos"> 
                </div>
            </header>  
            
            <section class="timeline">

                <div class="timeline">
                    <img src="assets/img/stickers/escultura-brennand.png" alt="Escultura de Brennand" >
                    <div class="event" style="top: 4%; left: 3%;">
                        <p class="text-content">Duarte Coelho foi um navegador e militar português, que iniciou a colonização em 1535 e fez de Pernambuco a capitania mais rica do país, e tambem fundou de Olinda.</p>
                        
                        <div class="date" style="top: 1%; left: 5%;">
                            <div class="dates">
                                <h2>15</h2>
                                <h2>35</h2>
                            </div>
                        </div>     
                    </div>
                    
                    <div class="event" style="top: 15%; left: 58%;">
                        <div class="date" style="top: 5%; left: -1%;">
                            <div class="dates">
                                <h2>18</h2>
                                <h2>17</h2>
                            </div>
                        </div>                       
                        <p class="data-description">Em 6 de março eclodiu no Recife a chamada Revolução Pernambucana. Dentre as suas causas, destacam-se a influência das ideias iluministas propagadas pelas sociedades maçônicas</p>
                    </div>

                    <div class="event" style="top: 29%; left: 8%;">
                        <p class="timeline__blurb">Nessa epoca, a cidade pretendia tornar-se moderna, tal como Paris, através da reforma do porto e construção de largas avenidas, sem preocupação com a preservação dos edifícios históricos.</p>

                        <div class="date" style="top: 29%; left: 5%;">
                            <div class="dates">
                                <h2>19</h2>
                                <h2>10</h2>
                            </div>
                        </div>                             
                    </div>

                    <div class="event" style="top: 44%; left: 56%;">
                        <div class="date">
                            <div class="dates" style="top: 35%; left: 60%;">
                                <h2>19</h2>
                                <h2>91</h2>
                            </div>
                        </div>                              
                        <p>A década de 90 foi de grande importância para a cultura pernambucana. Foi marcada pelo furacão do movimento Mangue Beat, liderado por Chico Science e a Nação Zumbi.</p>
                    </div>

                    <div class="event" style="top: 60%; left: 5%;">
                        <p class="timeline__blurb">Criado no ano 2000, o Porto Digital surgiu com o objetivo de ser uma política pública para o desenvolvimento do setor de tecnologia da informação em Pernambuco.</p>
                        <div class="date" style="top: 55%; left: 4%;">
                            <div class="dates" >
                                <h2>20</h2>
                                <h2>00</h2>
                            </div>
                        </div>                        
                    </div>

                    <div class="event" style="top: 68%; left: 57%;">
                        <div class="date">
                            <div class="dates" style="top: 60%; left: 62%;">
                                <h2>20</h2>
                                <h2>20</h2>
                            </div>
                        </div>                          
                        <p>Meu prefeito! Amado por todos e futuro presidente da republica, Joao Campos assumiu a prefeitura em 2021 e tá lá ate hoje. Ele é novo, mas não é besta não, visse? Pense num bixo desenrrolado!</p>
                    </div>
                </div>
            </section>
        </section>

        <!-- SECTION POPULATION-->
        <section id="population">
            <header class="head-sections">
                <div class="head-sections head-population">
                    <img class="icon-brilho brilhinho" src="assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                    <h2>POPULACAO</h2> 
                    <img class="icon-brilho brilhinho" src="assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                </div>
            </header>

            <!-- table container -->
            <div class="container">
                <table>
                    <thead>
                        <tr>
                            <th>Ranking</th>
                            <th>Bairro</th>
                            <th>Habitantes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">#1</th>
                            <td>Boa Viagem</td>
                            <td>122.922</td>
                        </tr>
                        <tr>
                            <th scope="row">#2</th>
                            <td>Várzea</td>
                            <td>70.453</td>
                        </tr>
                        <tr>
                            <th scope="row">#3</th>
                            <td>Cohab</td>
                            <td>67.283</td>
                        </tr>
                        <tr>
                            <th scope="row">#4</th>
                            <td>Iputinga</td>
                            <td>42.200</td>
                        </tr>
                        <tr>
                            <th scope="row">#5</th>
                            <td>Ibura</td>
                            <td>50.617</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>
        
        <!-- SECTION TURISMO -->
        <section id="tourism" class="section-tourism">
            <header class="header-tourism">
                <div class="head-sections head-tourism">
                    <img class="icon-brilho brilhinho" src="assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                    <h2> TURISMO POR AQUI </h2> 
                    <img class="icon-brilho brilhinho" src="assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                </div>
                
                <span>Bora conhecer os lugares mais famosos de Hellcife!</span> 

                <img class="busao-brt front" src="assets/img/lugares/brt-frente-maior.png" alt="brtfrente"> 
                <img class="busao-brt back" src="assets\img\lugares\brt-costa-maior.png" alt="brtcosta"> 
            </header>
            <section>
                <div id="cCarousel">
                  <div class="arrow-caroseul" id="prev">❮</div>
                  <div class="arrow-caroseul" id="next">❯</div>
              
                  <div id="carousel-vp">
                    <div id="cCarousel-inner">
              
                      <article class="cCarousel-item">
                        <img src="assets/img/lugares/cais-doporto.png" alt="cais do porto">
                      </article>
              
                      <article class="cCarousel-item">
                        <img src="assets/img/lugares/ricardo-brennand.png" alt="instituto brenannd">
                      </article>
              
                      <article class="cCarousel-item">
                        <img src="assets/img/lugares/cinema-saoluiz.png" alt="cinema sao luiz">
                      </article>
              
                      <article class="cCarousel-item">
                        <img src="assets/img/lugares/paco-alfandega.png" alt="paco alfandega">
                      </article>
              
                      <article class="cCarousel-item">
                          <img src="assets/img/lugares/teatro-santaisabel.png" alt="teatro santa isabel">
                        </article>
                        
                        <article class="cCarousel-item">
                            <img src="assets/img/lugares/paco-dofrevo.png" alt="paco do frevo">
                        </article>
                      <article class="cCarousel-item">
                        <img src="assets/img/lugares/praia-bv.png" alt="praia bv">
                      </article>
                      <article class="cCarousel-item">
                        <img src="assets/img/lugares/parque-jaqueira.png" alt="parque-jaqueira">
                      </article>
                    </div>
                  </div>
                </div>
            </section>
           
                    
        </section>

        <!-- SECTION CULTURA -->  
        <section id="culture" class="section-culture">
            
            <!-- header da secao -->
            <header class="header-culture">

                <img class="stickers header-culture-figures " src="./assets/img/stickers/la-ursa.png" alt="Png La Ursa"> 

                <div class="head-sections head-culture">
                    <img class="icon-brilho brilhinho" src="./assets/icons/brilhinho.png" alt="Icone de Brilho"> 

                    <h2>NOSSA CULTURA</h2> 
                    
                    <img class="icon-brilho brilhinho" src="./assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                </div>

                <img class="stickers header-culture-figures" src="./assets/img/stickers/caboclo-delanca.png" alt="Png Caboclo de Lança"> 
            </header>

            <!-- secao de artistas -->
            <section class="section-artists">
                <!-- subtitulo da secao -->
                <div class="section-subtitle">
                    <img src="./assets/icons/brilhinho.png" alt="Icone de Brilho">
                    <h5>Artistas Locais</h5>
                    <img src="./assets/icons/brilhinho.png" alt="Icone de Brilho">
                </div>

                <!-- card dos artistas -->
                <div class="album-grid">
                    <a href="https://youtu.be/cdS-ezTdlzQ?si=WtvNomrLYBz9799_" target="_blank">
                        <div class="album">
                            <img class="artist-img" src="assets/img/artistas/lenine.png" alt="Lenine">
                            <img class="vinyl" src="assets/img/artistas/vinil-metade.png" alt="">
                        </div>
                    </a>
                    
                    <a href="https://youtu.be/kdJRJCCKp6A?si=X9R_Tc8PlusNfv7E" target="_blank">
                        <div class="album">
                            <img class="artist-img" src="assets/img/artistas/reginaldo-rossi.png" alt="Reginaldo Rossi">
                            <img class="vinyl" src="assets/img/artistas/vinil-metade.png" alt="">
                        </div>
                    </a>
                    
                    <a href="https://youtu.be/l-FxY25lYzY?si=ZxekzFTolEruJa4v" target="_blank">
                        <div class="album">
                            <img class="artist-img" src="assets/img/artistas/alceu-valenca.png" alt="Alceu Valença">
                            <img class="vinyl" src="assets/img/artistas/vinil-metade.png" alt="">
                        </div>
                    </a>
                    
                    <a href="https://youtu.be/IAWkTqqTZOw?si=W6CQXtjzeFJ2pBjG" target="_blank">
                        <div class="album">
                            <img class="artist-img" src="assets/img/artistas/luiz-gonzaga.png" alt="Luiz Gonzaga">
                            <img class="vinyl" src="assets/img/artistas/vinil-metade.png" alt="">
                        </div>
                    </a>

                    <a href="https://youtu.be/n8QJrkIghaY?si=Zn6AsNvJ7qaePpOd" target="_blank">
                        <div class="album">
                            <img class="artist-img" src="assets/img/artistas/chico-science.png" alt="Chico Science">
                            <img class="vinyl" src="assets/img/artistas/vinil-metade.png" alt="">
                        </div>
                    </a>

                    <a href="https://youtu.be/IhOUsLiCAzw?si=n2cn89SHxIk1Q8MX" target="_blank">
                        <div class="album">
                            <img class="artist-img" src="assets/img/artistas/rafaela-santos.png" alt="Rafaela Santos">
                            <img class="vinyl" src="assets/img/artistas/vinil-metade.png" alt="">
                        </div>
                    </a>

                    <a href="https://youtu.be/deVm70yarNw?si=3wsvUu2ik3RCZcvc" target="_blank">
                        <div class="album">
                        <img class="artist-img" src="assets/img/artistas/joao-gomes.png" alt="João Gomes">
                        <img class="vinyl" src="assets/img/artistas/vinil-metade.png" alt="">
                    </div>
                    </a>

                    <a href="https://youtu.be/ZyBYJCptF5c?si=V6omeafzTi6hwV3w" target="_blank">
                        <div class="album">
                            <img class="artist-img" src="assets/img/artistas/priscila-senna.png" alt="Priscila Senna">
                            <img class="vinyl" src="assets/img/artistas/vinil-metade.png" alt="">
                        </div>
                    </a>

                    <a href="https://youtu.be/Th1xeg8RkJI?si=5uDq5vzjAHgFPwj0" target="_blank">
                        <div class="album">
                            <img class="artist-img" src="assets/img/artistas/conde-sobrega.png" alt="Conde So Brega">
                            <img class="vinyl" src="assets/img/artistas/vinil-metade.png" alt="">
                        </div>
                    </a>

                    <a href="https://youtu.be/v4kXoDE6Wic?si=M6mTXvPTvzgvc0C5" target="_blank">
                        <div class="album">
                            <img class="artist-img" src="assets/img/artistas/clarice-falcao.png" alt="Clarice Falcao">
                            <img class="vinyl" src="assets/img/artistas/vinil-metade.png" alt="">
                        </div>
                    </a>

                    <a href="https://youtu.be/0I10RkwFPmY?si=WKCWLquyhRMTnw5f" target="_blank">
                        <div class="album">
                            <img class="artist-img" src="assets/img/artistas/mc-sheldon.png" alt="MC Sheldon">
                            <img class="vinyl" src="assets/img/artistas/vinil-metade.png" alt="">
                        </div>
                    </a>

                    <a href="https://youtu.be/O8BKiCAZnAg?si=I2Mcbg0sQH0YDiDH" target="_blank">
                        <div class="album">
                            <img class="artist-img" src="assets/img/artistas/kelvis-duran.png" alt="Kelvis Duran">
                            <img class="vinyl" src="assets/img/artistas/vinil-metade.png" alt="">
                        </div>
                    </a>
                </div>
            </section>

            <!-- secao dos ritmos -->
            <section class="section-ritmos">
                <!-- subtitulo da secao -->
                <div class="section-subtitle">
                    <img src="./assets/icons/brilhinho.png" alt="Icone de Brilho">
                    <h5>Ritmos Populares</h5>
                    <img src="./assets/icons/brilhinho.png" alt="Icone de Brilho">
                </div>

                <!-- cards dos ritmos -->
                <div class="container">
                    <div class="grid">
                        <!-- card frevo -->
                        <div class="card">
                            <!-- <img src="https://img.youtube.com/vi/VIDEO_ID/0.jpg" alt="Frevo"> -->
                            <iframe width="300" height="300" src="https://www.youtube.com/embed/66cAD7-9tXY?si=dv0xwG59iPolwuy7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="card-content">
                                <h3 class="card-title">Frevo</h3>
                                <p class="card-text">
                                    O Frevo é o típico ritmo pernambucano, considerado pela UNESCO um <strong>Patrimônio Cultural Imaterial da Humanidade</strong>. É aquele ritmo animado que tanto esperamos pra dançar no carnaval, com suas cores vibrantes e passos em ritmo acelerado, o Frevo é contagiante e, como o próprio nome sugere, <strong>"ferve" nas ruas</strong> e arrasta milhares de foliões por onde passa.
                                </p>
                            </div>
                        </div>

                        <!-- card brega funk -->
                        <div class="card">
                            <iframe width="300" height="300" src="https://www.youtube.com/embed/n79Okdb4VIQ?si=9TrneofwhF3DqeRH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                        
                            <div class="card-content">
                                <h3 class="card-title">Brega Funk</h3>
                                <p class="card-text">
                                    O brega funk é a união do brega com o funk, que surgiu em 2011, em Recife, Pernambuco, após uma tentativa de deixar um brega romântico, mais rápido e alegre. Depois disso, o ritmo estourou, e virou sucesso no Brasil todo, mas sempre ressaltando o cotidiano das comunidades recifenses.
                                </p>
                            </div>
                        </div>

                        <!-- card manguebeat -->
                        <div class="card">
                            <iframe width="300" height="300" src="https://www.youtube.com/embed/_G63uF288T4?si=uHzQxju02sKhJZFJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                        
                            <div class="card-content">
                                <h3 class="card-title">Manguebeat</h3>
                                <p class="card-text">
                                    O manguebeat é um <strong>movimento cultural, uma forma de protesto</strong>  em uma época de grandes crises econômicas e culturais. O ritmo em si, é uma junção de <strong>maracatu rural, rock, hip-hop e música eletrônica</strong> . Seu nome une a palavra <strong>MANGUE</strong>, ecossistema típico da cidade do Recife, com a palavra <strong>BEAT</strong>, que significa batida, e também faz referência aos bits, utilizados na informática.
                                </p>
                            </div>
                        </div>

                        <!-- card maracatu -->
                        <div class="card">
                            <iframe width="300" height="300" src="https://www.youtube.com/embed/PEsG45YRYwY?si=CRvhBTU-N8fLfgYa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                        
                            <div class="card-content">
                                <h3 class="card-title">Maracatu</h3>
                                <p class="card-text">
                                    O maracatu é uma <strong>manifestação cultural pernambucana</strong>, composto por músicas, danças e outros elementos herdados da <strong>cultura africana</strong>, que surgiu como uma <strong>forma de resistência</strong> à opressão dos colonizadores. Após o fim da escravidão no Brasil, o maracatu começou a ser inserido de gradualmente como parte das comemorações carnavalescas no Recife.
                                </p>
                            </div>
                        </div>

                        <!-- card forro -->
                        <div class="card">
                            <iframe width="300" height="300" src="https://www.youtube.com/embed/bjBx8aOJuq0?si=1dj7LYn4qz7figiq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                        
                            <div class="card-content">
                                <h3 class="card-title">Forró</h3>
                                <p class="card-text">
                                    O forró é aquele som com dança animada que nasceu no nordeste do Brasil e conquistou o país inteiro. Originou-se nas <strong>festas juninas</strong>, com influências de vários ritmos, como indígena, africano e europeu. Na música, <strong>a sanfona, o triângulo e a zabumba</strong> dão o tom alegre e contagiante e as letras falam da vida e das tradições nordestinas.
                                </p>
                            </div>
                        </div>

                        <!-- card caboclinho-->
                        <div class="card">
                            <iframe width="300" height="300" src="https://www.youtube.com/embed/M8I2l-sJyvQ?si=A5eu2gfEHwnhuxGc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                      
                            <div class="card-content">
                                <h3 class="card-title">Caboclinho</h3>
                                <p class="card-text">
                                    Os caboclinhos são grupos populares de representação da cultura indígena, que se apresentam principalmente durante o Carnaval, geralmente em filas duplas e sempre portando suas preacas (instrumento em forma de arco e flecha). Os artistas se vestem de índios e saem pelas ruas, animando multidões, exibindo danças, músicas e muita alegria.
                                </p>
                            </div>
                        </div>

                        <!-- card ciranda-->
                        <div class="card">
                            <iframe width="300" height="300" src="https://www.youtube.com/embed/EEWUx6_rwRY?si=w8MFwLLI_J0nvhng" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                     
                            <div class="card-content">
                                <h3 class="card-title">Ciranda</h3>
                                <p class="card-text">
                                    A ciranda é um ritmo cultural dançado e cantado em rodas, aberto para quem quiser participar; um ritmo fácil que conta muito sobre Pernambuco. Tradicionalmente, no centro da roda posiciona-se o mestre, o contramestre e os músicos, e os paços não são definitivos. Uma das cirandeiras mais conhecidas do país, <strong>Lia de Itamaracá</strong> , foi considerada em 2005,<strong>patrimônio vivo de Pernambuco</strong> .
                                </p>
                            </div>
                        </div>

                        <!-- card brega-->
                        <div class="card">
                            <iframe width="300" height="300" src="https://www.youtube.com/embed/8Xe8gApDRgU?si=dPloicwwNSdCv-Kc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                      
                            <div class="card-content">
                                <h3 class="card-title">Brega</h3>
                                <p class="card-text">
                                    O brega é um ritmo romântico, ramificado na <strong>Jovem Guarda</strong>, mas sem os elementos do rock. O nome surge como uma maneira pejorativa para se referir aos artistas desse ritmo, devido suas músicas “cafonas”, mas que ganhou força em Pernambuco, principalmente por causa do <strong>Rei do Brega: Reginaldo Rossi</strong>. Hoje o ritmo toca no Brasil todo, e existe até <strong>“O Dia Municipal da Música Brega”</strong>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- secao de culinaria -->
            <section class="section-culinaria">
                <div class="section-subtitle">
                    <img src="./assets/icons/brilhinho.png" alt="Icone de Brilho">
                    <h5>Culinária</h5>
                    <img src="./assets/icons/brilhinho.png" alt="Icone de Brilho">
                </div>
                <div class="gallery">
                    <div class="img-gallery">
                        <a href="https://panelinha.com.br/receita/cuscuz-milho" target="_blank">
                            <img src="./assets/img/comidas/cuscuz.png" alt="Foto culinaria cuscuz">
                        </a>
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/15246-bolo-de-rolo-de-recife.html" target="_blank">
                            <img src="./assets/img/comidas/bolo-rolo.png" alt="Foto culinaria bolo de rolo">
                        </a>
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/4928-tapioca.html" target="_blank">
                            <img src="./assets/img/comidas/tapioca.png" alt="Foto culinaria tapioca">   
                        </a>                 
                    </div>
                        
                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/52835-buchada-deliciosa.html" target="_blank">
                            <img src="./assets/img/comidas/bolao-depeixe.png" alt="Foto culinaria buxada">
                        </a>
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/1444-cartola.html" target="_blank">
                            <img src="./assets/img/comidas/doce-cartola.png" alt="Foto culinaria doce-cartola">                    
                        </a>
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/16617-arrumadinho.html" target="_blank">
                            <img src="./assets/img/comidas/arrumadinho.png" alt="Foto culinaria arrumadinho">      
                        </a>     
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/1106-camarao-na-moranga.html" target="_blank">
                            <img src="./assets/img/comidas/jerimum-moranga.jpg" alt="Foto culinaria camarao moranga">                    
                        </a>
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/2753-cocada.html" target="_blank">
                            <img src="./assets/img/comidas/cocada.png" alt="Foto culinaria cocada">
                        </a>
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/2620-bolo-souza-leao.html" target="_blank">
                            <img src="./assets/img/comidas/bolo-souza-leao.jpg" alt="Foto culinaria bolo souza leao">
                        </a>
                    </div>

                    <div class="img-gallery">
                        <a href="https://www.tudogostoso.com.br/receita/35-pamonha-doce.html" target="_blank">
                            <img src="./assets/img/comidas/pamonha.png" alt="Foto culinaria pamonha">
                        </a>
                    </div>
                </div>
            </section>
        </section>

        <!-- banner de separacao -->
        <div class="banner-finalizacao">
            <h6>Iai meu chegado, gostasse do conteúdo? </h6>
            <span>Então te liga que encontramos um jeitinho pra tu aproveitar cada pedacinho de Recife da melhor forma!</span>
        </div>

        <!-- SECTION RECICLUBE -->
        <section id="reciclube" class="reciclube fundo">
            <header class="header reciclube">
                <img class="stickers" src="assets/img/stickers/tubarao.png" alt="Png do Tubarao" width="200px"> 

                <div class="title reciclube">
                    <img class="brilhinho" src="assets/icons/brilhinho.png" alt="Icone de Brilho"> 

                    <h2 class="reciclube--title">RECICLUBE</h2> 
                    
                    <img class="brilhinho" src="assets/icons/brilhinho.png" alt="Icone de Brilho"> 
                </div>

                <img class="stickers" src="assets/img/stickers/lausa.png" alt="Png La Ursa" width="200px"> 
            </header>

            <!-- descricao do que eh o reciclube-->
            <div class="text-description">
                <h3>
                    É isso mesmo Marinelson! <br>
                    Criamos o <strong> PRIMEIRO e ÚNICO </strong> clube de assinaturas exclusivamente <strong> RECIFENSE! </strong> 
                </h3>
                <span>e sabe o melhor?? senta que la vem bomba! 👀</span>
            </div>

            <!-- SECTION PRECO -->
            <section class="section-preco">
                <h3 class="h3-assinatura">Nossa Assinatura MENSAL custa apenassss </h3>

                <div class="preco-relative">
                    <img class="centavos" src="assets/img/stickers/centavos.png" alt="" width="400px" >
                    <img class="ballon-rs" src="assets/img/stickers/rs.png" alt="" width="80px">
                    <span class="span-preco">0,99</span>
                </div>
                <span class="span-pocasal">É menine, pra tu vê! Ta mais barato que a poca sal e doce no metrô!</span>
            </section>

            <!-- SECTION BENEFICIOS -->
            <section class="section-beneficios">
                <header class="header-beneficios">
                    <img class="stickers" src="assets/img/stickers/tubarao.png" alt="Png do Tubarao" width="100px"> 

                    <div class="title beneficios">
                        <img class="brilhinho" src="assets/icons/brilhinho.png" alt="Icone de Brilho" width="30px"> 

                        <h2>BENEFICIOS</h2> 
                        
                        <img class="brilhinho" src="assets/icons/brilhinho.png" alt="Icone de Brilho" width="30px"> 
                    </div>

                    <img class="stickers" src="assets/img/stickers/tubarao.png" alt="Png do Tubarao" width="100px"> 
                </header>

                <div class="beneficios">

                    <div id="featuresSection" class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 mt-3">
                                <div class="d-flex flex-row">
                                    <img src="https://assets.ccbp.in/frontend/responsive-website/awsome-features-1-img.png" alt="" />
                                    <div>
                                        <h2>Roles</h2>
                                        <p>Divulgação de Eventos e Festivais que vao rolar em Recife</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <div class="d-flex flex-row">
                                    <img src="https://assets.ccbp.in/frontend/responsive-website/awsome-features-2-img.png" alt="" />
                                    <div>
                                        <h2>Descontos</h2>
                                        <p>Pague mais barato em lojas, barzinhos e restaurantes parceiros!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <div class="d-flex flex-row">
                                    <img src="https://assets.ccbp.in/frontend/responsive-website/awsome-features-3-img.png" alt="" />
                                    <div>
                                        <h2>Jornal Digital</h2>
                                        <p>Noticias e fofocas Recifenses em primeira mao</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <div class="d-flex flex-row">
                                    <img src="https://assets.ccbp.in/frontend/responsive-website/awsome-features-4-img.png" alt="" />
                                    <div>
                                        <h2>Gameficacao</h2>
                                        <p>Acumule pontos e concorra a brindes exclusivos da nossa cultura pernambucana</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="button-54" role="button"><a href="#formulario">Simbora!</a></button>

            </section>
            
            <!-- SECTION COM O FORMULARIO-->
            <section class="section-formulario" id="formulario">
                <div class="title">
                    <img class="brilhinho" src="assets/icons/brilhinho.png" alt="Icone de Brilho" width="30px"> 
                    
                    <h2>BORA ASSINAR!</h2> 
                
                    <img class="brilhinho" src="assets/icons/brilhinho.png" alt="Icone de Brilho" width="30px"> 
                </div>
                
                <!-- formulario de assinatura -->

                <form action="" class="formulario" method="POST">
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Nome</label>
                            <input type="text" id="inputName" class="form-control" placeholder="Vitórya" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputSurname">Sobrenome</label>
                            <input type="text" class="form-control" id="inputSurname" placeholder="Medeiros" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="vitoryamedeiros@email.com" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Senha</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="123@abc" required>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Av Caxanga, 25" required>
                        </div>
    
                        <div class="form-group col-md-6">
                            <label for="inputCity">Cidade e Estado</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="Recife, Pernambuco" required>
                        </div>

                    </div>

                    <span><strong>Voce é Pernambucano/a?</strong></span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Pernambucano/a sim senhor!
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                        <label class="form-check-label" for="flexRadioDefault2">
                          Infelizmente não, sou só de coração
                        </label>
                      </div>

                    <button class="button-54 form" role="button"><a href="../pages/pagamento.html">Ir para o pagamento!</a></button>

                </form>
            </section>
        </section>

        <!-- FOOTER -->
        <footer>
            <header class="footer">
                <div class="footer subtitulo">
                    <p><span class="footer span">Volte sempre</span> pra esse site e pra Recife!</p>
                </div>
            </header>

            <div class="center-content">
                <img src="assets/img/stickers/lausa.png" alt="La ursa" class="laursa-footer stickers">
                <a href="#inicio"><button class="button-54 footer" role="button">Voltar pro Topo</button></a>
            </div>
            
            <div class="section-creattors">
                <hr>
                <span class="span-footer">Design, Conteúdo e Desenvolvimento por</span>

                <div class="creattors">
                    <div class="name vitorya">
                        <h4><a class="link-creattor" href="https://www.linkedin.com/in/vitoryamedeiros/" target="_blank">Vitórya Medeiros</a></h4>
                        </a>
                    </div>

                    <div class="name guilherme">
                        <h4><a class="link-creattor" href="https://www.linkedin.com/in/guilherme-felix-7195b32ba/" target="_blank">José Guilherme</a></h4>
                    </div> 

                    <div class="name izaa">
                        <h4><a class="link-creattor" href="https://www.linkedin.com/in/izaadora-laís-cunha-neves-7206742a8/" target="_blank">Izaadora Laís</a></h4>
                    </div>

                    <div class="name miguel">
                        <h4><a class="link-creattor" href="https://www.linkedin.com/in/miguel-batista-76344022b/" target="_blank">Miguel Eudio</a></h4>
                    </div>         

                    <div class="name anabea">
                        <h4><a class="link-creattor" href="https://www.linkedin.com/in/ana-beatriz-silva-souza-80bbb2301/" target="_blank">Ana Beatriz</a></h4>
                    </div>    
                </div>             
            </div> 
        </footer>
        
        <div class="direitos">
            <span>TODOS OS DIREITOS RESERVADOS</span>
        </div>
    </main>

    <!--====JAVASCRIPT IMPORTS=====-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <script src="js/carrossel.js"></script>
    <script src="js/button.js"></script>
</body>
</html>
