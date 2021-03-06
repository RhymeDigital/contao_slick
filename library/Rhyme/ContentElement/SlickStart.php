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
 * Class SlickStart
 *
 * Creates a starting Slick slider wrapper
 * @copyright  2015 Rhyme.Digital
 * @author     Blair Winans <blair@rhyme.digital>
 * @author     Adam Fisher <adam@rhyme.digital>
 * @package    Slick
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
		$GLOBALS['TL_HEAD']['slickcss'] = '<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/'.SLICK_VERSION.'/slick.css"/>';
        $GLOBALS['TL_BODY']['slickjs'] = '<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/'.SLICK_VERSION.'/slick.min.js"></script>';
        
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
