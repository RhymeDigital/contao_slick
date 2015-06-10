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
	'options_callback'        => array('\Rhyme\Backend\Content\SlickCallback', 'getSlickTemplates'),
	'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);