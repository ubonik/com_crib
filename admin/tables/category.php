<?php

defined('_JEXEC') or die;

class CribTableCategory extends JTable
{
    public function __construct($db)
	{
		parent::__construct('#__eng_categories', 'id', $db);
    }	
	
	public function publish($pks = null, $state = 1, $userId = 0)
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
	
}
