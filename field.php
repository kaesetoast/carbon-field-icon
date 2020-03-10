<?php

use Carbon_Fields\Carbon_Fields;
use Carbon_Field_ICON\ICON_Field;

define( 'Carbon_Field_ICON\\DIR', __DIR__ );

Carbon_Fields::extend( ICON_Field::class, function( $container ) {
	return new ICON_Field(
		$container['arguments']['type'],
		$container['arguments']['name'],
		$container['arguments']['label']
	);
} );
