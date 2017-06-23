<?php

function mis_menus() {
	register_nav_menus(
			array(
					'navegation' => __( ' Menú de navegación' ),

				)
		);
}

add_action( 'init', 'mis_menus' );