<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * https://github.com/Excellerate/com_properties/archive/develop.zip
 */
 
/**
 * Script file of the Properties component
 */
class Com_PropertiesInstallerScript
{
  /**
   * Method to install the component
   *
   * @return void
   */
  function install($parent) 
  {
    // $parent is the class calling this method
    $parent->getParent()->setRedirectURL('index.php?option=com_properties');
  }
 
  /**
   * Method to uninstall the component
   *
   * @return void
   */
  function uninstall($parent) 
  {
    echo '<p>JHI properties uninstalled</p>';
  }
 
  /**
   * Method to update the component
   *
   * @return void
   */
  function update($parent) 
  {
    // $parent is the class calling this method
    echo '<p>Updated to ' . $parent->get('manifest')->version) . '</p>';
  }
 
  /**
   * Method to run before an install/update/uninstall method
   *
   * @return void
   */
  function preflight($type, $parent) 
  {
    return true;
  }
 
  /**
   * Method to run after an install/update/uninstall method
   *
   * @return void
   */
  function postflight($type, $parent) 
  {
    return true;
  }
}