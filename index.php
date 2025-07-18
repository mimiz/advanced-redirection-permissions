<?php
/*
Plugin Name: My Advanced Redirection
Description: Advanced access to Redirection
Author: Rémi Goyard (Mimiz)
Author URI: https://medium.com/@rgoyard
Plugin URI: https://github.com/mimiz/advanced-redirection-permissions
License: GPL-2.0+
Version: 1.1
Requires Plugins: redirection,members
Requires at least: 6.4
Requires PHP: 7.0
*/

add_filter( 'redirection_role', function( $role ) {
  return 'redirection';  // Here is the new capability we created
} );