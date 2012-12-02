<?php
/**
 * @version $Id: rokquickcart.php 50792 2012-03-11 22:33:24Z steph $
 * @author RocketTheme, LLC http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2012 RocketTheme, LLC
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */


jimport('joomla.filesystem.folder');
jimport('joomla.filesystem.file');
jimport('joomla.filesystem.path');
if (!class_exists("Thumbnail")) {
    require_once(JPath::clean(JPATH_ADMINISTRATOR . '/components/com_rokquickcart/libs/thumbnail.inc.php'));
}


/**
 *
 */
class RokQuickCartHelper
{
    /**
     * @param $css_style
     * @param $params
     */
    static function load_css($css_style, &$params)
    {
        $doc =& JFactory::getDocument();

        if ($css_style == 1) {
            // Add main css
            $css = RokQuickCartHelper::_getCSSPath('rokquickcart.css', 'com_rokquickcart');
            $iebrowser = RokQuickCartHelper::_getBrowser();
            if ($css) {
                $doc->addStyleSheet($css);
            }
            // Add browser specific css
            if ($iebrowser) {
                $iecss = RokQuickCartHelper::_getCSSPath("rokquickcart-ie" . $iebrowser . ".css", 'com_rokquickcart');
                if ($iecss) {
                    $doc->addStyleSheet($iecss);
                }
            }
            $shelf_image_width = $params->get('shelf_image_width', 100);
            $shelf_item_width = $params->get('shelf_item_width', 350);
            $cart_item_height = $params->get('cart_item_height', 200);

            $css = ".cart_product_l {width:" . $shelf_image_width . "px;} ";
            $css .= ".cart_product_r {margin-left:" . $shelf_image_width . "px;} ";
            $css .= ".simpleCart_shelfItem {width:" . $shelf_item_width . "px;}";
            $css .= ".itemContainer {height:" . $cart_item_height . "px;}";
            $doc->addStyleDeclaration($css);
        }
    }

    /**
     * @param $cssfile
     * @param $component
     * @return bool|string
     */
    function _getCSSPath($cssfile, $component)
    {
        $app = &JFactory::getApplication();
        $tPath = 'templates/' . $app->getTemplate() . '/css/' . $cssfile;
        $bPath = 'components/' . $component . '/css/' . $cssfile;

        if (file_exists(JPATH_BASE . DS . $tPath)) {
            return JURI::Root(true) . '/' . $tPath;
        }
        else if (file_exists(JPATH_BASE . DS . $bPath)) {
            return JURI::Root(true) . '/' . $bPath;
        }
        else {
            return false;
        }
    }

    /**
     * @return bool|mixed
     */
    function _getBrowser()
    {
        $agent = (isset($_SERVER['HTTP_USER_AGENT'])) ? strtolower($_SERVER['HTTP_USER_AGENT']) : false;
        $ie_version = false;

        if (preg_match("#msie#i", $agent) && !preg_match("#opera#i", $agent)) {
            $val = explode(" ", stristr($agent, "msie"));
            $ver = explode(".", $val[1]);
            $ie_version = $ver[0];
            $ie_version = preg_replace("#[^0-9,.,a-z,A-Z]#", "", $ie_version);
        }

        return $ie_version;
    }

    /**
     * @param $image
     * @return string
     */
    static function getShelfImage($image)
    {
        if (empty($image)) {
            return '';
        }
        $config =& JFactory::getConfig();
        $app = JFactory::getApplication();
        $com_params = &JComponentHelper::getParams('com_rokquickcart');
        $path = $app->isAdmin() ? 'administrator/' : '';
        $full_image_file = JPath::clean(JPATH_ROOT . '/' . $image);
        $image_file = JPath::clean(JPATH_CACHE . '/rokquickcart/shelf/' . $image);
        $image_url = JURI::root(false) . $path . 'cache/rokquickcart/shelf/' . $image;
        $image_width = (int)$com_params->get('shelf_image_width', 100);
        if (!RokQuickCartHelper::createThumbImage($full_image_file, $image_file, $image_width)) {
            return '';
        }
        return $image_url;
    }

    /**
     * @param $image
     * @return int
     */
    static function getShelfImageHeight($image)
    {
        $com_params = &JComponentHelper::getParams('com_rokquickcart');
        $shelf_image_size = (int)$com_params->get('shelf_image_size');
        if (empty($image)) {
            return 0;
        }
        if (empty($shelf_image_size)) {
            RokQuickCartHelper::getShelfImage($image);
            $image_file = JPath::clean(JPATH_CACHE . '/rokquickcart/shelf/' . $image);
            $_shelf_image_size= getimagesize($image_file);
        }
        return $_shelf_image_size[1];
    }

    /**
     * @param $image
     * @return int
     */
    static function getShelfImageWidth($image)
    {
        $com_params = &JComponentHelper::getParams('com_rokquickcart');
        $shelf_image_size = (int)$com_params->get('shelf_image_size');
        if (empty($image)) {
            return 0;
        }
        if (empty($shelf_image_size)) {
            RokQuickCartHelper::getShelfImage($image);
            $image_file = JPath::clean(JPATH_CACHE . '/rokquickcart/shelf/' . $image);
            $_shelf_image_size = getimagesize($image_file);
        }
        return $_shelf_image_size[0];
    }

    /**
     * @param $image
     * @return string
     */
    static function getCartImage($image)
    {
        if (empty($image)) {
            return '';
        }
        $config =& JFactory::getConfig();
        $app = JFactory::getApplication();
        $com_params = &JComponentHelper::getParams('com_rokquickcart');
        $path = $app->isAdmin() ? 'administrator/' : '';
        $full_image_file = JPath::clean(JPATH_ROOT . '/' . $image);
        $image_file = JPath::clean(JPATH_CACHE . '/rokquickcart/cart/' . $image);
        $image_url = JURI::root(false) . $path . 'cache/rokquickcart/cart/' . $image;
        $image_width = (int)$com_params->get('cart_image_width', 100);
        if (!RokQuickCartHelper::createThumbImage($full_image_file, $image_file, $image_width)) {
            return '';
        }
        return $image_url;
    }

    /**
     * @param $image
     * @return int
     */
    static function getCartImageHeight($image)
    {
        $com_params = &JComponentHelper::getParams('com_rokquickcart');
        $cart_image_size = (int)$com_params->get('cart_image_size');
        if (empty($image)) {
            return 0;
        }
        if (empty($cart_image_size)) {
            RokQuickCartHelper::getCartImage($image);
            $image_file = JPath::clean(JPATH_CACHE . '/rokquickcart/cart/' . $image);
            $_cart_image_size= getimagesize($image_file);
        }
        return $_cart_image_size[1];
    }

    /**
     * @param $image
     * @return int
     */
    static function getCartImageWidth($image)
    {
        $com_params = &JComponentHelper::getParams('com_rokquickcart');
        $cart_image_size = (int)$com_params->get('cart_image_size');
        if (empty($image)) {
            return 0;
        }
        if (empty($cart_image_size)) {
            RokQuickCartHelper::getCartImage($image);
            $image_file = JPath::clean(JPATH_CACHE . '/rokquickcart/cart/' . $image);
            $_cart_image_size= getimagesize($image_file);
        }
        return $_cart_image_size[0];
    }

    /**
     * @param $image
     * @return mixed
     */
    static function getFullImage($image)
    {
        return $image;
    }

    /**
     * @param $full_image_path
     * @param $thumb_image_path
     * @param $image_width
     * @return bool
     */
    function createThumbImage($full_image_path, $thumb_image_path, $image_width)
    {

        if (!JFile::exists($full_image_path)) {
            return false;
        }
        if (!JFolder::exists(dirname($thumb_image_path))) {
            JFolder::create(dirname($thumb_image_path));
        }
        $current_size = 0;

        if (JFile::exists($thumb_image_path)) {
            $existing_thumb = new Thumbnail($thumb_image_path);
            $current_size = $existing_thumb->getCurrentWidth();
            $existing_thumb->destruct();
        }

        // create a new shelf image if the it doesnt exists, is older the full image, of if the image size has changed
        if (!JFile::exists($thumb_image_path) || (filemtime($full_image_path) > filemtime($thumb_image_path)) || $current_size != $image_width) {
            $thumb = new Thumbnail($full_image_path);

            if ($thumb->error) {
                echo "ERROR: " . $thumb->errmsg . ": " . $full_image_path;
                return false;
            }
            $thumb->resize($image_width);
            if (!is_writable(dirname($thumb_image_path))) {
                $thumb->destruct();
                return false;
            }
            $thumb->save($thumb_image_path);
            $thumb->destruct();
        }
        return true;
    }
}
