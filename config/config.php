<?php

/**
 * Slick carousel integration for Contao Open Source CMS
 *
 * Copyright (C) 2014 HB Agency
 *
 * @package    Slick
 * @link       http://www.hbagency.com
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */
 
 
/**
 * Content Elements
 */
array_insert($GLOBALS['TL_CTE']['slider'], 0, array
(
	    'slick_start'   	          => 'HBAgency\ContentElement\SlickStart',
        'slick_stop'    	          => 'HBAgency\ContentElement\SlickStop',
));

/**
 * Wrappers for Elements
 */
$GLOBALS['TL_WRAPPERS']['start'][] 	= 'slick_start';
$GLOBALS['TL_WRAPPERS']['stop'][] 	= 'slick_stop';
