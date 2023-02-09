<!DOCTYPE html>
<html lang="en">

<head>
  <!-- META -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS -->
  <link rel="stylesheet" href="/src/css/style.css" />
  <link rel="stylesheet" href="/src/css/responsive.css" />
  <!-- ICONS -->
  <script src="https://kit.fontawesome.com/e0b8ba43a6.js" crossorigin="anonymous"></script>
  <!-- TITLE -->
  <title>accueil • lepremieraxel portfolio</title>
  <!-- FAVICON -->
  <link rel="shortcut icon" href="/assets/img/logo/logo.svg">
</head>

<body id="home">
  <?php include("src/php/print-data-home.php"); ?>
  <div class="scrollbar"></div>
  <header>
    <div class="plus-social">
      <span></span>
      <span></span>
    </div>
    <nav class="burger-container inactive">
      <a href="/#home">@accueil</a>
      <a href="/#about">@a-propos</a>
      <a href="/#portfolio">@portfolio</a>
      <a href="/#contact">@contact</a>
      <!-- <label class="toggle-control">
        <input type="checkbox">
        <span class="control"></span>
      </label> -->
    </nav>
    <div class="plus-social-container inactive">
      <a href=""><i class="fa-regular fa-circle-down"></i> téléchargez mon CV</a>
      <a href="/#contact"><i class="fa-regular fa-message"></i> contactez moi</a>
      <span class="plus-social-icons">
        <a href="https://www.instagram.com/lepremieraxel/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://github.com/lepremieraxel" target="_blank"><i class="fa-brands fa-github"></i></a>
        <a href="mailto:hello@axelmarcial.com"><i class="fa-solid fa-at"></i></a>
      </span>
    </div>
    <a href="/" class="main-logo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 131.7 99.95">
        <g>
          <path d="M68.58,67.06l58.57-33.58c4.34-2.49,5.8-7.89,3.42-12.05-1.24-2.17-3.4-3.82-6.71-4.56L30.19,.16c-2.49-.44-4.81,.04-6.71,1.13-4.5,2.58-6.72,8.56-3.75,13.75l25.71,44.83s0,.04-.01,.05L4.48,83.4c-4.24,2.43-5.86,8.11-3.16,12.48,2.51,4.06,7.95,5.19,12.09,2.81l40.85-23.42,11.77,20.54c2.27,3.95,7.31,5.32,11.26,3.05h0c3.95-2.27,5.32-7.31,3.05-11.26l-11.77-20.54ZM40.92,18.88l57.97,10.31s0,.04,0,.08l-39.13,22.43s-8.89-15.46-18.85-32.82Z" />
        </g>
      </svg></a>
    <div class="burger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </header>
  <div class="header-bg"></div>
  <main class="hero">
    <div class="main-title">
      <h1>lepremieraxel</h1>
      <h2>développeur web</h2>
    </div>
    <div class="logo-3d">
      <img src="/assets/img/logo/logo3d.png" alt="3D version of lepremieraxel's logo">
    </div>
    <a href="/#contact" class="cta">contactez moi</a>
  </main>
  <section id="about">
    <h3>@a-propos</h3>
    <p>Salut je suis Axel.</p>
    <span class="cta-line">
      <a href="" class="cta cta-secondary cta-small">mon&nbsp;cv</a>
      <a href="/#contact" id="hire-me-btn" class="cta cta-small">embauchez&nbsp;moi</a>
    </span>
  </section>
  <section id="portfolio">
    <h3>@portfolio</h3>
    <div class="galery">
      <?php printHome(); ?>
    </div>
  </section>
  <section id="contact">
    <h3>@contact</h3>
    <div class="section-line">
      <span class="social-links">
        <a href="https://www.instagram.com/lepremieraxel/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://github.com/lepremieraxel" target="_blank"><i class="fa-brands fa-github"></i></a>
        <a href="mailto:hello@axelmarcial.com"><i class="fa-solid fa-at"></i></a>
      </span>
      <span>
        <p>pour un message, une question ou une offre d'emploi, envoyez moi un message et j'y répondrais.</p>
        <form action="/src/php/send-mail.php" method="post">
          <?php
          if (isset($_GET['send'])) {
            $send = htmlspecialchars($_GET['send']);
            switch ($send) {
              case 'true':
          ?>
                <div class="form-alert form-success">
                  <p>envoyé avec succès</p>
                </div>
              <?php
                break;
              case 'false':
              ?>
                <div class="form-alert form-error">
                  <p>une erreur s'est produite. réessayez.</p>
                </div>
          <?php
                break;
            }
          }
          ?>
          <span>
            <fieldset>
              <legend>&nbsp;nom&nbsp;</legend>
              <input type="text" name="name" id="name" placeholder="écrivez votre nom*" required>
            </fieldset>
            <fieldset>
              <legend>&nbsp;raison&nbsp;</legend>
              <div class="custom-select">
                <select name="reason" id="reason" required>
                  <option value="">choisissez une raison</option>
                  <option value="message">message</option>
                  <option value="question">question</option>
                  <option id="hire-option" value="offre-emploi">offre d'emploi</option>
                  <option value="feedback">retour d'experience</option>
                  <option value="etudiant-stage">étudiant / stage</option>
                  <option value="projet">idée de projet intéréssant</option>
                </select>
              </div>
            </fieldset>
          </span>
          <fieldset>
            <legend>&nbsp;email&nbsp;</legend>
            <input type="email" name="email" id="email" placeholder="écrivez votre email*" required>
          </fieldset>
          <fieldset>
            <legend>&nbsp;message&nbsp;</legend>
            <textarea name="message" id="message" placeholder="écrivez votre message*" required></textarea>
            <button type="submit">envoyer</button>
          </fieldset>
        </form>
      </span>
    </div>
  </section>
  <footer>
    <p>&copy; lepremieraxel • axel marcial • 2023</p>
    <p>designé et développé par lepremieraxel</p>
  </footer>
  <!-- SCRIPT JS -->
  <script src="/src/js/plus-social.js"></script>
  <script src="/src/js/burger.js"></script>
  <script src="/src/js/fixed-navbar.js"></script>
  <script src="/src/js/resize-textarea.js"></script>
  <script src="/src/js/scrollbar.js"></script>
  <script src="/src/js/hire-me-btn.js"></script>
</body>

</html>