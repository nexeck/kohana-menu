<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Bootstrap Menu
 *
 * @package   Nexeck/Menu
 * @author    Marcel Beck <marcel.beck@outlook.com>
 * @copyright (c) 2012 Marcel Beck
 */
abstract class Nexeck_Menu_Bootstrap extends Menu
{
    /**
     * @var string
     */
    protected $_position;

    /**
     * @static
     *
     * @param string $name
     * @param string $url
     *
     * @param null   $target
     *
     * @return \Menu_Bootstrap_Item|\Menu_Item
     */
    public static function create_item($name, $url, $target = null)
    {
        return new Menu_Bootstrap_Item($name, $url, $target);
    }

    /**
     * @param string $name
     * @param string $url
     *
     * @param null   $target
     *
     * @return \Menu_Bootstrap_Item|\Menu_Item
     */
    public function add_item($name, $url, $target = null)
    {
        return $this->_items[] = Menu_Bootstrap::create_item($name, $url, $target);
    }

    /**
     * Creates a devider
     *
     * @static
     * @return Menu_Bootstrap_Devider
     */
    public static function create_devider()
    {
        return new Menu_Bootstrap_Devider();
    }

    /**
     * Creates a header
     *
     * @static
     *
     * @param string $label
     *
     * @return Menu_Bootstrap_Header
     */
    public static function create_header($label)
    {
        return new Menu_Bootstrap_Header($label);
    }

    /**
     * Add devider
     *
     * @return Nexeck_Menu_Bootstrap
     */
    public function add_devider()
    {
        $this->_items[] = self::create_devider();
        return $this;
    }

    /**
     * Add header
     *
     * @param string $label
     *
     * @return Nexeck_Menu_Bootstrap
     */
    public function add_header($label)
    {
        $this->_items[] = self::create_header($label);
        return $this;
    }

    /**
     * @param null|string $position
     *
     * @return Nexeck_Menu_Bootstrap_Navbar|string
     */
    public function position($position = null)
    {
        if ($position === null) {
            return $this->_position;
        }
        $this->_position = (string) $position;
        return $this;
    }
}

