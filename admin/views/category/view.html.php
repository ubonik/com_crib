<?php

defined('_JEXEC') or die;

class CribViewCategory extends JViewLegacy
{
	protected $form;
	protected $item;
	
	public function display($tpl = null)
	{
		$this->addToolbar();
		$this->setDocument();
		$this->form = $this->get('form');
		$this->item = $this->get('Item');		
			
	    parent::display($tpl);
    }
    
    protected function addToolbar()
    {
		JFactory::getApplication()->input->set('hidemainmenu', true);
		
		$isNew = ($this->item == 0);
		
		if ($isNew) {
			
			$title = JText::_('COM_CRIB_MANAGER_CATEGORY_NEW');
						
		}else{
		    
		    $title = JText::_('COM_CRIB_MANAGER_CATEGORY_EDIT');	
		}	
		
		JToolbarHelper::title($title);
		JToolbarHelper::apply('category.apply');
		JToolbarHelper::save2new('category.save2new');
		JToolbarHelper::cancel('category.cancel');		
	}
	
	protected function setDocument()
	{
		
		
		
	}  
	
}
