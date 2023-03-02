<?php

//Dodanie własnej akcji
// Dodanie wlasnych styli inline moja wlasna funkcja PHP :)
add_action('wp_head','pokaz_style_css');

function moje_style_css() {
 ?>
<!-- // <style id="worcar-inline" type="text/css">
// /* tutaj wpisz swoje style inline */
// .active{
//  background-color: red;
//  transition:background-color 2s  ease-in-out;
// }
// </style> --> <?php
// }
// function pokaz_style_css() {
//  return moje_style_css();
//     }
// koniec dodawania styli inline do <head>strony
?>