<?php

function afs_register_menu() {
  register_nav_menu('header_menu',__( 'Header Menu' ));
  register_nav_menu('menu_bottom',__( 'Menu Bottom' ));
}