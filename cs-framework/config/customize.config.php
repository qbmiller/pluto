<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// CUSTOMIZE SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options              = array();

// -----------------------------------------
// Customize Core Fields                   -
// -----------------------------------------
$options[]            = array(
  'name'              => 'pluto',
  'title'             => 'pluto密钥验证',
  'settings'          => array(

    // text
    array(
      'name'          => 'pluto_key',
      'control'       => array(
        'label'       => '密钥',
        'wrap_class'  => 'hide',
        'class'  => 'hide',
        'type'        => 'password',
      ),
    ),

  )
);

CSFramework_Customize::instance( $options );
