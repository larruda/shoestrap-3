<?php

if ( !class_exists( 'SassParser' ) ) :
	require_once ( dirname( __FILE__ ) . '/includes/phpsass/SassParser.php' );
endif;

if ( !class_exists( 'Compass' ) ) :
	require_once ( dirname( __FILE__ ) . '/includes/phpsass/Extensions/Compass/Compass.php' );
endif;

include_once ( dirname( __FILE__ ) . '/includes/functions.core.php' );
include_once ( dirname( __FILE__ ) . '/includes/functions.variables.php' );
include_once ( dirname( __FILE__ ) . '/includes/functions.compiler.php' );