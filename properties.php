<?php
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// Set some global property
$document = JFactory::getDocument();
  
// Perform the Request task
$controller = JControllerLegacy::getInstance('Properties');
$controller->execute(JFactory::getApplication()->input->get('task'));
 
// Redirect if set by the controller
$controller->redirect();