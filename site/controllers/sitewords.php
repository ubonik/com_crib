<?php

defined('_JEXEC') or die;

require_once JPATH_ADMINISTRATOR . '/components/com_crib/controllers/words.php';

class CribControllerSitewords extends CribControllerWords
{
	protected $view_list = 'sitewords';	
	
	public function getModel($name = 'Sitewords', $prefix = 'CribModel', $config = array())
	{		
		return parent::getModel($name, $prefix, $config);
	}
	
}
