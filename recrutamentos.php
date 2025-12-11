<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CVLite - Recrutamentos</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/recrutamentosC.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
      <a href="#" class="logo">
        <img src="Midias/logo.png" alt="CVLite Logo">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="toggler-icon top-bar"></span>
        <span class="toggler-icon middle-bar"></span>
        <span class="toggler-icon bottom-bar"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav mx-auto center-nav">
              <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
              <li class="nav-item"><a class="nav-link" href="#recrutas">Recrutamentos</a></li>
              <li class="nav-item"><a class="nav-link" href="#contacto">Contactos</a></li>
          </ul>

          <div class="register">
              <a href="login.php" class="btn btn-outline-primary">Entrar</a>
              <a href="register.php" class="btn btn-lg btn-primary">Cadastrar</a>
          </div>
      </div>
  </div>
</nav>

<!-- HEADER -->
<section class="header-recrutas" id="recrutas">
  <div>
    <h1>Recrutamento de Empresas</h1>
    <p>Descubra oportunidades reais em empresas confiáveis e envie o seu CV criado no CVLite diretamente para a vaga.</p>
  </div>
</section>

<!-- VAGAS -->
<section class="recrutamentos" id="recrutamentos">
  <div class="container">
    <h2 class="titulo-secao">Recrutamentos em Destaque</h2>
    <p class="subtitulo">As melhores oportunidades das empresas mais reconhecidas.</p>

    <div class="recrut-cards">

      <!-- CARD 1 -->
      <div class="r-card">
        <img src="Midias/empresas/nestle.png" class="empresa-logo" alt="Nestlé">
        <h3>Nestlé Angola</h3>
        <p class="vaga-curta">Assistente Administrativo</p>

        <div class="infos-rapidas">
          <span>📅 Início: 02/01/2025</span>
          <span>⏳ Fim: 20/01/2025</span>
        </div>

        <button class="btn-vermais" onclick="abrirModal('nestle')">Ver mais</button>
      </div>

      <!-- CARD 2 -->
      <div class="r-card">
        <img src="Midias/empresas/unitel.png" class="empresa-logo" alt="Unitel">
        <h3>Unitel</h3>
        <p class="vaga-curta">Técnico de Informática</p>

        <div class="infos-rapidas">
          <span>📅 Início: 05/01/2025</span>
          <span>⏳ Fim: 25/01/2025</span>
        </div>

        <button class="btn-vermais" onclick="abrirModal('unitel')">Ver mais</button>
      </div>

      <!-- CARD 3 -->
      <div class="r-card">
        <img src="Midias/empresas/trasnport.png" class="empresa-logo" alt="TransCo">
        <h3>TransCo Transportes</h3>
        <p class="vaga-curta">Motorista Profissional</p>

        <div class="infos-rapidas">
          <span>📅 Início: 10/01/2025</span>
          <span>⏳ Fim: 28/01/2025</span>
        </div>

        <button class="btn-vermais" onclick="abrirModal('transco')">Ver mais</button>
      </div>

    </div>
  </div>
</section>


<!-- ========== MODAIS ========== -->

<!-- NESTLE -->
<div class="modal" id="nestle">
  <div class="modal-content">
    <span class="close" onclick="fecharModal('nestle')">&times;</span>
    <h2>Nestlé Angola – Assistente Administrativo</h2>

    <p><strong>📌 Descrição:</strong> A Nestlé está à procura de um Assistente Administrativo organizado, responsável e com boa comunicação para integrar a equipa.</p>

    <p><strong>📋 Requisitos:</strong></p>
    <ul>
      <li>12ª classe concluída ou superior</li>
      <li>Experiência em atendimento e gestão documental</li>
      <li>Conhecimentos de informática (Word, Excel)</li>
    </ul>

    <p><strong>📝 Documentos necessários:</strong></p>
    <ul>
      <li>Carta de candidatura</li>
      <li>Curriculum Vitae atualizado</li>
      <li>Cópia do BI</li>
    </ul>

    <p><strong>📅 Prazo:</strong> 02/01/2025 até 20/01/2025</p>
    <p><strong>📩 Envio:</strong> recrutamento@nestle.co.ao</p>

    <button class="btn-candidatar">Candidatar Agora</button>
  </div>
</div>

<!-- UNITEL -->
<div class="modal" id="unitel">
  <div class="modal-content">
    <span class="close" onclick="fecharModal('unitel')">&times;</span>
    <h2>Unitel – Técnico de Informática</h2>

    <p><strong>📌 Descrição:</strong> A Unitel procura técnicos com domínio em hardware e redes.</p>

    <p><strong>📋 Requisitos:</strong></p>
    <ul>
      <li>Formação em Tecnologias de Informação</li>
      <li>Experiência com manutenção de computadores</li>
      <li>Capacidade de resolver problemas rapidamente</li>
    </ul>

    <p><strong>📅 Prazo:</strong> 05/01/2025 até 25/01/2025</p>
    <p><strong>📩 Envio:</strong> carreiras@unitel.co.ao</p>

    <button class="btn-candidatar">Candidatar Agora</button>
  </div>
</div>

<!-- TRANSCO -->
<div class="modal" id="transco">
  <div class="modal-content">
    <span class="close" onclick="fecharModal('transco')">&times;</span>
    <h2>TransCo Transportes – Motorista Profissional</h2>

    <p><strong>📌 Descrição:</strong> Empresa de transporte procura Motorista com experiência.</p>

    <p><strong>📋 Requisitos:</strong></p>
    <ul>
      <li>Carta de condução válida</li>
      <li>Experiência mínima de 3 anos</li>
    </ul>

    <p><strong>📅 Prazo:</strong> 10/01/2025 até 28/01/2025</p>
    <p><strong>📩 Envio:</strong> vagas@transco.co.ao</p>

    <button class="btn-candidatar">Candidatar Agora</button>
  </div>
</div>


<!-- FOOTER -->
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

<script>
function abrirModal(id) {
  document.getElementById(id).style.display = "flex";
}

function fecharModal(id) {
  document.getElementById(id).style.display = "none";
}

window.onclick = function(event) {
  document.querySelectorAll(".modal").forEach(modal => {
    if (event.target === modal) {
      modal.style.display = "none";
    }
  });
}
</script>


</body>
</html>
