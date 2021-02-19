<?php

defined('_JEXEC') or die;

class CribViewWords extends JViewLegacy
{
	public $items;
	public $state;
	public $pagination;
	
	
	public function display($tpl = null)
	{
		$this->setDocument();
		
		$this->items = $this->get('Items');
		$this->state = $this->get('State');
		$this->pagination = $this->get('Pagination');		
		
		parent::display($tpl);
	}
	
	protected function setDocument(){
		
		$document = JFactory::getDocument();			
		$document->addStyleSheet(JUri::root(true).'/components/com_crib/assets/css/style.css');
		
	}	 
	
	
}
