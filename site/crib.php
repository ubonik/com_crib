<?php

defined('_JEXEC') or die;

$controller = JControllerLegacy::getInstance('Crib');

$input = JFactory::getApplication()->input;

$controller->execute($input->getCmd('task', 'display'));

$controller->redirect();


