<?php

defined('_JEXEC') or die;

class CribModelWord extends JModelAdmin
{
	
	public function getForm($data = array(), $laodData = true) 
	{		
		$form = $this->loadForm(
		    $this->option . 'word', 
		    'word', 
		    ['control' => 'jform', 'load_data' => $laodData]
		    );
		
		if (empty($form)) {
			
			return false;
						
		}
		
		return $form;
	}
	
	
	public function getTable($name = 'Word', $prefix = 'CribTable', $config = array())
	{		
		
		return JTable::getInstance($name, $prefix, $config);		
		
		}
		
	protected function loadFormData()
	{
		$data = JFactory::getApplication()->getUserState('com_crib.edit.word.data');
		
		if (empty($data)) {
		
		    $data = $this->getItem();
	    }
	    
		return $data;
	}	
	
	public function save($data)
	{		
		if ((!$data['english']) || (!$data['rus'])) {
			
			$this->setError(JText::_('COM_ENG_WARNING_PROVIDE_VALID_NAME'));
			
			return false;
		}
		
		    $data['english'] = strtolower(trim($data['english']));
		  
		    $data['rus'] = trim($data['rus']);
		  
		
		if (parent::save($data)) {
			
			return true;
		}
		
		return false;			
	}
	
	public function lerned($cid, $value)
	{
		$table = $this->getTable();	
		
		if ($table->load($cid)) {
			
			if (!$table->lerned($cid, $value)) {
				
				$this->setError($table->getError());
				
				return false;				
			}
							
		} else {
				
			$this->setError($table->getError());
				
			return false;
		}
		
		$this->cleanCache();
		
		return true;		
	}	
	
}
