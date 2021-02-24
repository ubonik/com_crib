<?php

defined('_JEXEC') or die;

$controller = JControllerLegacy::getInstance('Crib');

$controller->registerTask('unlerned', 'lerned');

JLoader::register('CribHelper', JPATH_ADMINISTRATOR . '/components/com_crib/helpers/crib.php');

$input = JFactory::getApplication()->input;

$controller->execute($input->getCmd('task', 'display'));

$controller->redirect();


