<?php

/**
 * Slick carousel integration for Contao Open Source CMS
 *
 * Copyright (C) 2015 Rhyme.Digital
 *
 * @package    Slick
 * @link       http://rhyme.digital
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Slick Version
 */
define('SLICK_VERSION', '1.5.8');

/**
 * Content Elements
 */
array_insert($GLOBALS['TL_CTE']['slider'], 0, array
(
	    'slick_start'   	          => 'Rhyme\ContentElement\SlickStart',
        'slick_stop'    	          => 'Rhyme\ContentElement\SlickStop',
));

/**
 * Wrappers for Elements
 */
$GLOBALS['TL_WRAPPERS']['start'][] 	= 'slick_start';
$GLOBALS['TL_WRAPPERS']['stop'][] 	= 'slick_stop';
