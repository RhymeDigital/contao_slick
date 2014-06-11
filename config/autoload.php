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
 * Register PSR-0 namespace
 */
NamespaceClassLoader::add('HBAgency', 'system/modules/slick/library');


/**
 * Register classes outside the namespace folder
 */
NamespaceClassLoader::addClassMap(array
(
    
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	//Content elements
	'ce_slick_start' 	    => 'system/modules/slick/templates/elements',
	'ce_slick_stop' 	    => 'system/modules/slick/templates/elements',
	
	//Javascript
	'slick_default' 	    => 'system/modules/slick/templates/slick',
	    	
));
