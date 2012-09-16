<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Bootstrap navbar
 *
 * <code>
 * $navbar_top = new Menu_Bootstrap_Navbar();
 * $navbar_top->position(Menu_Bootstrap_Navbar::POSITION_TOP);
 * $navbar_top->brand('Brand Menu');
 * $navbar_top_item_1 = $navbar_top->add_item('Item 1', null, 'right');
 * $navbar_top_item_1->add_child('Item 1 Child 1', 'http://google.de');
 * $navbar_top->add_devider();
 * $navbar_top_item_2 = $navbar_top->add_item('Item 2', '');
 * $navbar_top_item_2->add_child('Item 2 Child 1', 'rofl/kopter');
 * $navbar_top_item_2->add_devider();
 * $navbar_top_item_2->add_child('Item 2 Child 2', '#');
 * $navbar_top_item_2->add_header('Nav Header');
 *
 * $this->template->set('navbar_top', $navbar_top);
 * </code>
 *
 * @package   Nexeck/Menu
 * @author    Marcel Beck <marcel.beck@outlook.com>
 * @copyright (c) 2012 Marcel Beck
 */
abstract class Nexeck_Menu_Bootstrap_Navbar extends Menu_Bootstrap
{
    /**
     * @var string
     */
    protected $_template = 'menu/bootstrap/navbar.twig';

    /**
     * Position Top
     */
    const POSITION_TOP = 'top';

    /**
     * Position Bottom
     */
    const POSITION_BOTTOM = 'bottom';

    /**
     * @var string
     */
    protected $_brand;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->_position = Menu_Bootstrap_Navbar::POSITION_TOP;
    }

    /**
     * @static
     *
     * @param string $name
     * @param string $url
     *
     * @param null   $target
     *
     * @return \Menu_Bootstrap_Navbar_Item
     */
    public static function create_item($name, $url, $target = null)
    {
        return new Menu_Bootstrap_Navbar_Item($name, $url, $target);
    }

    /**
     * @param string $name
     * @param string $side
     *
     * @return \Menu_Bootstrap_Navbar_Item
     */
    public function add_entry($name, $side = 'left')
    {
        return ($this->_items[$side][] = Menu_Bootstrap_Navbar::create_item($name, null));
    }

    /**
     * Override add_item
     *
     * @param string $name
     * @param string $url
     * @param null   $target
     *
     * @return Menu_Bootstrap_Item
     */
    public function add_item($name, $url, $target = null)
    {
        return $this->add_entry($name);
    }

    /**
     * @param null|string $side
     *
     * @return Menu_Bootstrap_Navbar_Item[]
     */
    public function items($side = null)
    {
        if ($side === null) {
            return $this->_items;
        }
        return (isset($this->_items[$side])) ? $this->_items[$side] : array();
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

    /**
     * @param null|string $brand
     *
     * @return Nexeck_Menu_Bootstrap_Navbar|string
     */
    public function brand($brand = null)
    {
        if ($brand === null) {
            return $this->_brand;
        }
        $this->_brand = (string) $brand;
        return $this;
    }
}

