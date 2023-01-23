<?php
/**
 * @package   Custom Element for Yootheme Pro
 * @author    Pixim Communication
 * @copyright Copyright (C) Pixim Communication
 * @license   //
 */

defined('_JEXEC') or die;

class plgSystemPixim_elementsInstallerScript
{
    public function install($parent) {
		
	   $db = JFactory::getDBO();
	   $query = 'UPDATE #__extensions SET enabled = 1, ordering = 0 WHERE element="pixim_elements"';
 	   $db->setQuery($query);
 	   $db->query();
		
    }
    public function update($parent) {
		
	   $db = JFactory::getDBO();
	   $query = 'UPDATE #__extensions SET enabled = 1, ordering = 0 WHERE element="pixim_elements"';
 	   $db->setQuery($query);
 	   $db->query();
		
	}

}
