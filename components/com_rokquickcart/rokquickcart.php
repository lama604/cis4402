<?php
/**
 * @version $Id: rokquickcart.php 44788 2011-11-05 06:06:27Z btowles $
 * @author RocketTheme, LLC http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2012 RocketTheme, LLC
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
// no direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');
require_once JPATH_COMPONENT.'/helpers/route.php';

$controller = JController::getInstance('RokQuickCart');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
