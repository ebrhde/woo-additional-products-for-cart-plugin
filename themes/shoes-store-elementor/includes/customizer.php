<?php

if ( class_exists("Kirki")){

	// HEADER SECTION

	Kirki::add_section( 'shoes_store_elementor_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'shoes-store-elementor' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'shoes-store-elementor' ),
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'shoes_store_elementor_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'shoes-store-elementor' ),
		'section'     => 'shoes_store_elementor_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'shoes-store-elementor' ),
			'off' => esc_html__( 'Disable', 'shoes-store-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'shoes_store_elementor_google_translator',
		'label'       => esc_html__( 'Language Translator', 'shoes-store-elementor' ),
		'section'     => 'shoes_store_elementor_section_header',
		'default'     => 0,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'shoes-store-elementor' ),
			'off' => esc_html__( 'Disable', 'shoes-store-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'shoes_store_elementor_currency_switcher',
		'label'       => esc_html__( 'Currency Switcher', 'shoes-store-elementor' ),
		'section'     => 'shoes_store_elementor_section_header',
		'default'     => 0,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'shoes-store-elementor' ),
			'off' => esc_html__( 'Disable', 'shoes-store-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Contact Button', 'shoes-store-elementor' ),
		'settings' => 'shoes_store_elementor_header_button_text',
		'section'  => 'shoes_store_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Button Link', 'shoes-store-elementor' ),
		'settings' => 'shoes_store_elementor_header_button_url',
		'section'  => 'shoes_store_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Advertisement Text', 'shoes-store-elementor' ),
		'settings' => 'shoes_store_elementor_header_advertisement_text',
		'section'  => 'shoes_store_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Wishlist Link', 'shoes-store-elementor' ),
		'settings' => 'shoes_store_elementor_header_wishlist_url',
		'section'  => 'shoes_store_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'shoes_store_elementor_cart_box_enable',
		'label'       => esc_html__( 'Enable/Disable Shopping Cart', 'shoes-store-elementor' ),
		'section'     => 'shoes_store_elementor_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'shoes-store-elementor' ),
			'off' => esc_html__( 'Disable', 'shoes-store-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'shoes_store_elementor_disable_search_icon',
		'label'       => esc_html__( 'Enable/Disable Search', 'shoes-store-elementor' ),
		'section'     => 'shoes_store_elementor_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'shoes-store-elementor' ),
			'off' => esc_html__( 'Disable', 'shoes-store-elementor' ),
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'shoes_store_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'shoes-store-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'shoes-store-elementor' ),
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'shoes_store_elementor_footer_text_heading',
		'section'     => 'shoes_store_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'shoes-store-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'shoes_store_elementor_footer_text',
		'section'  => 'shoes_store_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'shoes_store_elementor_footer_enable_heading',
		'section'     => 'shoes_store_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'shoes-store-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'shoes_store_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'shoes-store-elementor' ),
		'section'     => 'shoes_store_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'shoes-store-elementor' ),
			'off' => esc_html__( 'Disable', 'shoes-store-elementor' ),
		],
	] );
}
