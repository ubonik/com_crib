<?php

defined('_JEXEC') or die;

class CribModelWords extends JModelList
{
	
protected function getListQuery()
	{
		$query = parent::getListQuery();
		
		$query->select('id, english, rus, id_categories, state, ordering, lerned');
		
		$query->from('#__crib_dictionary');
		
		$state = $this->getState('filter_state', 1);
	    $query->where('state='.$state);
		
		$idcat = (int)$this->getState('filter.idcat', false);
		
		if ($idcat) {
		
		$query->where('id_categories="'. $idcat . '"');
	    }	
		
		$lerned = (int)$this->getState('filter.lerned', 1);
		
		if($lerned !== 2){
			
	    $query->where('lerned='. $lerned);		
		
	    }	
		
		return $query;	
	}
	
	
	protected function populateState($ordering = null, $direction = null)
	{
		/*$value = $this->getUserStateFromRequest($this->context.'.filter.idcat','idcat');
			$this->setState('filter.idcat', $value);
		
		$value = $this->getUserStateFromRequest($this->context.'.filer.lerned', 'lerned');
			
			$this->setState('filter.lerned', $value);
		
		*/
		
		parent::populateState('id', 'desc');
		
		$input = JFactory::getApplication()->input;
		
		//print_r($input);
		
		$value = $input->getInt('idcat');
		
		if ($value) {
			
			$this->setState('filter.idcat', $value);
			
			
			}else{
				
				$this->setState('filter.idcat', false);
				
				
				
				}
			
		
		$value = $this->getUserStateFromRequest($this->context.'.filer.lerned', 'lerned');
			
			$this->setState('filter.lerned', $value);
		
		
		
		
	}	
	 
	protected function getStoreId($id = '')
	{
		// Add the list state to the store id.
		$id .= ':' . $this->getState('filter.idcat');
		$id .= ':' . $this->getState('filter.lerned');		

		return parent::getStoreId($id);
	}	
	
	
}
