<?php

defined('_JEXEC') or die;

require_once JPATH_ADMINISTRATOR . '/components/com_crib/models/words.php';

class CribModelSitewords extends CribModelWords
{
	
    protected function getListQuery()
	{
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		
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
		
		parent::populateState('id', 'desc');
		
		$input = JFactory::getApplication()->input;
		
		$value = $input->getInt('idcat');
		
		if ($value) {
			
			$this->setState('filter.idcat', $value);			
			
		}else{
				
			$this->setState('filter.idcat', false);				
				
		}			
		
		$value = $this->getUserStateFromRequest($this->context.'.filer.lerned', 'lerned');			
		$this->setState('filter.lerned', $value);	
		
		$value = $this->getUserStateFromRequest($this->context.'.list.limit', 'limit');			
		$this->setState('list.limit', $value);			
		
	}	
	 
	protected function getStoreId($id = '')
	{		
		$id .= ':' . $this->getState('filter.idcat');
		$id .= ':' . $this->getState('filter.lerned');		

		return parent::getStoreId($id);
	}
	
	public function lerned($cid, $value)
	{
		$model = $this->getInstance('Siteword','CribModel');		
		
		return $model->lerned($cid, $value);				
	}	
	
}
