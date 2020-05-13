var menuIcon = $('#menu-icon');
var crossIcon = $('#cross-icon');
var nav = $('.nav');
var myFullpage = new fullpage('#fullpage');

$(document).ready(function () {
  menuIcon.click(openMenu);
  crossIcon.click(closeMenu);
});

function openMenu() {
    nav.css('display', 'flex');
}

function closeMenu() {
  console.log('hola 2');
  nav.css('display', 'none');

}
