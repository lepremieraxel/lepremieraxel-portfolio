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
  <?php include("../php/print-data-page.php"); ?>
  <title><?php pageTitle(); ?> • lepremieraxel portfolio</title>
  <!-- FAVICON -->
  <link rel="shortcut icon" href="/assets/img/logo/logo.svg">
</head>

<body id="home">
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
    </nav>
    <div class="plus-social-container inactive">
      <a href=""><i class="fa-regular fa-circle-down"></i> téléchargez mon cv</a>
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
  <section id="page">
    <?php printPage(); ?>
  </section>
  <footer>
    <p>&copy; lepremieraxel • axel marcial • 2023</p>
    <p>designé et développé par lepremieraxel</p>
  </footer>
  <!-- SCRIPT JS -->
  <script src="/src/js/plus-social.js"></script>
  <script src="/src/js/burger.js"></script>
  <script src="/src/js/fixed-navbar.js"></script>
  <script src="/src/js/scrollbar.js"></script>
</body>

</html>