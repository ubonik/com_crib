<?php

defined('_JEXEC') or die;

class CribControllerWords extends JControllerAdmin 
{
	public function getModel($name = 'Word',$prefix = 'CribModel',$config = array()) 
	{		
		return parent::getModel($name,$prefix,$config);
	}
	
	public function lerned()
	{
        JSession::checkToken() or die(JText::_(INVALID_TOKEN));	
    
        $cid = JFactory::getApplication()->input->get('cid', array(), 'array');	
	
	    $data = ['lerned' => 1 , 'unlerned' => 0];
	
	    $task = $this->getTask();
	
	    $value = JArrayHelper::getValue($data, $task, 0, 'int');
	
	    if ($cid) {
		
		    $model =$this->getModel();
		
		    JArrayHelper::toInteger($cid);
		
		    try{
			    $model->lerned($cid[0], $value);
			
			    if ($value ==1) {
				    $text = COM_CRIB_MESSAGE_LERNED;
			    } elseif ($value ==1) {
				
				    $text = COM_CRIB_MESSAGE_UNLERNED;
			    }
			
			    $this->setMessage(JText::_($text));
		    }
		    catch (RuntimeException $e) {
			
			    $this->setMessage($e->getMessage(), 'error');
		    }
	    }
	
	    $this->setRedirect(JRoute::_('index.php?option=' . $this->option . '&view=' . $this->view_list, false));
	    	
    }
}
