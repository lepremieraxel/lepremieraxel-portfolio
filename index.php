<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- META -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS -->
  <link rel="stylesheet" href="/src/css/style.css" />
  <link rel="stylesheet" href="/src/css/responsive.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
      <a href="/#home" data-aos="fade-left">@accueil</a>
      <a href="/#about" data-aos="fade-left">@a-propos</a>
      <a href="/#portfolio" data-aos="fade-left">@portfolio</a>
      <a href="/#contact" data-aos="fade-left">@contact</a>
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
    <a href="/" class="main-logo" data-aos="fade-right"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 131.7 99.95">
        <path d="M68.58,67.06l58.57-33.58c4.34-2.49,5.8-7.89,3.42-12.05-1.24-2.17-3.4-3.82-6.71-4.56L30.19,.16c-2.49-.44-4.81,.04-6.71,1.13-4.5,2.58-6.72,8.56-3.75,13.75l25.71,44.83s0,.04-.01,.05L4.48,83.4c-4.24,2.43-5.86,8.11-3.16,12.48,2.51,4.06,7.95,5.19,12.09,2.81l40.85-23.42,11.77,20.54c2.27,3.95,7.31,5.32,11.26,3.05h0c3.95-2.27,5.32-7.31,3.05-11.26l-11.77-20.54ZM40.92,18.88l57.97,10.31s0,.04,0,.08l-39.13,22.43s-8.89-15.46-18.85-32.82Z" />
      </svg></a>
    <div class="burger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </header>
  <div class="overlay"></div>
  <canvas class="webgl"></canvas>
  <div class="header-bg"></div>
  <main class="hero">
    <div class="main-title" data-aos="zoom-in">
      <h1>Axel Marcial</h1>
      <h2>développeur web</h2>
    </div>
    <a href="/#contact" class="cta" data-aos="zoom-in">contactez moi</a>
  </main>
  <section id="about">
    <h3 data-aos="fade-up">@a-propos</h3>
    <p data-aos="fade-up">Salut ! Je suis Axel, développeur web junior et étudiant en MMI à l'IUT de Tarbes. Je suis passionné par l'informatique et en ce moment plus particulièrement le web3. J'adore créer, que ça soit graphique ou juste fonctionnel. Grâce à MMI, je n'ai pas seulement un profil de développeur, je sais m'improviser graphiste quand j'en ai besoin ou même webdesigner, photographe ou vidéaste.</p>
    <span class="cta-line">
      <a href="" class="cta cta-secondary cta-small" data-aos="fade-up">mon&nbsp;cv</a>
      <a href="/#contact" id="hire-me-btn" class="cta cta-small" data-aos="fade-up">embauchez&nbsp;moi</a>
    </span>
  </section>
  <section id="portfolio">
    <h3 data-aos="fade-up">@portfolio</h3>
    <div class="galery">
      <?php printHome(); ?>
    </div>
  </section>
  <section id="contact">
    <h3 data-aos="fade-up">@contact</h3>
    <div class="section-line">
      <span class="social-links">
        <a href="https://www.instagram.com/lepremieraxel/" target="_blank" data-aos="fade-right"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://github.com/lepremieraxel" target="_blank" data-aos="fade-right"><i class="fa-brands fa-github"></i></a>
        <a href="mailto:hello@axelmarcial.com"><i class="fa-solid fa-at" data-aos="fade-right"></i></a>
      </span>
      <span>
        <p data-aos="fade-up">pour un message, une question ou une offre d'emploi, envoyez moi un message et j'y répondrais.</p>
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
            <fieldset data-aos="fade-left">
              <legend>&nbsp;nom&nbsp;</legend>
              <input type="text" name="name" id="name" placeholder="écrivez votre nom*" required>
            </fieldset>
            <fieldset data-aos="fade-left">
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
          <fieldset data-aos="fade-left">
            <legend>&nbsp;email&nbsp;</legend>
            <input type="email" name="email" id="email" placeholder="écrivez votre email*" required>
          </fieldset>
          <fieldset data-aos="fade-left">
            <legend>&nbsp;message&nbsp;</legend>
            <textarea name="message" id="message" placeholder="écrivez votre message*" required></textarea>
            <button type="submit">envoyer</button>
          </fieldset>
        </form>
      </span>
    </div>
  </section>
  <footer data-aos="fade-up">
    <p>&copy; lepremieraxel • axel marcial • 2023</p>
    <p>designé et développé par lepremieraxel</p>
  </footer>
  <!-- SCRIPT JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="/src/js/plus-social.js"></script>
  <script src="/src/js/burger.js"></script>
  <script src="/src/js/fixed-navbar.js"></script>
  <script src="/src/js/resize-textarea.js"></script>
  <script src="/src/js/scrollbar.js"></script>
  <script src="/src/js/hire-me-btn.js"></script>
  <script type="importmap">
    {
        "imports": {
          "three": "./src/js/three/build/three.module.js"
        }
      }
    </script>
  <script type="module" src="./src/js/logo3d.js"></script>
</body>

</html>