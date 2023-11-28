<?php

return [
	'debug' => true, // str_ends_with($_SERVER['SERVER_NAME'], '.test'), // enable debug for domains that end on ".test"
	'locale' => 'de',
	'panel' => [
		'language' => 'de',
	],
	'slugs' => 'de',
	'date.handler' => 'intl',
	'markdown' => [
		'extra' => true,
	],

	// Image sizes

	'thumbs' => [
		'interlace' => true,
		'quality' => 85,
		'srcsets' => [
			'default' => [600, 1200, 1800],
		],
	],

	// Plugin configuration

	'arnoson.kirby-vite' => [
		'entry' => 'js/index.js',
	],

	'fabianmichael.meta' => [
		'theme.color' => '#000',
	],
];
