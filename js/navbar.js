const $ = require('jquery');

$(document).ready(function(){
  var $navIcon = $("#hamburger");
  var $menu = $("#menu-container");
  $navIcon.on("click", function(){
    console.log("hi");
    $menu.toggleClass("menu-open");
  });
});
