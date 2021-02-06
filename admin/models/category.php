<?php

defined('_JEXEC') or die;

class CribModelCategory extends JModelAdmin
{
	public function getForm($data = array(), $loadData = true)
	{		
		$form = $this->loadForm($this->option . 'category', 
		    'category', 
		    [
		        'control' => 'jform', 
		        'load_data' => $loadData
		    ] 
		    );
		    
		if (empty($form)) {
			
			
		    return false;	
	    } 
	    
	    return $form;
	       
	}	
	
	
	public function getTable($name = 'Category', $prefix = 'CribTable', $options = array())
	{
		
		return JTable::getInstance($name, $prefix, $options);		
	}
	
	protected function loadFormData()
	{
		$data = JFactory::getApplication()->getUserState('com_crib.edit.category.data', array());		
		
		if (empty($data)) {
			
		    $data = $this->getItem();
		    
		}    
		
		return $data;
	}
	
	
}
