<?php
defined('_JEXEC') or die;
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * Dashboard View
 */
class GorillaViewDashboard extends JViewLegacy
{
    /**
    * Dashboard view display method
    * @return void
    */
	function display($tpl = null) 
    {
    	JToolBarHelper::title(JText::_('COM_GORILLA'), 'dashboard');
    	
		//Check for errors.
        if (count($errors = $this->get('Errors'))) 
        {
        	JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
        
        // Display the template
        parent::display($tpl);
	}
}