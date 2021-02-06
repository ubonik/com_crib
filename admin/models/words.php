<?php

defined('_JEXEC') or die;

class CribModelWords extends JModelList
{
	public function __construct($config = array())
	{
		$config['filter_fields'] = [		
		    'id', 'english', 'id_categories', 'state','ordering','lerned'		
		];
		
		parent::__construct($config);
	}
	
	protected function getListQuery()
	{
		$db = $this->getDbo();
		$query = $db->getQuery(true);
				
		$query->select('id, english, rus, id_categories, state, ordering, lerned');
		
		$query->from('#__crib_dictionary');	
		
		$search = $this->getState('filter.search');
 
		if (!empty($search)) {
		
			$like = $db->quote('%' . $search . '%');
			
			$query->where('english LIKE ' . $like);
		}
		
		$category = $this->getState('filter.category');
		
		if (!empty($category)) {
			
			$query->where('id_categories = '.(int)$category);
		}
		
		$published = $this->getState('filter.state');
		
		if (is_numeric($published)) {
			
			$query->where('state = ' . (int) $published);
		}
			elseif ($published === '') {
				
			$query->where('(state = 0 OR state = 1)');
		}

		$lerned = $this->getState('filter.lerned');
		
		if (is_numeric($lerned)) {
			
			$query->where('lerned = ' . (int) $lerned);
		}
			elseif ($lerned === '') {
				
			$query->where('(lerned = 0 OR lerned = 1)');
		}

		
		$orderCol = $this->getState('list.ordering', 'id');
		$orderDirn = $this->getState('list.direction', 'desc');
		
		$query->order($orderCol . ' ' . $orderDirn);
		
		return $query;			
			
	}	
	
	protected function populateState($ordering = null, $direction = null)
	{
		parent::populateState('id', 'desc');
	
	}
	
	protected function getStoreId($id = '')
	{		
		$id .= ':' . $this->getState('filter.search');
		$id .= ':' . $this->getState('filter.category');
		$id .= ':' . $this->getState('filter.state');
		$id .= ':' . $this->getState('filter.lerned');		

		return parent::getStoreId($id);
	}
}
