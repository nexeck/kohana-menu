<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Bootstrap item
 *
 * @package   Nexeck/Menu
 * @author    Marcel Beck <marcel.beck@outlook.com>
 * @copyright (c) 2012 Marcel Beck
 */
abstract class Nexeck_Menu_Bootstrap_Item extends Menu_Item
{
    /**
     * Add devider
     *
     * @return Nexeck_Menu_Bootstrap_Item
     */
    public function add_devider()
    {
        $this->_children[] = Menu_Bootstrap::create_devider();
        return $this;
    }

    /**
     * Add header
     *
     * @param string $label
     *
     * @return Nexeck_Menu_Bootstrap_Item
     */
    public function add_header($label)
    {
        $this->_children[] = Menu_Bootstrap::create_header($label);
        return $this;
    }
}

