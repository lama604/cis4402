<?php
/**
 * @version $Id: router.php 44868 2011-11-09 16:26:39Z steph $
 * @author RocketTheme, LLC http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2012 RocketTheme, LLC
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

defined('_JEXEC') or die;

jimport('joomla.application.categories');

/**
 * Build the route for the com_rokquickcart component
 *
 * @param	array	An array of URL arguments
 *
 * @return	array	The URL arguments to use to assemble the subsequent URL.
 */
function RokQuickCartBuildRoute(&$query){

    $session_namespace = 'com_rokquickcart.site';
    jimport('joomla.filter.output');

    $session =& JFactory::getSession();

    $segments = array();

	// get a menu item based on Itemid or currently active
	$app	= JFactory::getApplication();
	$menu	= $app->getMenu();

	if (empty($query['Itemid'])) {
		$menuItem = $menu->getActive();
	} else {
		$menuItem = $menu->getItem($query['Itemid']);
	}

//    if (!isset($query['view'])) {
//        $query['view'] = 'rokquickcart';
//    }

	// are we dealing with a rokquickcart that is attached to a menu item?
	if (isset($view)) {
		unset($query['view']);
		return $segments;
	}

    if (!isset($query['layout'])) {
        $query['layout'] = 'default';
    }

	if (isset($query['layout']))
	{
		if (!empty($query['Itemid']) && isset($menuItem->query['layout']))
		{
			if ($query['layout'] == $menuItem->query['layout']) {

				unset($query['layout']);
			}
		}
		else
		{
			if ($query['layout'] == 'default') {
				unset($query['layout']);
			}
		}
	}

	return $segments;
}


/**
 * Parse the segments of a URL.
 *
 * @param	array	The segments of the URL to parse.
 *
 * @return	array	The URL attributes to be used by the application.
 */
function RokQuickCartParseRoute($segments)
{
    $app	= JFactory::getApplication();
	$menu	= $app->getMenu();
	$item	= $menu->getActive();
    if (empty($item))
    {
        $item = $menu->getDefault();
        $menu->setActive($item->id);
    }
    $vars = array();
    if (count($segments)) {
//        $vars['layout'] = 'default';
//        $vars['view'] = 'rokquickcart';
    }
    return $vars;
}

