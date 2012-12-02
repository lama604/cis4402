<?php
/**
 * @version $Id: rokquickcart.php 44792 2011-11-05 16:18:11Z steph $
 * @author RocketTheme, LLC http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2012 RocketTheme, LLC
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');


class RokQuickCartModelRokQuickCart extends JModelList
{
	/**
	 * Constructor.
	 *
	 * @param	array	An optional associative array of configuration settings.
	 * @see		JController
	 * @since	1.6
	 */
	public function __construct($config = array())
	{
		if (empty($config['filter_fields'])) {
			$config['filter_fields'] = array(
				'price', 'a.price',
				'name', 'a.name',
                'ordering', 'a.ordering',
                'published', 'a.published',
                'params', 'a.params',
			);
		}

		parent::__construct($config);
	}

    /**
	 * Method to auto-populate the model state.
	 *
	 * Note. Calling getState in this method will result in recursion.
	 *
	 * @return	void
	 * @since	1.6
	 */
	protected function populateState($ordering = 'ordering', $direction = 'ASC')
	{
		$app = JFactory::getApplication();

		// List state information
		//$value = $app->getUserStateFromRequest('global.list.limit', 'limit', $app->getCfg('list_limit'));
		$value = JRequest::getUInt('limit', $app->getCfg('list_limit', 0));
		$this->setState('list.limit', $value);

		//$value = $app->getUserStateFromRequest($this->context.'.limitstart', 'limitstart', 0);
		$value = JRequest::getUInt('limitstart', 0);
		$this->setState('list.start', $value);

		$orderCol	= JRequest::getCmd('filter_order', 'a.ordering');
		if (!in_array($orderCol, $this->filter_fields)) {
			$orderCol = 'a.ordering';
		}
		$this->setState('list.ordering', $orderCol);

		$listOrder	=  JRequest::getCmd('filter_order_Dir', 'ASC');
		if (!in_array(strtoupper($listOrder), array('ASC', 'DESC', ''))) {
			$listOrder = 'ASC';
		}
		$this->setState('list.direction', $listOrder);

		$params = $app->getParams();
		$this->setState('params', $params);
		$user		= JFactory::getUser();

		$this->setState('filter.published', 1);

		$this->setState('layout', JRequest::getCmd('layout'));
	}

    /**
	 * Get the master query for retrieving a list of articles subject to the model state.
	 *
	 * @return	JDatabaseQuery
	 * @since	1.6
	 */
	function getListQuery()
	{
		// Create a new query object.
		$db = $this->getDbo();
		$query = $db->getQuery(true);

		// Select the required fields from the table.
		$query->select(
			$this->getState(
				'list.select',
				'a.id, a.name, a.price, a.shipping, a.description, a.image, a.params'
			)
		);

		$query->from('#__rokquickcart AS a');
        $query->where('published = 1');
		// Add the list ordering clause.
        //TODO Add Sorting
		//$query->order($this->getState('list.ordering', 'a.ordering').' '.$this->getState('list.direction', 'ASC'));
        $query->order('a.ordering ASC');


		return $query;
	}

	/**
	 * Method to get a list of items.
	 *
	 * Overriden to inject convert the params field into a JParameter object.
	 *
	 * @return	mixed	An array of objects on success, false on failure.
	 * @since	1.6
	 */
	public function getItems()
	{
		$items	= parent::getItems();
		return $items;
	}


    /**
     * Method to get the total number of rokquickcart items
     *
     * @access public
     * @return integer
     */
//	function getTotal()
//	{
//		// Lets load the content if it doesn't already exist
//		if (empty($this->total))
//		{
//			$this->total = count($this->getItems());
//		}
//
//		return $this->total;
//	}


	public function getStart()
	{
		return $this->getState('list.start');
	}
}