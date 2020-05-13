var menuIcon = $('#menu-icon');
var crossIcon = $('#cross-icon');
var nav = $('.nav');
var myFullpage = new fullpage('#fullpage');

$(document).ready(function () {
  menuIcon.click(openMenu);
  crossIcon.click(closeMenu);
});

function openMenu() {
  nav.addClass('show-flex');
  nav.animate(
    {
      height: '100vh',
      width: '100%',
      opacity: '1'
    },
    {
      duration: 400,
      complete: function () {
        $('body').addClass('stop-scrolling');
      },
    }
  );
}

function closeMenu() {
  nav.animate(
    {
      width: '0',
      height: '0',
      opacity: '0'
    },
    {
      duration: 350,
      complete: function () {
        nav.removeClass('show-flex');
        $('body').removeClass('stop-scrolling');
      },
    }
  );
}
