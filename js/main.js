// var myFullpage = new fullpage('#fullpage');

// * animar scroll en los links que empiezen con #
$(document).on('click', 'a[href^="#"]', function (e) {
  // target element id
  var id = $(this).attr('href');

  // target element
  var $id = $(id);
  if ($id.length === 0) {
    return;
  }
  // prevent standard hash navigation (avoid blinking in IE)
  e.preventDefault();

  if (menuOpen) {
    closeMenu();
  }

  // top position relative to the document
  var pos = $id.offset().top; /*- 20*/

  // animated top scrolling
  $('body, html').animate({ scrollTop: pos }, 800);
});
// * -----------------

$(document).ready(function () {
  // * LAZY LOAD PLUGIN
  $('img.lazy').Lazy();

  var botones = $('button[data-button]');

  botones.each(function (boton) {
    var btn = $(this);
    var atributo = btn.attr('data-button').replace(/ /g, '').toLowerCase();
    btn.on('click', function () {
      filtrarPortfolio(btn, atributo);
    });
  });

  menuIcon.click(openMenu);
  crossIcon.click(closeMenu);

  // * email para evitar bots
  var emailSpan = $('#email-span');
  var emailLink = $('#email-link');
  var nombre = 'jorgemartiinez19';
  var arroba = '@';
  var dominio = 'gmail.com';
  emailSpan.text(nombre + arroba + dominio);
  emailLink.attr('href', 'mailto:' + nombre + arroba + dominio);
  // * telefono para evitar bots
  var telSpan = $('#tel-span');
  var telLink = $('#tel-link');

  telSpan.text('6' + '0' + '5' + '5' + '1' + '5' + '4' + '6' + '7');
  telLink.attr('href', 'tel:' + '6' + '0' + '5' + '5' + '1' + '5' + '4' + '6' + '7');
});

var tipoActivo = 'Todos';

function filtrarPortfolio(btn, tipo) {
  if (tipo == tipoActivo) {
    return;
  }

  tipoActivo = tipo;
  var portfolios = $('.portfolio__card');
  $('.btn--portfolio').removeClass('btn--active');
  btn.addClass('btn--active');

  if (tipo == 'todos') {
    portfolios.each(function () {
      var portfolio = $(this);
      portfolio.css('display', 'flex');
      portfolio.animate(
        {
          opacity: '1'
        },
        {
          duration: 200,
          complete: function () {
            portfolio.css('display', 'flex');
          }
        }
      );
    });
  } else {
    portfolios.each(function () {
      var portfolio = $(this);
      var tags = portfolio.find('.portfolio__tags').text().replace(/ /g, '').toLowerCase();
      if (tags.indexOf(tipo) > -1) {
        portfolio.animate(
          {
            opacity: '1'
          },
          {
            duration: 200,
            complete: function () {
              portfolio.css('display', 'flex');
            }
          }
        );
      } else {
        portfolio.animate(
          {
            opacity: '0'
          },
          {
            duration: 400,
            complete: function () {
              portfolio.css('display', 'none');
            }
          }
        );
      }
    });
  }
}

var menuIcon = $('#menu-icon');
var crossIcon = $('#cross-icon');
var nav = $('.nav');
var menuOpen = false;
// * ABRIR MENÚ
function openMenu() {
  nav.addClass('show-flex');
  nav.animate(
    {
      width: '100%',
      opacity: '1'
    },
    {
      duration: 400,
      complete: function () {
        menuOpen = true;
        $('body').addClass('stop-scrolling');
      }
    }
  );
}
// * -----------------

// * CERRAR MENÚ
function closeMenu() {
  nav.animate(
    {
      width: '0',
      opacity: '0'
    },
    {
      duration: 350,
      complete: function () {
        menuOpen = false;
        nav.removeClass('show-flex');
        $('body').removeClass('stop-scrolling');
      }
    }
  );
}
// * -----------------
