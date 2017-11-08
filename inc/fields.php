<?php

  if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array (
  	'key' => 'group_59edfbd892c0b',
  	'title' => 'Header Options',
  	'fields' => false,
  	'location' => array (
  		array (
  			array (
  				'param' => 'options_page',
  				'operator' => '==',
  				'value' => 'acf-options',
  			),
  		),
  	),
  	'menu_order' => 0,
  	'position' => 'normal',
  	'style' => 'default',
  	'label_placement' => 'top',
  	'instruction_placement' => 'label',
  	'hide_on_screen' => '',
  	'active' => 1,
  	'description' => '',
  ));

  acf_add_local_field_group(array (
  	'key' => 'group_5a01f33f9ad30',
  	'title' => 'Industry Image',
  	'fields' => array (
  		array (
  			'key' => 'field_5a01f3455ec76',
  			'label' => 'Industry Image',
  			'name' => 'industry_image',
  			'type' => 'image',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'return_format' => 'array',
  			'preview_size' => 'thumbnail',
  			'library' => 'all',
  			'min_width' => '',
  			'min_height' => '',
  			'min_size' => '',
  			'max_width' => '',
  			'max_height' => '',
  			'max_size' => '',
  			'mime_types' => '',
  		),
  	),
  	'location' => array (
  		array (
  			array (
  				'param' => 'taxonomy',
  				'operator' => '==',
  				'value' => 'industries',
  			),
  		),
  	),
  	'menu_order' => 0,
  	'position' => 'normal',
  	'style' => 'default',
  	'label_placement' => 'top',
  	'instruction_placement' => 'label',
  	'hide_on_screen' => '',
  	'active' => 1,
  	'description' => '',
  ));

  acf_add_local_field_group(array (
  	'key' => 'group_59f9e9f2c4c85',
  	'title' => 'Page Options',
  	'fields' => array (
  		array (
  			'key' => 'field_59f9e9fbc0081',
  			'label' => 'Header Image',
  			'name' => 'header_img',
  			'type' => 'image',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'return_format' => 'array',
  			'preview_size' => 'medium',
  			'library' => 'all',
  			'min_width' => '',
  			'min_height' => '',
  			'min_size' => '',
  			'max_width' => '',
  			'max_height' => '',
  			'max_size' => '',
  			'mime_types' => '',
  		),
  		array (
  			'key' => 'field_59f9f1f12a8dc',
  			'label' => 'Header Height',
  			'name' => 'header_height',
  			'type' => 'number_slider',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'slider_units' => 'px',
  			'default_value' => 500,
  			'slider_min_value' => 0,
  			'slider_max_value' => 1000,
  			'increment_value' => 10,
  		),
  	),
  	'location' => array (
  		array (
  			array (
  				'param' => 'post_type',
  				'operator' => '==',
  				'value' => 'page',
  			),
  		),
  		array (
  			array (
  				'param' => 'post_type',
  				'operator' => '==',
  				'value' => 'project',
  			),
  		),
  		array (
  			array (
  				'param' => 'post_type',
  				'operator' => '==',
  				'value' => 'service',
  			),
  		),
  	),
  	'menu_order' => 0,
  	'position' => 'normal',
  	'style' => 'default',
  	'label_placement' => 'top',
  	'instruction_placement' => 'label',
  	'hide_on_screen' => '',
  	'active' => 1,
  	'description' => '',
  ));

  acf_add_local_field_group(array (
  	'key' => 'group_5a00c9be9ea9d',
  	'title' => 'Principal Information',
  	'fields' => array (
  		array (
  			'key' => 'field_5a00c9d478f8a',
  			'label' => 'Position',
  			'name' => 'position',
  			'type' => 'text',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  		array (
  			'key' => 'field_5a01d0ca1f0d8',
  			'label' => 'Name with Suffixes',
  			'name' => 'long_name',
  			'type' => 'text',
  			'instructions' => 'Only put first and last name in the Title area.',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  		array (
  			'key' => 'field_5a00cafa19b86',
  			'label' => 'Picture',
  			'name' => 'headshot',
  			'type' => 'image_crop',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'crop_type' => 'hard',
  			'target_size' => 'custom',
  			'width' => 450,
  			'height' => 530,
  			'preview_size' => 'medium',
  			'force_crop' => 'yes',
  			'save_in_media_library' => 'yes',
  			'retina_mode' => 'no',
  			'save_format' => 'object',
  			'library' => 'all',
  		),
  		array (
  			'key' => 'field_5a00ca4278f8b',
  			'label' => 'Bio',
  			'name' => 'bio',
  			'type' => 'textarea',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'maxlength' => '',
  			'rows' => '',
  			'new_lines' => 'wpautop',
  		),
  		array (
  			'key' => 'field_5a00ca5a78f8c',
  			'label' => 'Firm Vision',
  			'name' => 'vision',
  			'type' => 'textarea',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'maxlength' => '',
  			'rows' => '',
  			'new_lines' => 'wpautop',
  		),
  		array (
  			'key' => 'field_5a00ca8a78f8d',
  			'label' => 'Awards',
  			'name' => 'awards',
  			'type' => 'repeater',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'collapsed' => '',
  			'min' => 0,
  			'max' => 0,
  			'layout' => 'block',
  			'button_label' => '',
  			'sub_fields' => array (
  				array (
  					'key' => 'field_5a00ca9678f8e',
  					'label' => 'Award Name/Description',
  					'name' => 'name',
  					'type' => 'text',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array (
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'prepend' => '',
  					'append' => '',
  					'maxlength' => '',
  				),
  			),
  		),
  		array (
  			'key' => 'field_5a00cab978f8f',
  			'label' => 'Phone Number',
  			'name' => 'phone',
  			'type' => 'text',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  		array (
  			'key' => 'field_5a00cacd78f90',
  			'label' => 'Email',
  			'name' => 'email',
  			'type' => 'email',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  		),
  	),
  	'location' => array (
  		array (
  			array (
  				'param' => 'post_category',
  				'operator' => '==',
  				'value' => 'category:principals',
  			),
  		),
  	),
  	'menu_order' => 0,
  	'position' => 'normal',
  	'style' => 'default',
  	'label_placement' => 'top',
  	'instruction_placement' => 'label',
  	'hide_on_screen' => array (
  		0 => 'the_content',
  	),
  	'active' => 1,
  	'description' => '',
  ));

  acf_add_local_field_group(array (
  	'key' => 'group_59fb41cd2b861',
  	'title' => 'Project Options',
  	'fields' => array (
  		array (
  			'key' => 'field_59fb4304df45b',
  			'label' => 'Recognition',
  			'name' => 'recognition',
  			'type' => 'repeater',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'collapsed' => '',
  			'min' => 0,
  			'max' => 0,
  			'layout' => 'block',
  			'button_label' => 'Add Recognition',
  			'sub_fields' => array (
  				array (
  					'key' => 'field_59fb4319df45c',
  					'label' => 'Name/Description',
  					'name' => 'name',
  					'type' => 'text',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array (
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'prepend' => '',
  					'append' => '',
  					'maxlength' => '',
  				),
  			),
  		),
  		array (
  			'key' => 'field_59fb4356df45d',
  			'label' => 'Square Feet',
  			'name' => 'square_ft',
  			'type' => 'text',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  		array (
  			'key' => 'field_59fb437ddf45e',
  			'label' => 'Completed',
  			'name' => 'completed',
  			'type' => 'text',
  			'instructions' => 'Date or year project completed. Can also include text, e.g. "Estimated Fall 2099".',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  		array (
  			'key' => 'field_5a0227010c61c',
  			'label' => 'Gallery',
  			'name' => 'gallery',
  			'type' => 'gallery',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'min' => '',
  			'max' => '',
  			'insert' => 'append',
  			'library' => 'all',
  			'min_width' => '',
  			'min_height' => '',
  			'min_size' => '',
  			'max_width' => '',
  			'max_height' => '',
  			'max_size' => '',
  			'mime_types' => '',
  		),
  		array (
  			'key' => 'field_59fb44610fae4',
  			'label' => 'Testimonial Content',
  			'name' => 'testimonial_content',
  			'type' => 'textarea',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'maxlength' => '',
  			'rows' => '',
  			'new_lines' => '',
  		),
  		array (
  			'key' => 'field_59fb44a10fae5',
  			'label' => 'Testimonial Source',
  			'name' => 'testimonial_source',
  			'type' => 'text',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  	),
  	'location' => array (
  		array (
  			array (
  				'param' => 'post_type',
  				'operator' => '==',
  				'value' => 'project',
  			),
  		),
  	),
  	'menu_order' => 0,
  	'position' => 'normal',
  	'style' => 'default',
  	'label_placement' => 'top',
  	'instruction_placement' => 'label',
  	'hide_on_screen' => array (
  		0 => 'categories',
  	),
  	'active' => 1,
  	'description' => '',
  ));

  acf_add_local_field_group(array (
  	'key' => 'group_5a00cb5a99041',
  	'title' => 'Team Member Information',
  	'fields' => array (
  		array (
  			'key' => 'field_5a01d12c31482',
  			'label' => 'Name with Suffixes',
  			'name' => 'long_name',
  			'type' => 'text',
  			'instructions' => 'Only enter first and last name in the Title area.',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  		array (
  			'key' => 'field_5a00cb5a9d5c6',
  			'label' => 'Position',
  			'name' => 'position',
  			'type' => 'text',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  		array (
  			'key' => 'field_5a00cb5a9d5d8',
  			'label' => 'Picture',
  			'name' => 'headshot',
  			'type' => 'image_crop',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'crop_type' => 'hard',
  			'target_size' => 'custom',
  			'width' => 450,
  			'height' => 530,
  			'preview_size' => 'thumbnail',
  			'force_crop' => 'yes',
  			'save_in_media_library' => 'yes',
  			'retina_mode' => 'no',
  			'save_format' => 'object',
  			'library' => 'all',
  		),
  		array (
  			'key' => 'field_5a00cb5a9d5e8',
  			'label' => 'Bio',
  			'name' => 'bio',
  			'type' => 'textarea',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'maxlength' => '',
  			'rows' => '',
  			'new_lines' => 'wpautop',
  		),
  		array (
  			'key' => 'field_5a00cb5a9d616',
  			'label' => 'Phone Number',
  			'name' => 'phone',
  			'type' => 'text',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  		array (
  			'key' => 'field_5a00cb5a9d625',
  			'label' => 'Email',
  			'name' => 'email',
  			'type' => 'email',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  		),
  	),
  	'location' => array (
  		array (
  			array (
  				'param' => 'post_category',
  				'operator' => '==',
  				'value' => 'category:team',
  			),
  		),
  	),
  	'menu_order' => 0,
  	'position' => 'normal',
  	'style' => 'default',
  	'label_placement' => 'top',
  	'instruction_placement' => 'label',
  	'hide_on_screen' => array (
  		0 => 'the_content',
  	),
  	'active' => 1,
  	'description' => '',
  ));

  acf_add_local_field_group(array (
  	'key' => 'group_59ef863a702e7',
  	'title' => 'Footer Options',
  	'fields' => array (
  		array (
  			'key' => 'field_59ef8644870be',
  			'label' => 'Copyright Label',
  			'name' => 'copyright_label',
  			'type' => 'text',
  			'instructions' => 'Enter the site\'s copyright attribution you\'d like to appear in the footer. (Leave out the &copy; symbol and the year)',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  		array (
  			'key' => 'field_59fb28c168a7d',
  			'label' => 'Contact Email',
  			'name' => 'contact_email',
  			'type' => 'email',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  		),
  		array (
  			'key' => 'field_59fb28cf68a7e',
  			'label' => 'Contact Phone',
  			'name' => 'contact_phone',
  			'type' => 'text',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  		array (
  			'key' => 'field_59fb292968a7f',
  			'label' => 'Facebook URL',
  			'name' => 'facebook_url',
  			'type' => 'url',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  		),
  		array (
  			'key' => 'field_59fb294968a81',
  			'label' => 'Instagram URL',
  			'name' => 'instagram_url',
  			'type' => 'url',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  		),
  		array (
  			'key' => 'field_59fb293868a80',
  			'label' => 'Twitter URL',
  			'name' => 'twitter_url',
  			'type' => 'url',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array (
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  		),
  	),
  	'location' => array (
  		array (
  			array (
  				'param' => 'options_page',
  				'operator' => '==',
  				'value' => 'acf-options',
  			),
  		),
  	),
  	'menu_order' => 2,
  	'position' => 'normal',
  	'style' => 'default',
  	'label_placement' => 'top',
  	'instruction_placement' => 'label',
  	'hide_on_screen' => '',
  	'active' => 1,
  	'description' => '',
  ));

  endif;

?>