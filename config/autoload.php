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
 * Register PSR-0 namespace
 */
NamespaceClassLoader::add('Rhyme', 'system/modules/slick/library');


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
