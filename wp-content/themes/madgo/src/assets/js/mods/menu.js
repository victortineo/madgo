// Vars
var $menu = $('.navbar .menu');
var $menuItem = $('#menu-list li a');
var $menuCollapse = $('.navbar .menu-collapse');

// Events
$menuCollapse.on('click', menuToggle);
$menuItem.on('click', menuToggle);

// Functions
function menuToggle(e) {
  $menu.toggleClass('active');
}

