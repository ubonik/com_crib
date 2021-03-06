<?php

defined('_JEXEC') or die;

class CribTableWord extends JTable 
{	
	public function __construct($db) 
	{
				
		parent::__construct('#__crib_dictionary', 'id', $db);		
	}
	
	public function publish ($pks = null, $state = 1, $userId = 0)
	{
		
		JArrayHelper::toInteger($pks);
		
		$state = (int)$state;
		
        if (empty($pks)) {
		   
		    throw new RuntimeException('ошибка');		   
		}		   
		   
        foreach ($pks as $pk) {
		    if (!$this->load($pk)) {
					
				throw new RuntimeException('ошибка');
			}			
				
		    $this->state = $state;
				
		    if (!$this->store()) {
					
			    throw new RuntimeException('ошибка');
			}			
			
		}
		    
		return true;	
		
	}		

	public function check()
	{		
		$db = $this->getDbo();		
		$query = $db->getQuery(true);		
		
		$query->select($db->quoteName(['id', 'english']));		
		$query->from($db->quoteName('#__crib_dictionary'));		    
	    $query->where($db->quoteName('english') . ' = ' . $db->quote($this->english));	    	    

		$db->setQuery($query);
		
		$result = $db->loadRow();	
		
		if($result[0] != $this->id && $result[1] == $this->english) {
			
			$this->setError(JText::_('Ошибка'));
			
			return false;			
		}		
		
		return true;	
	}
	
	public function lerned($cid, $value = 0)
	{
		if (empty($cid)) {
			throw new RuntimeException(JText::_('COM_CRIB_WORD_LERNED_NO_ID'));			
		}
		
		if (!isset($this->lerned)) {
			
			throw new RuntimeException(JText::_('COM_CRIB_WORD_LERNED_NO_LERNED'));
		}
		
		$this->lerned = $value;
		
		if (!$this->store()) {
			
			throw new RuntimeException(JText::_('COM_CRIB_WORD_LERNED_ERROR_STORE'));
		}
		
		return true;
	}		
	
}
