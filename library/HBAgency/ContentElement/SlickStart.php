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
 
 namespace HBAgency\ContentElement;
 
 use Contao\ContentElement as Contao_Element;
 
 /**
 * Class SlickStart
 *
 * Creates a starting Slick slider wrapper
 * @copyright  2014 HB Agency
 * @author     Blair Winans <bwinans@hbagency.com>
 * @package    Zurb_Foundation
 */
class SlickStart extends Contao_Element
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_slick_start';
	
	/**
	 * Template
	 * @var string
	 */
	protected $jsTemplate = 'slick_default';
	
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
			$class = deserialize($this->cssID);
			$this->Template->wildcard = '### SLICK SLIDER START ###';
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
	    //Add in all JS/CSS
		$objCombiner = new \Combiner();
		$objCombiner->add('system/modules/slick/assets/slick/slick/slick.min.js');
		$GLOBALS['TL_JAVASCRIPT'][] = $objCombiner->getCombinedFile() . '|static';
        $GLOBALS['TL_CSS'][] = 'system/modules/slick/assets/slick/slick/slick.css|screen|static';
        
        if($this->cssID[0] == '')
        {
            $this->cssID = array('slickslider' . $this->id, $this->cssID[1]);
        }
        
        //Load up the configuration
        if($this->slick_jstemplate != '')
        {
            $this->jsTemplate = $this->slick_jstemplate;
        }
        $objTemplate = new \FrontendTemplate($this->jsTemplate);
        $objTemplate->setData($this->arrData);
        $objTemplate->id = $this->cssID[0];
		$GLOBALS['TL_BODY'][] = $objTemplate->parse();
		
	}


}