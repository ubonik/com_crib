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

}

