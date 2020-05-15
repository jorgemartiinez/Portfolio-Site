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
});

var tipoActivo = 'Todos';

function filtrarPortfolio(btn, tipo) {
  if (tipo == tipoActivo) {
    console.log('tiene el mismo tipo, no hagamos nada');
    return;
  }

  tipoActivo = tipo;
  var portfolios = $('.portfolio__card');
  $('.btn--portfolio').removeClass('btn--active');
  btn.addClass('btn--active');

  if (tipo == 'todos') {
    portfolios.each(function () {
      var portfolio = $(this);
      portfolio.css('display', 'block');
      portfolio.animate(
        {
          opacity: '1',
        },
        {
          duration: 200,
          complete: function () {
            portfolio.css('display', 'block');
          },
        }
      );
    });
  } else {
    portfolios.each(function () {
      var portfolio = $(this);
      var tags = portfolio.find('.portfolio__tags').text().replace(/ /g, '').toLowerCase();
      console.log(tags);
      if (tags.includes(tipo)) {
        console.log('esta es de ese tipo');
        portfolio.animate(
          {
            opacity: '1',
          },
          {
            duration: 200,
            complete: function () {
              portfolio.css('display', 'block');
            },
          }
        );
      } else {
        console.log('no es de ese tipo');
        portfolio.animate(
          {
            opacity: '0',
          },
          {
            duration: 400,
            complete: function () {
              portfolio.css('display', 'none');
            },
          }
        );
      }
    });
  }
  console.log('Filtrar', tipo);
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
      opacity: '1',
    },
    {
      duration: 400,
      complete: function () {
        menuOpen = true;
        $('body').addClass('stop-scrolling');
      },
    }
  );
}
// * -----------------

// * CERRAR MENÚ
function closeMenu() {
  nav.animate(
    {
      width: '0',
      opacity: '0',
    },
    {
      duration: 350,
      complete: function () {
        menuOpen = false;
        nav.removeClass('show-flex');
        $('body').removeClass('stop-scrolling');
      },
    }
  );
}
// * -----------------
