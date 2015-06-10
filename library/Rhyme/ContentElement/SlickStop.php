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
 
 namespace Rhyme\ContentElement;
 
 use Contao\ContentElement as Contao_Element;
 
 /**
 * Class SlickStop
 *
 * Closes out a Slick Slider
 * @copyright  2014 HB Agency
 * @author     Blair Winans <bwinans@hbagency.com>
 * @package    Zurb_Foundation
 */
class SlickStop extends Contao_Element
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_slick_stop';
	
	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
	    if (TL_MODE == 'BE')
		{
			$this->strTemplate = 'be_wildcard';
			$this->Template = new \BackendTemplate($this->strTemplate);
			$this->Template->wildcard = '### SLICK SLIDER END ###';
			$this->Template->title = $this->headline;
			return $this->Template->parse();
		}
        
        return parent::generate();
	}
	
	/**
	 * Generate content element
	 * @return string
	 */
	protected function compile()
	{

	}

}
