<?php require('server/portfolio.php') ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/vendor/fullpage.min.css" />
  <title>Web Personal | Jorge Martínez</title>
</head>

<body>
  <header>
    <div class="menu-icon" id="menu-icon">
      <img src="assets/img/icons/burger-icon.svg" alt="Icono Menú" />
    </div>
    <nav class="nav">
      <h2 class="heading-secondary">Menú Principal</h2>
      <img class="nav__close" id="cross-icon" src="assets/img/icons/cross-icon.svg" alt="Icono cerrar menú" />
      <ul class="nav__links">
        <li class="nav__item">
          <a href="#header" class="nav__link">Inicio</a>
        </li>
        <li class="nav__item">
          <a href="#about" class="nav__link">Sobre mi</a>
        </li>
        <li class="nav__item">
          <a href="#portfolio" class="nav__link">Portfolio</a>
        </li>
        <li class="nav__item">
          <a href="#contact" class="nav__link">Contacto</a>
        </li>
      </ul>
    </nav>
  </header>

  <section class="header" id="header">
    <video class="video-bg" id="video" poster="assets/img/portfolio/bg-1.jpg" autoplay muted loop>
      <source src="assets/video/bgvideo-1.mp4" type="video/mp4" />
      <img src="assets/img/bg-1.jpg" alt="Your browser does not support the <video> tag" title="Your browser does not support the <video> tag" />
    </video>

    <div class="header__box">
      <h1 class="heading-primary heading-primary--text-white">Jorge Martínez</h1>
      <h2 class="heading-secondary typewriter anim-typewriter u-margin-top-small">Desarrollador web</h2>
      <div class="header__logos">
        <a target="_blank" class="header__social-link" href="https://github.com/jorgemartiinez"><img class="header__social-img" src="assets/img/logos/social-links.png" alt="Github logo, ver mi perfil" title="Ver mi perfil en GitHub" /></a>
        <a target="_blank" class="header__social-link" href="https://linkedin.com/in/jorge-martínez-b8873b1a4"><img class="header__social-img" src="assets/img/logos/linkedin.svg" alt="Linkeding logo, ver mi perfil" title="Ver mi perfil en Linkedin" /></a>
      </div>
      <div class="header__next-box">
        <a href="#about">
          <img class="icono-ver-mas" src="assets/img/icons/go-down.svg" alt="Icono ver más" /></a>
      </div>
    </div>
  </section>

  <section class="about" id="about">
    <div class="about-me">
      <div class="content">
        <h2 class="heading-secondary u-margin-bottom-small u-text-center">Sobre mi</h2>
        <p class="paragraph">
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
          sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
          ipsum dolor Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
          aliquyam erat
        </p>
      </div>
    </div>
    <div class="skills">
      <div class="content">
        <h2 class="skills__heading heading-secondary u-margin-bottom-small u-text-center">Habilidades</h2>
        <p class="paragraph">
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat
        </p>
      </div>
      <div class="skills__container">
        <article class="skills__box">
          <img class="skills__icon" src="assets/img/icons/frontend-icon.svg" alt="Habilidades Frontend" />
          <h3 class="heading-tertiary u-text-center u-margin-top-small skills__title">Frontend</h3>
          <ul class="skills__list">
            <li class="skills__item">React/Redux </li>
            <li class="skills__item">Angular/Ionic</li>
            <li class="skills__item">Javascript/Typescript/JQuery</li>
            <li class="skills__item">HTML/CSS/SASS</li>
          </ul>
        </article>
        <article class="skills__box">
          <img class="skills__icon" src="assets/img/icons/backend-icon.svg" alt="Habilidades Backend" />
          <h3 class="heading-tertiary u-text-center u-margin-top-small skills__title">Backend</h3>
          <ul class="skills__list">
            <li class="skills__item">PHP/Laravel</li>
            <li class="skills__item">NodeJS/Express</li>
            <li class="skills__item">MySQL/MongoDB</li>
            <li class="skills__item">Wordpress</li>
          </ul>
        </article>
        <article class="skills__box">
          <img class="skills__icon" src="assets/img/icons/others-icon.svg" alt="Habilidades Otros" />
          <h3 class="heading-tertiary u-text-center u-margin-top-small skills__title">Otros</h3>
          <ul class="skills__list">
            <li class="skills__item">Git</li>
            <li class="skills__item">Jest</li>
            <li class="skills__item">Adobe XD</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <section class="portfolio" id="portfolio">
    <div class="content">
      <h2 class="heading-secondary u-margin-bottom-small u-text-center">Portfolio</h2>
      <p class="paragraph u-margin-bottom-medium">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
        diam voluptua.
      </p>

      <p class="paragraph u-margin-bottom-small">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem quia pariatur vitae tenetur fugiat perspiciatis!
      </p>

      <div class="u-text-center u-margin-top-medium">
        <button class="btn btn--portfolio btn--active u-margin-bottom-small" data-button="Todos">Todos</button>
        <button class="btn btn--portfolio u-margin-bottom-small" data-button="Javascript">Javascript</button>
        <button class="btn btn--portfolio u-margin-bottom-small" data-button="PHP">PHP</button>
        <button class="btn btn--portfolio u-margin-bottom-small" data-button="Laravel">Laravel</button>
        <button class="btn btn--portfolio u-margin-bottom-small" data-button="CSS">CSS/SASS</button>
        <button class="btn btn--portfolio u-margin-bottom-small" data-button="Wordpress">Wordpress</button>
        <button class="btn btn--portfolio u-margin-bottom-small" data-button="React">React</button>
        <button class="btn btn--portfolio u-margin-bottom-small" data-button="Angular">Angular</button>
      </div>
    </div>
    <div class="portfolio__cards u-margin-top-small">
      <?php foreach ($trabajos as $trabajo) { ?>
        <article class="portfolio__card">
          <img class="portfolio__img" alt="<?= $trabajo['nombre'] ?> imagen" src="assets/img/portfolio/<?= $trabajo['imagen'] ?>" />
          <div class="portfolio__text">
            <h4 class="heading-quaternary"><?= $trabajo['nombre'] ?></h4>
            <p class="paragraph-small">
              <?= $trabajo['texto'] ?>
            </p>
          </div>
          <div class="portfolio__more">
            <div class="portfolio__links">
              <?php if ($trabajo['links'][0] !== null) { ?>
                <a target="_blank" href="<?= $trabajo['links'][0] ?>" class="portfolio__link"><img class="portfolio__link-img" src="assets/img/icons/github-alt.svg" title="Acceder a GitHub <?= $trabajo['nombre'] ?>" alt="Acceder a github <?= $trabajo['nombre'] ?>" /></a>
              <?php } ?>
              <?php if ($trabajo['links'][1] !== null) { ?>
                <a target="_blank" href="<?= $trabajo['links'][1] ?>" class="portfolio__link"><img class="portfolio__link-img" src="assets/img/icons/chrome.svg" alt="Acceder a <?= $trabajo['nombre'] ?>" title="Acceder a <?= $trabajo['nombre'] ?>" /></a>
              <?php } ?>
              <?php if ($trabajo['links'][2] !== null) { ?>
                <a target="_blank" href="<?= $trabajo['links'][2] ?>" class="portfolio__link"><img class="portfolio__link-img" src="assets/img/icons/yt-alt.svg" alt="Acceder a <?= $trabajo['nombre'] ?>" title="Acceder a <?= $trabajo['nombre'] ?>" /></a>
              <?php } ?>
            </div>
            <p class="portfolio__tags"><?php foreach ($trabajo['categorias'] as $categoria) {
                                          echo $categoria . " ";
                                        } ?></p>
          </div>
        </article>
      <?php } ?>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="content">
      <h2 class="heading-secondary u-margin-bottom-small u-text-center">Contacto</h2>
      <p class="paragraph u-margin-bottom-medium">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
        diam voluptua.
      </p>


      <article class="contact__info">
        <div class="contact__call">
          <a href="" id="email-link"><img class="contact__icon" src="assets/img/icons/envelope-icon.svg" alt="Teléfono Contacto"></a>
          <span class="contact__link" id="email-span" href="#"></span>
        </div>
        <div class="contact__email">
          <a href="#" id="tel-link"> <img class="contact__icon" src="assets/img/icons/phone-icon.svg" alt="Email Contacto"></a>
          <span class="contact__link" href="#" id="tel-span"></span>
        </div>
      </article>

    </div>
  </section>

  <noscript>Necesitas tener Javascript activado para visualizar esta web.</noscript>
  <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>