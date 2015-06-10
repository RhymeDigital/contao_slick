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
 
namespace Rhyme\Backend\Content;
 
 
/**
 * Class SlickCallback
 *
 * Provides methods for backend DCA
 * @copyright  2015 Rhyme.Digital
 * @author     Blair Winans <blair@rhyme.digital>
 * @author     Adam Fisher <adam@rhyme.digital>
 * @package    Slick
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
