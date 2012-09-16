<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Bootstrap navbar item
 *
 * @package   Nexeck/Menu
 * @author    Marcel Beck <marcel.beck@outlook.com>
 * @copyright (c) 2012 Marcel Beck
 */
abstract class Nexeck_Menu_Bootstrap_Navbar_Item extends Menu_Bootstrap_Item
{
    /**
     * @param string $name
     * @param string $url
     *
     * @param null   $target
     *
     * @throws LogicException
     * @return Nexeck_Menu_Item
     */
    public function add_child($name, $url, $target = null)
    {
        if ($this->parent() !== null) {
            throw new LogicException('A Navbar Item which has a parent is not allowed to have a child.');
        }
        $child = Menu::create_item($name, $url, $target);

        $child->parent($this);

        return $this->_children[] = $child;
    }
}

