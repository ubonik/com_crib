<?php

defined('_JEXEC') or die;

class  CribModelCategories extends JModelList
{
	protected function getListQuery()
	{
		$query = parent::getListQuery();		
		
		$query->select('id, name, state');		
		
		$query->from('#__eng_categories');		
		
		echo $query;
		
		return $query;		
		
	}	
	
}
