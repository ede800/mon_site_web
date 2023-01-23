<?php
/**
 * @package   Custom Element for Yootheme Pro
 * @author    Pixim Communication
 * @copyright Copyright (C) Pixim Communication
 * @license   //
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Uri\Uri;
use YOOtheme\Application;
use YOOtheme\Path;

class plgSystemPixim_elements extends CMSPlugin
{
    public function onAfterInitialise ()
    {
        if (class_exists(Application::class, false)) {
            $application = Application::getInstance();
			$directory = JPATH_ROOT.DIRECTORY_SEPARATOR.'plugins'.DIRECTORY_SEPARATOR."system".DIRECTORY_SEPARATOR."pixim_elements";
            $rootUrl = Uri::root(true);
            $application->load($directory.'/elements/yootheme/uikit.php');
        }
    }
}
