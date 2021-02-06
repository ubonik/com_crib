<?php

//use Joomla\CMS\Toolbar\ToolbarHelper;

defined('_JEXEC') or die;

class CribViewCategories extends JViewLegacy
{
	protected $items;
	protected $sidebar;
	protected $pagination;	
	
	public function display($tpl = null)
	{
		$this->sidebar = CribHelper::addSubMenu('categories');
		$this->addToolbar();
		$this->setDocument();
		$this->items = $this->get('Items');		
	    $this->pagination = $this->get('pagination');    	    
	    	    
	    parent::display($tpl);
    }
    
    protected function addToolbar()
    {
		JToolbarHelper::title('список категорий');
		JToolbarHelper::addNew('category.add');
		JToolbarHelper::editList('category.edit');
		JToolbarHelper::publish('categories.publish', 'JTOOLBAR_PUBLISH', true);
		JToolbarHelper::unpublish('categories.unpublish', 'JTOOLBAR_UNPUBLISH', true);
		JToolbarHelper::deleteList('удаляем?', 'categories.delete');
		
		
	}
	
	protected function setDocument()
	{
		
		
		
	}  
	
}
