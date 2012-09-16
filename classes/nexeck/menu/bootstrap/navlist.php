<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Bootstrap navlist
 *
 * <code>
 * $navlist        = new Menu_Bootstrap_Navlist();
 * $navlist_item_1 = $navlist->add_item('Item 1', Route::url('default', array('controller' => 'welcome', 'action' => 'index')));
 * $navlist_item_1->add_child('Item 1 Child 1', 'http://google.de');
 * $navlist->add_devider();
 * $navlist_item_2 = $navlist->add_item('Item 2', '/test/bla');
 * $navlist_item_2->add_child('Item 2 Child 1', '/rofl/kopter');
 * $navlist_item_2->add_devider();
 * $navlist_child2 = $navlist_item_2->add_child('Item 2 Child 2', '');
 * $navlist_item_2->add_header('Nav Header');
 * $navlist_child2->add_child('Child Item 2 Child 2', '');
 *
 * $this->template->set('navlist', $navlist);
 * </code>
 *
 * @package   Nexeck/Menu
 * @author    Marcel Beck <marcel.beck@outlook.com>
 * @copyright (c) 2012 Marcel Beck
 */
abstract class Nexeck_Menu_Bootstrap_Navlist extends Menu_Bootstrap
{
    /**
     * Menu Template
     *
     * @var string
     */
    protected $_template = 'menu/bootstrap/navlist.twig';

    /**
     * @static
     *
     * @param string $name
     * @param string $url
     *
     * @param null   $target
     *
     * @return \Menu_Bootstrap_Navlist_Item
     */
    public static function create_item($name, $url, $target = null)
    {
        return new Menu_Bootstrap_Navlist_Item($name, $url, $target);
    }

    /**
     * @param string $name
     * @param string $url
     *
     * @param null   $target
     *
     * @return \Menu_Bootstrap_Navlist_Item
     */
    public function add_item($name, $url, $target = null)
    {
        return ($this->_items[] = Menu_Bootstrap_Navlist::create_item($name, $url, $target));
    }
}

