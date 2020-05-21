<?php ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require('server/portfolio.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.min.css" />
  <!-- Primary Meta Tags -->
  <title>Portfolio | Jorge Martínez - Desarrollador Web </title>
  <meta name="title" content="Portfolio | Jorge Martínez - Desarrollador Web ">
  <meta name="description" content="Hola soy Jorge Martínez. Nací en 1999 y actualmente resido en Alcoy (Alicante).  Estudié el grado medio de Sistemas Microinformáticos y Redes y un grado superior de Desarrollo de Aplicaciones Web, realizando las correspondientes prácticas y a su vez elaborando un proyecto. ">
  <meta name="keywords" content="Jorge Martínez, programador web alcoy, programador web alicante, desarrollador web alcoy, desarrollador web alicante" />
  <meta name="author" content="Jorge Martínez" />
  <meta name="copyright" content="Jorge Martínez" />
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
  <!-- Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Portfolio | Jorge Martínez - Desarrollador Web ">
  <meta property="og:description" content="Hola soy Jorge Martínez. Nací en 1999 y actualmente resido en Alcoy (Alicante).  Estudié el grado medio de Sistemas Microinformáticos y Redes y un grado superior de Desarrollo de Aplicaciones Web, realizando las correspondientes prácticas y a su vez elaborando un proyecto. ">
  <meta property="og:image" content="assets/img/portfolio/bg-1.jpg">

  <!-- Twitter -->
  <meta property="twitter:title" content="Portfolio | Jorge Martínez - Desarrollador Web ">
  <meta property="twitter:description" content="Hola soy Jorge Martínez. Nací en 1999 y actualmente resido en Alcoy (Alicante).  Estudié el grado medio de Sistemas Microinformáticos y Redes y un grado superior de Desarrollo de Aplicaciones Web, realizando las correspondientes prácticas y a su vez elaborando un proyecto. ">
  <meta property="twitter:image" content="assets/img/portfolio/bg-1.jpg">
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
          <a href="#contact" class="nav__link">Contrátame</a>
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
        <p class="paragraph u-margin-bottom-medium">
          Hola soy <strong>Jorge Martínez</strong>. <strong>Programador web</strong>. Nací el 30 de diciembre de 1999 y actualmente resido en Alcoy (Alicante).
          <strong>Estudié</strong> el grado medio de <strong>Sistemas Microinformáticos y Redes</strong> y un grado superior de <strong>Desarrollo de Aplicaciones Web</strong>,
          realizando las correspondientes prácticas y a su vez elaborando un proyecto.
        </p>
        <p class="paragraph u-margin-bottom-medium">
          Me encanta <strong>programar</strong> y las <strong>nuevas tecnologías</strong>. Estoy constantemente intentando <strong>mejorar en este ámbito</strong>, buscando superarme día a día. Mi <strong>objetivo</strong> es siempre alcanzar la <strong>mayor calidad posible</strong> en todo lo que realizo, dando el máximo en cada proyecto.
        </p>
        <p class="paragraph">
          Actualmente, estoy aprovechando plataformas como <strong>Youtube</strong> o <strong>Udemy</strong>, para <strong>aprender</strong> distintos lenguajes de programación o frameworks de forma <strong>autodidacta</strong>, de cara a buscar un <strong>puesto de trabajo</strong>. También hago de vez en cuando diversos <strong>trabajos</strong> y/o proyectos para algunos <strong>clientes</strong>.
        </p>
      </div>
    </div>
    <div class="skills">
      <div class="content">
        <h2 class="skills__heading heading-secondary u-margin-bottom-small u-text-center">Habilidades</h2>
        <p class="paragraph u-margin-bottom-medium">
          A continuación, voy a exponer algunos de los <strong>lenguajes</strong>, <strong>frameworks</strong> y/o <strong>herramientas</strong> que he estudiado y con los que he realizado algunos de mis proyectos.
        </p>
        <p class="paragraph">
          Respecto a este tema de los <strong>frameworks</strong>, que están saliendo constantemente, soy partidario de tener una idea general sobre varios de ellos, sin profundizar demasiado en uno solo. Mi idea es buscar que me sea fácil el <strong>poder “saltar” de uno a otro</strong>. Opino que son herramientas y hay que tener varias en tu <strong>“toolbox”</strong> y saber elegir cuál es la mejor en cada caso. Busco <strong>ser versátil</strong> en este aspecto.
        </p>
      </div>
      <div class="skills__container">
        <article class="skills__box">
          <img class="skills__icon" src="assets/img/icons/frontend-icon.svg" alt="Habilidades Frontend" />
          <h3 class="heading-tertiary u-text-center u-margin-top-small skills__title">Frontend</h3>
          <ul class="skills__list">
            <li class="skills__item">React/Redux </li>
            <li class="skills__item">Angular/Ionic</li>
            <li class="skills__item">Javascript/Typescript</li>
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
        Aquí es donde expondré los <strong>proyectos</strong> que vaya realizando. Junto al nombre del proyecto adjunto una pequeña descripción sobre el mismo, y links, ya sea al repositorio de <strong>GitHub</strong> donde poder ver el <strong>código</strong>, a <strong>Youtube</strong> para ver una <strong>vídeo demostración</strong> del mismo, o un enlace a su correspondiente <strong>página web</strong> si este está online.
      </p>

      <p class="paragraph u-margin-bottom-small">
        Hay que tener en cuenta que muchos de estos no están en producción y otros ni siquiera tienen una demo online, por lo que puede ser que falte refactorizar código, tenga bugs, no sea responsive, etc..
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
      <h2 class="heading-secondary u-margin-bottom-small u-text-center">Contrátame</h2>
      <p class="paragraph u-margin-bottom-medium">
        No dudes en ponerte en contacto conmigo si estás pensando en contratarme. Adjunto mi correo electrónico y teléfono a continuación.
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
  <script src="js/main.min.js"></script>
</body>

</html>