<?php

defined('_JEXEC') or die;

class CribControllerCategories extends JControllerAdmin
{
	public function getModel($name = 'Category', $prefix = 'CribModel', $config = array())
	{
		return parent::getModel($name, $prefix, $config);
		
    }
	
}
