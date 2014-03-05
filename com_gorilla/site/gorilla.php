<?php
defined('_JEXEC') or die;

// import joomla controller library
jimport('joomla.application.component.controller');

// Add css and js files
$document = JFactory::getDocument();
$document->addStyleSheet('./media/com_gorilla/css/gorilla.css');
if (version_compare(JVERSION, '3', 'lt')) {
	$document->addScript(JURI::root().'./media/com_gorilla/js/jquery-2.0.3.min.js');
	$document->addScript(JURI::root().'./media/com_gorilla/js/bootstrap.js');
	$document->addScript(JURI::root().'./media/com_gorilla/js/bootstrap.min.js');
	$document->addStyleSheet(JURI::root().'./media/com_gorilla/css/bootstrap.css');
}

// Get an instance of the controller prefixed by SohoWater
$controller = JControllerLegacy::getInstance('Gorilla');

// Perform the Request task
$controller->execute(JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();