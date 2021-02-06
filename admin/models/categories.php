<?php

defined('_JEXEC') or die;

class  CribModelCategories extends JModelList
{
	protected function getListQuery()
	{
		$query = parent::getListQuery();
		
		//echo '<pre>';
		//print_r($query);
	//echo '</pre>';
		
		
		$query->select('id, name, state');		
		
		$query->from('#__eng_categories');
		
		/*$query->select(' d.id_categories COUNT(*) GROUP BY d.id_categories');
		$query->join('LEFT','#__crib_dictionary AS d');*/
		
		
		echo $query;
		
		return $query;
		
		
	}
	
	
	
}
