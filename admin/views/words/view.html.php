<?php

defined('_JEXEC') or die;

class CribViewWords extends JViewLegacy
{
	protected $items;
	protected $pagination;
	protected $state;	
	protected $sidebar;	
	protected $listOrder;	
		
	public $listDirn;
	public $filterForm;	
	public $saveOrder;
	
	
	public function display($tmpl = null)
	{	
		$this->sidebar = CribHelper::addSubMenu('words');
		
		$this->filterForm = $this->get('filterForm');
		
		$this->activeFilters = $this->get('activeFilters');
		
		$this->addToolbar();
		
		$this->items = $this->get('items');	
			
		$this->pagination = $this->get('pagination');
		
		$this->state = $this->get('state');		
		
		$this->listOrder = $this->state->get('list.ordering');
		
		$this->listDirn = $this->state->get('list.direction');
		
		$this->saveOrder = ($this->listOrder == 'ordering');		
		
		parent::display($tmpl); 		
		
	}
	
	public function addToolbar()
	{
		
		JToolbarHelper::title(JText::_("COM_CRIB_MANAGER_WORDS"));
		
		JToolbarHelper::addNew('word.add');
		
		JToolbarHelper::editList('word.edit');
				
		JToolbarHelper::publish('words.publish', 'JTOOLBAR_PUBLISH', true);					
		
		JToolbarHelper::unpublishList('words.unpublish', 'JTOOLBAR_UNPUBLISH', true);		
		
		JToolbarHelper::deleteList(JText::_('COM_CRIB_MANAGER_CATEGORIES_DELETE_MSG'), 'words.delete');					
		
		JToolbarHelper::preferences('com_crib');		
		
	}	
	
}	

 


