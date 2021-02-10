<?php

defined('_JEXEC') or die;

JFormHelper::loadFieldClass('list');

class JFormFieldCategoryparent extends JFormFieldList 
{	
	protected $type = 'Categoryparent';
	
	protected function getOptions() 
	{
		$parent = parent::getOptions();				
		
		$options = [];
		
		if (!empty($parent)) {
			
			foreach ($parent as $option) {
				
				array_push($options, $option); 
			}
		}	
		
		$db = JFactory::getDbo();
		
		$query = $db->getQuery(true);
		
		$query->select($db->quoteName( array('id', 'name'), array('value', 'text')));
		
		$query->from($db->quoteName('#__crib_categories'));
		
		$query->where($db->quoteName('state'). ' = ' .$db->quote(1));
		
		$db->setQuery($query);
		
		try {
			
		    $option = $db->loadObjectList();		
	    }
		catch (RuntimeException $e) {
			
			JError::raiseWarning(500, $e->getMessage());			
		} 		
			
		for ($i = 0; $i < count($option); $i++) {
			
			array_push($options, $option[$i]); 
			
		}			
		
		return $options;
	} 	
	
}



