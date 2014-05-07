<?php
if (function_exists('register_nav_menu'))
{
  register_nav_menu( 'header-menu', 'Cabeçalho' );
  register_nav_menu( 'footer-menu', 'Rodapé' );
}
?>