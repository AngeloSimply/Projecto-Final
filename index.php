<?php
session_start();

// Se o usuário já estiver logado, vai direto para o painel
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - CVLite</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="css/indexC.css">
  <link rel="shortcut icon" href="Midias/Logo/Logo-CVLiteUPDATE.png" type="image/x-icon">

</head>

<body>

<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid position-relative">
      <a class="navbar-brand logo" href="#">
        <img src="Midias/Logo/Logo-CVLiteUPDATE.png" alt="Logo CVLite">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon top-bar"></span>
        <span class="toggler-icon middle-bar"></span>
        <span class="toggler-icon bottom-bar"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav center-nav mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#">Ínicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#Perguntas">FAQ</a></li>
          <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="#recrutamentos">Recrutamentos</a></li>
          <li class="nav-item"><a class="nav-link" href="#contato">Contactos</a></li>
        </ul>

        <ul class="navbar-nav ms-auto register mb-2 mb-lg-0 flex-row align-items-center">
          <li class="nav-item me-2">
            <a href="login.php">
              <button class="btn btn-outline-primary">
                <i class="bi bi-person-circle"></i> Entrar
              </button>
            </a>
          </li>
          <li class="nav-item">
            <a href="register.php">
              <button class="btn btn-primary">
                <i class="bi bi-box-arrow-in-right"></i> Cadastrar
              </button>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- Seção do Slider -->
<section class="slider" id="slider">
  <div class="slide-content">
    <!-- Texto do Slider -->
    <div class="slider-text">
      <h1>Bem-vindo à <span>CVLite</span></h1>
      <p>
        Crie currículos profissionais, 99% grátis, e tenha acesso a Recrutamentos e oportunidades de trabalho em um único lugar.
      </p>

      <div class="slider-buttons">
        <a href="login.php" class="btn btn-primary">Criar CV</a>
        <a href="#sobre" class="btn btn-outline">Saber Mais</a>
      </div>
    </div>

    <!-- Imagem do Slider -->
    <div class="slider-img">
      <img src="Midias/slides/fundo-slider.png" alt="CVLite Preview">
    </div>
  </div>
</section>

<!-- Seção Perguntas -->
<section class="Perguntas" id="Perguntas">
  <div class="container">
    <h2>Por que escolher a <span>CVLite</span>?</h2>
    <p>
      A <strong>CVLite</strong> é uma plataforma simples, moderna e personalizada para criar currículos modernos e profissionais, 99% grátis, em poucos minutos. Além disso, oferece uma área de Recrutamentos, conectando candidatos a oportunidades reais para que você dê o próximo passo na sua carreira com estilo e resultados.
    </p>
  </div>
</section>

<!-- Seção Sobre -->
<section class="sobre" id="sobre">
  <div class="container">
    <h2>Sobre a <span>CVLite</span></h2>
    <p>
      A <strong>CVLite</strong> nasceu com o objetivo de simplificar a criação de currículos modernos, profissionais e totalmente compatíveis com sistemas de recrutamento (ATS). Desde o início, focámo-nos em eliminar as dificuldades enfrentadas por candidatos ao apresentar suas competências de forma clara, estruturada e atrativa para o mercado de trabalho.
      Com a evolução da plataforma, a CVLite passou a ir além da criação de currículos, integrando também uma área de recrutamentos, onde empresas e candidatos se conectam de forma mais direta e eficiente. Essa funcionalidade foi criada para aproximar talentos de oportunidades reais, facilitando o acesso a vagas publicadas por empresas reconhecidas em diferentes setores.
    </p>

    <p>
      Nossa missão é ajudar candidatos a se destacarem em processos seletivos, oferecendo modelos sofisticados, fáceis de usar e alinhados aos padrões exigidos por recrutadores, ao mesmo tempo em que promovemos visibilidade e acesso a oportunidades profissionais.
    </p>

    <p>
      Acreditamos que cada pessoa merece uma chance justa de mostrar suas habilidades. Por isso, criamos uma plataforma acessível, rápida e eficiente, que coloca você no centro da sua carreira — desde a criação do currículo até o acesso às oportunidades de emprego.
    </p>
  </div>
</section>

<!--Section Recrutamentos-->

<section class="recrutamentos-destaque" id="recrutamentos">
  <div class="container">
    <h2>Recrutamentos em<span> Destaque</span></h2>
    <p class="descricao">
      Oportunidades divulgadas por empresas reconhecidas para impulsionar a sua carreira.
    </p>

    <div class="carousel" id="carousel">
      <div class="carousel-track">

        <!-- EMPRESA 1 -->
        <div class="recrutamento-card">
          <img src="Midias/empresas/nestle.png" alt="Nestlé">
          <h3>Assistente Administrativo</h3>
          <p class="empresa">Nestlé Angola</p>
          <p class="prazo"><i class="bi bi-calendar-event"></i> 02/01/2025 – 20/01/2025</p>

          <button class="btn-ver" onclick="toggleDetalhes(0)">Ver mais</button>

          <div class="detalhes" id="detalhes-0">
            <p><strong>Requisitos:</strong></p>
            <ul>
              <li>Ensino médio completo</li>
              <li>Conhecimentos de informática</li>
              <li>Boa comunicação</li>
            </ul>

            <p><strong>Enviar CV:</strong></p>
            <p>
              <i class="bi bi-envelope"></i> recrutamento@nestle.com <br>
              <i class="bi bi-whatsapp"></i> +244 923 000 111 <br>
              <i class="bi bi-globe"></i> www.nestle.com/carreiras
            </p>
          </div>
        </div>

        <!-- EMPRESA 2 -->
        <div class="recrutamento-card">
          <img src="Midias/empresas/unitel.png" alt="Unitel">
          <h3>Técnico de Informática</h3>
          <p class="empresa">Unitel</p>
          <p class="prazo"><i class="bi bi-calendar-event"></i> 05/01/2025 – 25/01/2025</p>

          <button class="btn-ver" onclick="toggleDetalhes(1)">Ver mais</button>

          <div class="detalhes" id="detalhes-1">
            <ul>
              <li>Curso técnico em informática</li>
              <li>Experiência mínima de 1 ano</li>
            </ul>

            <p>
              <i class="bi bi-envelope"></i> rh@unitel.ao <br>
              <i class="bi bi-whatsapp"></i> +244 934 111 222 <br>
              <i class="bi bi-globe"></i> www.unitel.ao/recrutamento
            </p>
          </div>
        </div>

        <!-- EMPRESA 3 -->
        <div class="recrutamento-card">
          <img src="Midias/empresas/transco.png" alt="Transco">
          <h3>Motorista Profissional</h3>
          <p class="empresa">Transco</p>
          <p class="prazo"><i class="bi bi-calendar-event"></i> 10/01/2025 – 28/01/2025</p>

          <button class="btn-ver" onclick="toggleDetalhes(2)">Ver mais</button>

          <div class="detalhes" id="detalhes-2">
            <ul>
              <li>Carta de condução válida</li>
              <li>Experiência comprovada</li>
            </ul>

            <p>
              <i class="bi bi-envelope"></i> vagas@transco.ao <br>
              <i class="bi bi-whatsapp"></i> +244 922 333 444
            </p>
          </div>
        </div>

      </div>

      <!-- INDICADORES -->
      <div class="carousel-dots">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </div>
  </div>
</section>





<!-- Seção Benefícios -->
<section class="beneficios" id="beneficios">
  <div class="container grid-3">
    
    <div class="card">
      <i class="bi bi-briefcase"></i>
      <h3>Empregabilidade</h3>
      <p>Destaque suas experiências profissionais e competências de forma clara, objectiva e atrativa para o mercado de trabalho.</p>
    </div>

    <div class="card">
      <i class="bi bi-share"></i>
      <h3>Compartilhável</h3>
      <p>Compartilhe facilmente seu currículo digital por links, baixando em PDF, JPEG e ampliando sua visibilidade profissional nas.</p>
    </div>

    <div class="card">
      <i class="bi bi-file-earmark-richtext"></i>
      <h3>Modelos Modernos e Profissionais</h3>
      <p>Escolha entre diversos modelos sofisticados, criados para transmitir profissionalismo e impacto visual.</p>
    </div>

  </div>
</section>

<!-- Seção ATS -->
<section class="ats" id="ats">
  <div class="container">
    <div class="ats-content">
      <div class="ats-text">
        <h2>Compatível com ATS</h2>
        <p>
          Muitos currículos são rejeitados antes mesmo de chegarem a um recrutador, 
          porque os sistemas ATS (Applicant Tracking System) não conseguem ler corretamente 
          documentos mal formatados.  
        </p>
        <p>
          Com a <strong>CVLite</strong>, você garante um currículo 100% otimizado e 
          compatível com ATS, aumentando suas chances de ser notado e chamado para entrevistas.
        </p>
        <ul>
          <li><i class="bi bi-check-circle"></i> Estrutura legível por sistemas de recrutamento</li>
          <li><i class="bi bi-check-circle"></i> Palavras-chave bem organizadas</li>
          <li><i class="bi bi-check-circle"></i> PDF otimizado para envio</li>
        </ul>

        <!-- Botão Criar CV -->
        <a href="login.html" class="btn-ats">Criar CV</a>
      </div>
      <div class="ats-image">
        <i class="bi bi-robot"></i>
      </div>
    </div>
  </div>
</section>

<!-- Seção Como Funciona -->
<section class="como-funciona" id="como-funciona">
  <div class="container">
    <h2>Como Funciona</h2>
    <p class="descricao">Em apenas 3 passos simples você cria seu currículo profissional na CVLite.</p>

    <div class="cards">
      <!-- Card 1 -->
      <div class="card">
        <i class="bi bi-pencil-square"></i>
        <h3>Preencha</h3>
        <p>Insira suas informações pessoais, experiências e habilidades de forma simples e rápida.</p>
      </div>

      <!-- Card 2 -->
      <div class="card">
        <i class="bi bi-eye"></i>
        <h3>Visualize</h3>
        <p>Acompanhe em tempo real como seu currículo está ficando em um layout moderno.</p>
      </div>

      <!-- Card 3 -->
      <div class="card">
        <i class="bi bi-download"></i>
        <h3>Baixe</h3>
        <p>Finalize e baixe seu currículo em PDF pronto para usar em minutos.</p>
      </div>
    </div>
  </div>
</section>

<!-- Seção Vídeo Explicativo -->
<section class="video-explicativo" id="video-explicativo">
  <div class="container">
    <h2>Veja na Prática</h2>
    <p class="descricao">Assista ao vídeo e descubra como é simples criar seu currículo profissional na CVLite.</p>
    
    <div class="video-container">
      <iframe width="100%" height="500" src="https://www.youtube.com/embed/SEU_VIDEO_ID" 
        title="Como funciona a CVLite" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
      </iframe>
    </div>
  </div>
</section>

<section class="contato" id="contato">
  <div class="container">
    <h2>Entre em Contato</h2>
    <p class="descricao">Tem dúvidas ou sugestões? Fale com a equipe da CVLite preenchendo o formulário abaixo.</p>

    <div class="contato-grid">
      <!-- Informações -->
      <div class="contato-info">
        <h3>Informações</h3>
        <p><i class="bi bi-envelope"></i> suporte@cvlite.com</p>
        <p><i class="bi bi-telephone"></i> +244 954 895 672</p>
        <p><i class="bi bi-geo-alt"></i> Luanda, Angola</p>
      </div>

      <!-- Formulário -->
      <form class="contato-form">
        <div class="form-group">
          <input type="text" placeholder="Seu Nome" required>
        </div>
        <div class="form-group">
          <input type="email" placeholder="Seu Email" required>
        </div>
        <div class="form-group">
          <textarea placeholder="Sua Mensagem" rows="5" required></textarea>
        </div>

        <button class="btn btn-outline-primary color" type="submit <i class="bi bi-person-circle"></i> Enviar Mensagem</button>
      </form>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="footer-content">
      
      <!-- Marca -->
      <div class="footer-brand">
        <h2>CV<span>Lite</span></h2>
        <p>A <strong>CVLite</strong> é a sua plataforma simples, moderna <br> e  profissional para criar currículos em minutos.</p>
      </div>

      <!-- Links rápidos -->
      <div class="footer-LINKS">
        <ul class="footer-links">
          <li><a href="#sobre">Sobre</a></li>
          <li><a href="#como-funciona">Como Funciona</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#contato">Contactos</a></li>
        </ul>
      </div>

      <!-- Redes sociais -->
      <div class="footer-social">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-whatsapp"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-twitter-x"></i></a>
      </div>
    </div>


    <!-- Parte inferior -->
    <div class="footer-bottom">
      <p>&copy; 2025 CVLite - Todos os direitos reservados.</p>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

<script>
    let index = 0;
    const track = document.querySelector('.carousel-track');
    const dots = document.querySelectorAll('.dot');
    let interval;

    function showSlide(i) {
      index = i;
      track.style.transform = `translateX(-${i * 50}%)`;
      dots.forEach(d => d.classList.remove('active'));
      dots[i].classList.add('active');
    }

    function startCarousel() {
      interval = setInterval(() => {
        index = (index + 1) % dots.length;
        showSlide(index);
      }, 4000);
    }

    function stopCarousel() {
      clearInterval(interval);
    }

    document.getElementById('carousel').addEventListener('mouseenter', stopCarousel);
    document.getElementById('carousel').addEventListener('mouseleave', startCarousel);

    dots.forEach((dot, i) => {
      dot.addEventListener('click', () => showSlide(i));
    });

    function toggleDetalhes(id) {
      const el = document.getElementById(`detalhes-${id}`);
      el.style.display = el.style.display === 'block' ? 'none' : 'block';
    }

    startCarousel();
</script>


</body>
</html>



