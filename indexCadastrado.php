<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Menu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <!-- Font Awesome Link for Icons -->
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/teams/team-2/assets/css/team-2.css">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  
</head>
<body>
  <nav>
    <!-- Checkbox for toggling menu -->
    <input type="checkbox" id="check">
    <!-- Menu icon -->
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <!-- Site logo -->
    
   <label class="logo"> <a href="indexCadastrado.php" class="aLogo">Neguinho Corts</a></label>
    <!-- Navigation links -->
    <ul>
      <li><a class="active" href="#">Página Principal</a></li>
      <li><a href="agendamentoCliente.php">Agendar</a></li>
      <li><a href="sair.php" >Sair</a></li>
     
    </ul>
  </nav>


  <!-- Plugin WhatsApp -->
<a href="https://wa.me/5511985220433?text=Ol%C3%A1%2C%20gostaria%20de%20fazer%20um%20agendamento!" target="_blank" id="whatsapp-button">
    <img src="https://cdn-icons-png.flaticon.com/512/124/124034.png" alt="WhatsApp">
</a>
 
<style>
    #whatsapp-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        background-color: #25d366;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    }
 
    #whatsapp-button img {
        width: 40px;
        height: 40px;
    }
</style>



  <header>
        <div class="overlay">
            <h1 class="h1Banner">Seja Bem-vindo ao</h1>
            <p class="line typing-animation">Neguinho Corts</p>
            <div class="buttons">
                <a href="agendamentoCliente.php" target="_blank"><button class="botao-agendar">AGENDAR</button></a>
                <a href="#quemSomos"><button class="botao-agendar">QUEM SOMOS</button></a>
            </div>
            <video playsinline autoplay muted loop>
                <source src="videos/corteVideos.mp4" type="video/mp4" alt="">
            </video>
        </div>
</header>




<section class="servicos" id="servicos">
    <div class="container">
        <h2 class="titulo">Nossos Serviços</h2>
        <p class="subtitulo">Seu estilo, nossa paixão. Cuide de você com o melhor da barbearia tradicional e moderna!</p>
        
        <div class="servicos-lista">
            <!-- Serviço 1 -->
            <div class="servico">
                <img src="images/cabelo.jpg" alt="Corte de Cabelo" class="servico-imagem">
                <h3 class="servico-nome">Cortes de Cabelo</h3>
                <p class="servico-descricao">Na nossa barbearia, combinamos as últimas tendências com técnicas clássicas para criar o estilo perfeito que reflete sua personalidade.</p>
                <p class="servico-preco">A partir de <strong>R$ 50,00</strong></p>
                <a href="agendamentoCliente.php" class="botao-agendar">Agendar</a>
            </div>

            <!-- Serviço 2 -->
            <div class="servico">
                <img src="images/barba.jpg" alt="Barba" class="servico-imagem">
                <h3 class="servico-nome">Barba</h3>
                <p class="servico-descricao">Dê à sua barba o cuidado que ela merece. Seja para um acabamento perfeito ou um design totalmente novo!</p>
                <p class="servico-preco">A partir de <strong>R$ 30,00</strong></p>
                <a href="agendamentoCliente.php" class="botao-agendar">Agendar</a>
            </div>

            <!-- Serviço 3 -->
            <div class="servico">
                <img src="images/tratamento.jpg" alt="Tratamento de Pele" class="servico-imagem">
                <h3 class="servico-nome">Tratamento de Pele</h3>
                <p class="servico-descricao">Cuide da sua pele com um tratamento exclusivo e relaxante, ideal para restaurar a vitalidade e o frescor do seu rosto.</p>
                <p class="servico-preco">A partir de <strong>R$ 80,00</strong></p>
                <a href="agendamentoCliente.php" class="botao-agendar">Agendar</a>
            </div>
        </div>
        
        <!-- Botão "Ver Mais" -->
        <div class="ver-mais">
            <a href="agendamentoCliente.php" class="botao-agendar second">Ver Mais</a>
        </div>
    </div>
</section>











<section class="py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="titulo second">Quem Somos</h2>
      </div>
    </div>
  </div>

  <div class="container overflow-hidden" id="quemSomos">
    <div class="row gy-4 gy-lg-0">
      <!-- Card 1: Renato -->
      <div class="col-12 col-lg-4">
        <div class="card border-0">
          <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
            <a href="#!">
              <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="images/renato.jpg" alt="Renato">
            </a>
            <figcaption>
              
            </figcaption>
          </figure>
          <div class="card-body border bg-white p-4">
            <h2 class="card-title h4 fw-bold mb-3">Renato</h2>
            <p class="card-text text-secondary">Renato é o cara por trás da barbearia Neguinho Corts e, além de ser dono, manda muito bem como barbeiro. Com mais de 8 anos de experiência, ele tem aquele toque especial que só quem entende do assunto tem. É super gente boa, sempre de boas e com aquela vibe que faz a galera se sentir em casa. Se você quer um corte afiado e uma boa conversa, o Renato é o cara!</p>
          </div>
          <div class="card-footer border border-top-0 bg-white p-4">
            <ul class="nav mb-0 bsb-nav-sep">
              <li class="nav-item text-secondary">
                <a class="nav-link link-secondary p-0 pe-3 d-inline-flex align-items-center" href="#!">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-scissors" viewBox="0 0 16 16">
                    <path d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0m7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                  </svg>
                  <span class="ms-2 fs-6">Dono da Barbearia & Barbeiro</span>
                </a>
              </li>
            </ul>
            <div class="d-flex justify-content-between mt-3">
              <a href="agendamentoCliente.php" class="btn btn-dark">Agendar </a>
              <a href="https://www.instagram.com/neguinho_corts01" target="_blank" class="btn btn-outline-danger d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.335 2.667 2.667 0 0 1 0-5.335z" />
                </svg>
                <span class="ms-2">Instagram</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2: João -->
      <div class="col-12 col-lg-4">
        <div class="card border-0">
          <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
            <a href="#!">
              <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="images/jp.jpg" alt="João">
            </a>
            <figcaption>
             
            </figcaption>
          </figure>
          <div class="card-body border bg-white p-4">
            <h2 class="card-title h4 fw-bold mb-3">João Pedro</h2>
            <p class="card-text text-secondary">JP é aquele barbeiro que sabe o que faz! Com um talento de sobra e um olhar afiado para os detalhes, ele transforma qualquer corte em uma obra de arte. Super tranquilo e descontraído, ele é o cara ideal pra quem busca um corte top e uma experiência relaxante. Se liga no JP, porque com ele, o estilo é garantido!</p>
          </div>
          <div class="card-footer border border-top-0 bg-white p-4">
            <ul class="nav mb-0 bsb-nav-sep">
              <li class="nav-item text-secondary">
                <a class="nav-link link-secondary p-0 pe-3 d-inline-flex align-items-center" href="#!">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-scissors" viewBox="0 0 16 16">
                    <path d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0m7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                  </svg>
                  <span class="ms-2 fs-6">Barbeiro</span>
                </a>
              </li>
            </ul>
            <div class="d-flex justify-content-between mt-3">
              <a href="agendamentoCliente.php" class="btn btn-dark">Agendar </a>
              <a href="https://www.instagram.com/jotaap_corts" target="_blank" class="btn btn-outline-danger d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.335 2.667 2.667 0 0 1 0-5.335z" />
                </svg>
                <span class="ms-2">Instagram</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Card 3: JP -->
      <div class="col-12 col-lg-4">
        <div class="card border-0">
          <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
            <a href="#!">
              <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="images/br.jpg" alt="Marcos">
            </a>
            <figcaption>
              
            </figcaption>
          </figure>
          <div class="card-body border bg-white p-4">
            <h2 class="card-title h4 fw-bold mb-3">Bryan</h2>
            <p class="card-text text-secondary">Bryan é aquele barbeiro que manda muito bem nos cortes e ainda deixa o ambiente super tranquilo. Ele tem um estilo todo próprio e faz cada corte de um jeito único, deixando os clientes sempre satisfeitos. Além disso, é super gente boa, sempre com uma vibe legal e um sorriso no rosto. Se você quer um corte diferente e feito com aquele toque especial, o Bryan é o cara!</p>
          </div>
          <div class="card-footer border border-top-0 bg-white p-4">
            <ul class="nav mb-0 bsb-nav-sep">
              <li class="nav-item text-secondary">
                <a class="nav-link link-secondary p-0 pe-3 d-inline-flex align-items-center" href="#!">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-scissors" viewBox="0 0 16 16">
                    <path d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0m7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                  </svg>
                  <span class="ms-2 fs-6">Barbeiro</span>
                </a>
              </li>
            </ul>
            <div class="d-flex justify-content-between mt-3">
              <a href="agendamentoCliente.php" class="btn btn-dark">Agendar </a>
              <a href="https://www.instagram.com/bryan__corts" target="_blank" class="btn btn-outline-danger d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.335 2.667 2.667 0 0 1 0-5.335z" />
                </svg>
                <span class="ms-2">Instagram</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="unidades" class="unidades">
        <div class="container">
            <div class="titulosUnidades">
            <h2 class="titulo second ter">Nossas Unidades</h2>
            </div>
            
            <div class="unidades-content">
                <div class="caixaUnidade">
                    <div class="titulo-unidades">
                        <h3 class="h2Unidade">Unidade <span class="h2Unidadep2">Vetorazzo <i class="fas fa-cut" aria-hidden="true"></i></span></h3>
                    </div>    
                    <p class="texto1Unidade">
                    
                        <span>Rua Miro Vetorazzo, 09820-135, São Bernardo do Campo.</span>
                    </p>
                    <div class="barra-unidades"></div>    
                    <div class="horario-unidade">    
                        <p class="texto2Unidade">
                            <i class="far fa-clock" aria-hidden="true"></i>
                            Segunda à Sexta 10h às 20h<br>
                            Sábado das 09h às 18h
                        </p>
                        <a href="agendamentoCliente.php" class="botao-agendar terceiro">Agendar</a>
                    </div>    
                </div>
                
                <div class="caixaUnidade">
                    <div class="titulo-unidades">
                        <h3 class="h2Unidade">Unidade <span class="h2Unidadep2">Feltrins <i class="fas fa-cut" aria-hidden="true"></i></span></h3>
                    </div>
                    <p class="texto1Unidade">
                        <span>Rua dos Feltrins, 1311, 09820-280, São Bernardo do Campo</span>
                    </p>
                    <div class="barra-unidades"></div>
                    <div class="horario-unidade">
                        <p class="texto2Unidade">
                            <i class="far fa-clock" aria-hidden="true"></i>
                            Segunda à Sexta 10h às 20h<br>
                            Sábado das 09h às 18h 
                        </p>
                        <a href="agendamentoCliente.php" class="botao-agendar terceiro">Agendar</a>
                    </div>    
                </div>
            </div>
        </div> 
    </section>



    <!-- Fact 3 - Bootstrap Brain Component -->
<section class="bg-white py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
      <h2 class="titulo quar">Nossos Números</h2>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row gy-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6">
        <img class="img-fluid rounded" loading="lazy" src="images/logo.png" width="500px" alt="Our Success">
      </div>
      <div class="col-12 col-lg-6">
        <div class="row justify-content-xl-end">
          <div class="col-12 col-xl-11">
            <div class="row gy-4 gy-sm-0 overflow-hidden">
              <div class="col-12 col-sm-6">
                <div class="card border-0 border-bottom border-danger shadow-sm mb-4">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <h3 class="display-2 fw-bold mb-2">5+</h3>
                    <p class="fs-5 mb-0 text-secondary">Anos de Empresa</p>
                  </div>
                </div>
                <div class="card border-0 border-bottom border-danger shadow-sm">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <h3 class="display-2 fw-bold mb-2">3k+</h3>
                    <p class="fs-5 mb-0 text-secondary">Cabelos Cortados</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="card border-0 border-bottom border-danger shadow-sm mt-lg-6 mt-xxl-8 mb-4">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <h3 class="display-2 fw-bold mb-2">2</h3>
                    <p class="fs-5 mb-0 text-secondary">Unidades</p>
                  </div>
                </div>
                <div class="card border-0 border-bottom border-danger shadow-sm">
                  <div class="card-body text-center p-4 p-xxl-5">
                    <h3 class="display-2 fw-bold mb-2">5+</h3>
                    <p class="fs-5 mb-0 text-secondary">Funcionários</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Plugin VLibras -->
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
 





<footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="images/logobranca.png" alt="Neguinho Corts Logo">
                </div>
                <div class="footer-links">
                    <ul>
                        <li><a href="#servicos">Serviços</a></li>
                        <li><a href="#quemSomos">Quem Somos</a></li>
                        <li><a href="#unidades">Unidades</a></li>
                        <li><a href="#unidades">Nossos Números</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                
                    <a href="https://www.instagram.com/neguinho_corts01"  aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                  
                    <a href="https://wa.me/5511985220433?text=Ol%C3%A1%2C%20gostaria%20de%20fazer%20um%20agendamento!" aria-label="WhatsApp" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Neguinho Corts. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>








</body>
</html>