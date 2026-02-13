<?php
  include(__DIR__ . "/../classe/protect.php");
  protect();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>GUSTAVO</title>

  <!-- Favicon -->
  <link rel="icon" href="img/binary.ico" type="image/x-icon">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="quantum-navbar">
  <div class="navbar-container">

    <a href="#home" class="icon">GUSTAVO</a>

    <ul class="nav-links" id="navLinks">
      <li><a href="#home">Home</a></li>
      <li><a href="#apresentacao">Apresentação</a></li>
      <li><a href="#habilidades">Habilidades</a></li>
      <li><a href="#projetos">Projetos</a></li>
      <li><a href="#contato">Contato</a></li>
    </ul>

    <!-- MENU MOBILE -->
    <div class="mobile-menu-toggle" id="menuToggle">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>

  </div>
</nav>

<!-- CONTEÚDO -->
<main class="principal" style="margin-top:70px">

  <!-- HOME / BANNER -->
  <section class="ban_sec" id="home">
    <div class="ban_img">
      <img
        src="https://img.freepik.com/fotos-gratis/fluxo-de-codigo-binario-digital_23-2152020929.jpg"
        alt="Banner">

      <div class="ban_text">
        <strong>
          <span>Seja bem-vindo ao meu site</span><br>
          Navegue e conheça um pouco de mim.
        </strong><br><br>

        <a href="#contato">Baixar Currículo</a>
      </div>
    </div>
  </section>

  <!-- APRESENTAÇÃO -->
  <section id="apresentacao" class="section_all">

    <!-- CANVAS (FUNDO) -->
    <div class="apresentacao_content">
      <div class="intro_text">

        <div class="profile-photo">
          <div class="photo-blur"></div>
          <img class="photo-base" src="img/binary.png" alt="Fundo do Perfil">
          <img class="photo-overlay" src="img/eu_transparente1.png" alt="Gustavo Henriques">
        </div>
        <h2>Olá, eu sou o <strong>Gustavo Henriques</strong></h2>

        <p>
          Estudante de <strong>Análise e Desenvolvimento de Sistemas</strong>
          na UniEinstein (Limeira-SP). Unindo 5 anos de experiência como<br>
          <strong>Coordenador da Qualidade</strong> e minha base como <strong>Técnico em Informática</strong> para criação de soluções eficientes como <strong>Desenvolvedor</strong>.
        </p>

        <div class="skills_tags">
          <span><i class="fa-solid fa-check"></i> Qualidade</span>
          <span><i class="fa-solid fa-code"></i> Desenvolvimento</span>
        </div>

      </div>
    </div>

  </section>

  <!-- OUTRAS SEÇÕES -->

  <section id="habilidades" class="section_all skills-section">
    <h2 class="skills-title">Habilidades</h2>
    <div class="skills-grid">
      <div class="skill-card">
        <i class="fa-brands fa-java"></i>
        <span>Java</span>
      </div>

      <div class="skill-card">
        <i class="fa-brands fa-php"></i>
        <span>PHP</span>
      </div>

      <div class="skill-card">
        <i class="fa-solid fa-code"></i>
        <span>C++</span>
      </div>

      <div class="skill-card">
        <i class="fa-brands fa-kotlin"></i>
        <span>Kotlin</span>
      </div>

      <div class="skill-card">
        <i class="fa-brands fa-python"></i>
        <span>Python</span>
      </div>

      <div class="skill-card">
        <div class="dual-icons">
        <i class="fa-brands fa-html5"></i>
        <i class="fa-brands fa-css3-alt"></i>
        </div>
        <span>HTML & CSS</span>
      </div>

      <div class="skill-card">
        <i class="fa-solid fa-hashtag"></i>
        <span>C#</span>
      </div>
    </div>
  </section>



  <section id="projetos" class="section_all projetos">

    <strong><h2 class="titulo-secao">Projetos</h2></strong>

    <div class="projeto-card">

      <!-- IMAGEM / CAPA -->
      <div class="projeto-imagem">
        <img src="img/teste.png" alt="Capa Hackathon">
      </div>

      <!-- DESCRIÇÃO -->
      <div class="projeto-conteudo">
        <!-- <h3>Hackathon - Ouvidoria Limeira</h3> -->
         <h3>1 - Lorem Ipsum</h3>

        <p>
          Projeto desenvolvido para a Ouvidoria da Cidade de Limeira, no qual foi realizada a extração das informações contidas no arquivo fornecido, utilizando a linguagem Python. Em seguida, foi elaborado o Diagrama Entidade-Relacionamento (DER) previamente definido e realizada a modelagem e visualização das informações por meio do Power BI.
        </p> 

        <!-- BOTÕES -->
        <div class="projeto-botoes">
          <a href="https://youtube.com" target="_blank" class="btn btn-video">
            <i class="fa-brands fa-youtube"></i> Ver vídeo
          </a>

          <a href="https://github.com/GustavoHenriques99/Hackathon---Ouvidoria-Limeira" target="_blank" class="btn btn-github">
            <i class="fa-brands fa-github"></i> Baixar projeto
          </a>

          <a href="arquivo.zip" download class="btn btn-download">
            <i class="fa-solid fa-download"></i> Baixar projeto
          </a>
        </div>
      </div>

    </div>


    <div class="projeto-card">

      <!-- IMAGEM / CAPA -->
      <div class="projeto-imagem">
        <img src="img/teste.png" alt="Capa Hackathon">
      </div>

      <!-- DESCRIÇÃO -->
      <div class="projeto-conteudo">
        <h3>2 - Lorem Ipsum</h3>

        <p>
          Lorem ipsum dolor sit amet. Rem dolor reprehenderit vel iste quaerat ut quasi nesciunt. Ut fugit consequatur hic libero quam a ipsa nisi aut autem illo!
        </p>
          <li>✔ Lorem ipsum dolor sit amet </li>
          <li>✔ Lorem ipsum dolor sit amet </li>
          <li>✔ Lorem ipsum dolor sit amet </li>
        </ul> 

        <!-- BOTÕES -->
        <div class="projeto-botoes">
          <a href="https://youtube.com" target="_blank" class="btn btn-video">
            <i class="fa-brands fa-youtube"></i> Ver vídeo
          </a>

          <a href="https://github.com/GustavoHenriques99/Hackathon---Ouvidoria-Limeira" target="_blank" class="btn btn-github">
            <i class="fa-brands fa-github"></i> Baixar projeto
          </a>

          <a href="arquivo.zip" download class="btn btn-download">
            <i class="fa-solid fa-download"></i> Baixar projeto
          </a>
        </div>
      </div>
    </div>


      <div class="projeto-card">

        <!-- IMAGEM / CAPA -->
        <div class="projeto-imagem">
          <img src="img/teste.png" alt="Capa Hackathon">
        </div>

        <!-- DESCRIÇÃO -->
        <div class="projeto-conteudo">
          <h3>3 - Lorem Ipsum </h3>

          <p>
            Lorem ipsum dolor sit amet. Rem dolor reprehenderit vel iste quaerat ut quasi nesciunt. Ut fugit consequatur hic libero quam a ipsa nisi aut autem illo!Non dolor inventore aut rerum adipisci est perspiciatis magnam et culpa quisquam. Aut repellendus galisum id galisum iusto est repellendus fuga! Est corrupti expedita sed nihil beatae qui quasi nihil.
          </p>
          <ul>
            <li>✔ Lorem ipsum dolor sit amet </li>
            <li>✔ Lorem ipsum dolor sit amet </li>
            <li>✔ Lorem ipsum dolor sit amet </li>
          </ul> 

          <!-- BOTÕES -->
          <div class="projeto-botoes">
            <a href="https://youtube.com" target="_blank" class="btn btn-video">
              <i class="fa-brands fa-youtube"></i> Ver vídeo
            </a>

            <a href="https://github.com/GustavoHenriques99/Hackathon---Ouvidoria-Limeira" target="_blank" class="btn btn-github">
              <i class="fa-brands fa-github"></i> Baixar projeto
            </a>

            <a href="arquivo.zip" download class="btn btn-download">
              <i class="fa-solid fa-download"></i> Baixar projeto
            </a>
        </div>
      </div>
  </section>


  <section id="contato" class="section_all">
    <h2>Contato</h2>
  </section>

</main>

<!-- JS -->
<script src="cod.js"></script>     <!-- menu mobile -->
<script src="canva.js"></script>   <!-- partículas -->

</body>
</html>