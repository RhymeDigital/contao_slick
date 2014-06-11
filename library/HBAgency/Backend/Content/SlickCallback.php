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
 
namespace HBAgency\Backend\Content;
 
 
 /**
 * Class SlickCallback
 *
 * Provides methods for backend DCA
 * @copyright  2014 HB Agency
 * @author     Blair Winans <bwinans@hbagency.com>
 * @package    Zurb_Foundation
 */
class SlickCallback extends \Backend
{
    
    /**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}
    
    /**
	 * Get all slick templates and return them as array
	 * @param DataContainer
	 * @return array
	 */
    public function getSlickTemplates(\DataContainer $dc)
    {
        return self::getTemplateGroup('slick_');
    }

}