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
		
		$query->select($db->quoteName(['d.id', 'd.english', 'd.rus', 'd.id_categories', 'd.state', 'd.ordering', 'd.lerned']));
		
		$query->from($db->quoteName('#__crib_dictionary', 'd'));		
		
		$query->select($db->quoteName('c.name', 'category'));		
		
		$query->join('LEFT', $db->quoteName('#__crib_categories', 'c') . ' ON ' . $db->quoteName('c.id') . '=' . $db->quoteName('d.id_categories'));		
		
		$search = $this->getState('filter.search');
 
		if (!empty($search)) {
		
			$like = $db->quote('%' . $search . '%');
			
			$query->where($db->quoteName('d.english') . ' LIKE ' . $like);
		}
		
		$category = $this->getState('filter.category');
		
		if (!empty($category)) {
			
			$query->where($db->quoteName('d.id_categories') . ' = '.(int)$category);
		}
		
		$published = $this->getState('filter.state');
		
		if (is_numeric($published)) {
			
			$query->where($db->quoteName('d.state') . ' = ' . (int) $published);
		}
			elseif ($published === '') {
				
			$query->where('(d.state = 0 OR d.state = 1)');
		}

		$lerned = $this->getState('filter.lerned');
		
		if (is_numeric($lerned)) {
			
			$query->where($db->quoteName('d.lerned') . ' = ' . (int) $lerned);
		}
			elseif ($lerned === '') {
				
			$query->where('(d.lerned = 0 OR d.lerned = 1)');
		}
		
		$orderCol = $db->escape($this->getState('list.ordering', 'd.id'));
		$orderDirn = $db->escape($this->getState('list.direction', 'desc'));
		
		$query->order($db->quoteName($orderCol) . ' ' . $orderDirn);		
		
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
