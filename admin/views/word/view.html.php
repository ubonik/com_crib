<?php

defined('_JEXEC') or die;

class CribViewWord extends JViewLegacy
{
	protected $form;
	protected $item;	
	
	public function display($tmpl = null)
	{
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');		
		$this->addToolbar();		
		
		parent::display($tmpl);
		
	}
	
	protected function addToolbar()
	{
		JFactory::getApplication()->input->set('hidemainmenu', true);
		
		$isNew = ($this->item->id == 0);
		
		if ($isNew) {
			
			$title = JText::_('COM_CRIB_MANAGER_WORD_NEW');
			
		} else {
				
			$title = JText::_('COM_CRIB_MANAGER_WORD_EDIT');
		}			
			
		JToolbarHelper::title($title);		
		JToolbarHelper::apply('word.apply');
		JToolbarHelper::save('word.save');
		JToolbarHelper::cancel('word.cancel');
			
	}
	
}
