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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['slick_start'] = '{type_legend},type;{template_legend:hide},slick_jstemplate,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['slick_stop'] = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests';

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['slick_jstemplate'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['slick_jstemplate'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('\HBAgency\Backend\Content\SlickCallback', 'getSlickTemplates'),
	'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);