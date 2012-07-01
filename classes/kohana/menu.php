<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Menu helper.
 *
 * @package   Kohana/Menu
 * @author    Marcel Beck <marcel.beck@mbeck.org>
 * @copyright (c) 2012 Marcel Beck
 */
abstract class Kohana_Menu
{
    /**
     * @var Menu_Item[]
     */
    protected $_items;

    /**
     * Menu Template
     *
     * @var string
     */
    protected $_template;

    /**
     * @static
     *
     * @param string $name
     * @param string $url
     *
     * @param null   $target
     *
     * @return Menu_Item
     */
    public static function create_item($name, $url, $target = null)
    {
        return new Menu_Item($name, $url, $target);
    }

    /**
     * @param string $name
     * @param string $url
     *
     * @param null   $target
     *
     * @return Menu_Item
     */
    public function add_item($name, $url, $target = null)
    {
        return $this->_items[] = self::create_item($name, $url, $target);
    }

    /**
     * @return Menu_Item[]
     */
    public function items()
    {
        return $this->_items;
    }

    /**
     * @return string
     */
    public function template()
    {
        return $this->_template;
    }
} // End Kohana_Menu
