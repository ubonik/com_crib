<?php

defined('_JEXEC') or die();

abstract class CribHelper {

    public static function addSubMenu($viewName){
	
        JHtmlSidebar::addEntry(
	        'список переведенных слов', 
	        'index.php?option=com_crib', 
	        $viewName == 'words'
	    );
	                      
        JHtmlSidebar::addEntry(
            'список категорий', 
            'index.php?option=com_crib&view=categories', 
            $viewName == 'categories'
        );
	                                           
        return   JHtmlSidebar::render();                        
	
    }

    public static function learnedWords($value, $i, $prefix = '', $img1 = 'tick.png', $img0 = 'publish_x.png')
    {
        $class = "class='btn btn-micro hasTooltip'";
	
	    $img = $value ? $img1 : $img0;	
	
	    $task = $value ? 'unlerned' : 'lerned';
	
	    $alt = $value ? JText::_('CRIB_LEARNED') : JText::_('CRIB_UNLEARNED');
	
        $html = '<a ' . $class . ' onclick="return listItemTask(\'cb' .$i . '\',\'' . $prefix . $task . '\')"';
        //$html .= ' >' . JHtml::_('image', 'img/' . $img, $alt, null, true) . '</a>';
	    $html .= ' >' . JHtml::_('image', 'admin/' . $img, $alt, null, true) . '</a>';	
	
	    return $html;
	
    }
    
}

