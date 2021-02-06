<?php

defined('_JEXEC') or die;

class CribControllerWords extends JControllerAdmin 
{
	public function getModel($name = 'Word',$prefix = 'CribModel',$config = array()) 
	{		
		return parent::getModel($name,$prefix,$config);
	}
}
