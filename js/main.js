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
      width: '100%',
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
      width: '0%',
    },
    {
      duration: 300,
      complete: function () {
        nav.removeClass('show-flex');
        $('body').removeClass('stop-scrolling');
      },
    }
  );
}
