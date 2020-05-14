var menuIcon = $('#menu-icon');
var crossIcon = $('#cross-icon');
var nav = $('.nav');
// var myFullpage = new fullpage('#fullpage');

$(document).ready(function () {
  menuIcon.click(openMenu);
  crossIcon.click(closeMenu);

});
// $(document).alton({
//   fullSlideContainer: 'full', // Tell Alton the full height container
//   singleSlideClass: 'slide', // Tell Alton the full height slide class
//   useSlideNumbers: true, // Set to false if you don't want to use pagination
//   slideNumbersBorderColor: '#fff', // Set the outside color of the pagination items
//   slideNumbersColor: 'transparent', // Set the inner color of the pagination items
//   bodyContainer: 'body', // Tell Alton the body class
// });
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
        $('body').addClass('stop-scrolling');
      },
    }
  );
}

function closeMenu() {
  nav.animate(
    {
      width: '0',
      opacity: '0',
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
