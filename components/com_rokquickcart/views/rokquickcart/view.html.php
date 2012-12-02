<?php
/**
 * @version $Id: view.html.php 50789 2012-03-11 14:41:23Z steph $
 * @author RocketTheme, LLC http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2012 RocketTheme, LLC
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport( 'joomla.application.component.view');
if (!class_exists("RokQuickCartHelper")){
	require_once(JPath::clean(JPATH_COMPONENT.'/helpers/rokquickcart.php'));
}

class RokQuickCartViewRokQuickCart extends JView
{
	var $cart_images_dir = 'images/rokquickcart/';
    protected $items;
    protected $pagination;
    protected $state;

	function display($tpl = null)
	{

		$app                = &JFactory::getApplication();
        $option             = JRequest::getCmd('option');
		$user		        =& JFactory::getUser();
		$doc	            =& JFactory::getDocument();
        $items		        = $this->get('Items');
		$this->pagination	= $this->get('Pagination');
		$this->state		= $this->get('State');

		// Check for errors.
		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}


		
		$com_params = &JComponentHelper::getParams($option);
		
		$configured=true;
		
		//output the checkout mech
		if (!$com_params->get('checkout_method',false)) {
			$configured=false;
		}
		$config_options = array();

		$checkout_mode = $com_params->get('checkout_mode');
		$shipping_per_item = false;
		$shipping = false;

		if ($checkout_mode == "production"){
			$config_options[]  = 'simpleCart.sandboxMode = false;';
		}
		$uri =& JURI::getInstance();
		
		$config_options[]  = 'simpleCart.continue_url = "' .$uri->toString(array('scheme', 'user', 'pass', 'host', 'port', 'path', 'query', 'fragment')).'";';
		
		$checkout_method = $com_params->get('checkout_method');
		if ($checkout_method == 'PayPal') {
			$config_options[] = 'simpleCart.checkoutTo = PayPal;'; 
			$config_options[] = 'simpleCart.email = "'.$com_params->get('paypal_email').'";';
			$config_options[]  = 'simpleCart.currency = '.$com_params->get('paypal_currency').';';
			$currency_symbol = $this->_getCurrecySymbol($com_params->get('paypal_currency'));
			
			$shipping = $com_params->get('shipping',false);
			if ($shipping) { 
				$shipping_type = $com_params->get('shipping_type','items');
				switch ($shipping_type) {
					case "flat":
						$config_options[]  = 'simpleCart.shippingFlatRate = '.$com_params->get('shipping_flat',0).';';	
						break;
					case "quantity":
						$config_options[]  = 'simpleCart.shippingQuantityRate = '.$com_params->get('shipping_quantity',0).';';	
						break;
					case  "percent":
						$config_options[]  = 'simpleCart.shippingTotalRate = '.$com_params->get('shipping_percent',0).';';	
						break;
					default:
						$shipping_per_item = true;
						break;
				}
			}
		
		}
		else {
			$config_options[] = 'simpleCart.checkoutTo = GoogleCheckout;';
			$config_options[] = 'simpleCart.merchantId = "'.$com_params->get('googlecheckout_merchant_id').'";';
			$config_options[]  = 'simpleCart.currency = '.$com_params->get('googlecheckout_currency').';';
			$currency_symbol = $this->_getCurrecySymbol($com_params->get('googlecheckout_currency'));	
		}
		
		$tax = $com_params->get('tax',false);
		if ($tax) {
			$config_options[] = 'simpleCart.taxRate = ' .$com_params->get('tax_rate',0.00) . ';'; 	
		}
		
		// set cart headers
		$config_options[] = 'simpleCart.cartHeaders = [ "name", "thumb_image" ,  "size", "color", "Quantity_input" , "increment",  "decrement", "Total" ];';
		
		
		// Add CSS
        RokQuickCartHelper::load_css($com_params->get('include_css',1), $com_params);
		
		// Add JS
		$doc->addScript('components/com_rokquickcart/assets/js/simplecart/simpleCart.min.js');
		JHTML::_('behavior.mootools');
		$config_vars_js = implode("\n", $config_options);
		$doc->addScriptDeclaration($config_vars_js);
		
        $doc->addScriptDeclaration("window.addEvent('domready', function() { 
                                     var blocks = $$('.cart_product_content'), height = 0, tmp = 0;
                                                             if (blocks.length) {
                                                     blocks.each(function(block, i) { 
                                                         tmp = block.getSize().y;
                                                         if (tmp > height) height = tmp;
                                                     });
                                                     blocks.setStyle('height', height);
                                         }
                                     });");

        $current_url = $uri->toString(array('scheme', 'user', 'pass', 'host', 'port', 'path', 'query', 'fragment'));
        $page_title = $com_params->get('page_title');
		$use_rokbox = $com_params->get('use_rokbox',1);
        $cols = $com_params->get('page_columns',2);
        $image_width = $com_params->get('shelf_image_width', 100);
        $items = self::_prepItems($items);
        $this->items = $items;

		// Assign page refs
        $this->assignRef('current_url',         $current_url);
        $this->assignRef('image_width',         $image_width);
        $this->assignRef('cols',                $cols);
		$this->assignRef('tax',	                $tax);
		$this->assignRef('shipping',            $shipping);
		$this->assignRef('page_title',          $page_title);
		$this->assignRef('shipping_per_item',	$shipping_per_item);
		$this->assignRef('use_rokbox',          $use_rokbox);
		$this->assignRef('currency_symbol',     $currency_symbol);
		$this->assignRef('checkout_mode',       $checkout_mode);

		parent::display($tpl);

	}
	
	
	function _prepItems(&$items){
		$app = &JFactory::getApplication();
        $option = JRequest::getCmd('option');
        jimport( 'joomla.html.parameter' );
		$com_params = &JComponentHelper::getParams($option);
        $default_image = $com_params->get('default_image', 'images/rokquickcart/samples/noimage.png');
		reset($items);
		foreach($items as $item) {
		    $item->_params = new JRegistry($item->params);
		    $item->_component_params = $com_params;
		    $item->sizes = false;
		    $item->show_sizes =  $item->_params->get('has_sizes');
            $sizes_r = $item->_params->get('sizes');
            if (!empty($sizes_r) && is_object($sizes_r)) $sizes_r = array_values(get_object_vars($sizes_r));
		    if(!empty($sizes_r) && is_array($sizes_r)){
		    	$size_options = array();
				foreach ($sizes_r as $key=>$value) {
                    $size_options[]	= JHtml::_('select.option',	$value, $value);
				}
			    $item->sizes = JHTML::_('select.genericlist', $size_options, '', 'class="item_size" size="1" ', 'value', 'text');
		    }
		    $item->colors = false;
		    $item->show_colors =  $item->_params->get('has_colors');
            $colors_r = $item->_params->get('colors');
            if (!empty($colors_r) && is_object($colors_r)) $colors_r = array_values(get_object_vars($colors_r));
		    if(!empty($colors_r) && is_array($colors_r)){
		    	$color_options = array();
				foreach ($colors_r as $key=>$value) {
                    $color_options[]	= JHtml::_('select.option',	$value, $value);
				}
			    $item->colors = JHTML::_('select.genericlist', $color_options, '', 'class="item_color" size="1" ', 'value', 'text');
		    }
            $item->image = (file_exists($item->image)) ? $item->image : $default_image;
            $item->fullImage = RokQuickCartHelper::getFullImage($item->image);
            $item->shelfImage = RokQuickCartHelper::getShelfImage($item->image);
            $item->shelfImageHeight = RokQuickCartHelper::getShelfImageHeight($item->image);
            $item->shelfImageWidth = RokQuickCartHelper::getShelfImageWidth($item->image);
            $item->cartImage = RokQuickCartHelper::getCartImage($item->image);
		}
		return $items;
	}

	function _getCurrecySymbol($currency) {
		switch($currency){
			case 'JPY':
				return "&yen;";
			case 'EUR':
				return "&euro;";
			case 'GBP':
				return "&pound;";
			case 'USD':
			case 'CAD':
			case 'AUD':
			case 'NZD':
			case 'HKD':
			case 'SGD':
				return "&#36;";
			default:
				return "";
		}
	}
}
