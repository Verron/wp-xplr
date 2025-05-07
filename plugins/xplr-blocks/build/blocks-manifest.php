<?php
// This file is generated. Do not modify it manually.
return array(
	'example-one' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'xplr/example-one',
		'version' => '0.1.0',
		'title' => 'Example One',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'example-one',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'title' => array(
				'type' => 'string',
				'default' => 'Example Description'
			),
			'description' => array(
				'type' => 'string',
				'default' => 'This is an example block description.'
			),
			'image' => array(
				'type' => 'string',
				'default' => ''
			)
		)
	),
	'example-two' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'xplr/example-two',
		'version' => '0.1.0',
		'title' => 'Example Two',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'example-two',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'description' => array(
				'type' => 'string',
				'default' => 'The Description'
			),
			'source' => array(
				'type' => 'string',
				'default' => 'The Source'
			),
			'link' => array(
				'type' => 'string',
				'default' => 'http://link.com'
			),
			'price' => array(
				'type' => 'string',
				'default' => '0.00'
			)
		)
	)
);
