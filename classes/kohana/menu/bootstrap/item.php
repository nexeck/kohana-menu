<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Menu item helper.
 *
 * @package   Kohana/Menu
 * @author    Marcel Beck <marcel.beck@mbeck.org>
 * @copyright (c) 2012 Marcel Beck
 */
abstract class Kohana_Menu_Bootstrap_Item extends Menu_Item
{

    /**
     * Add devider
     *
     * @return Kohana_Menu_Bootstrap_Item
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
     * @return Kohana_Menu_Bootstrap_Item
     */
    public function add_header($label)
    {
        $this->_children[] = Menu_Bootstrap::create_header($label);
        return $this;
    }
} // End Kohana_Menu_Bootstrap_Item
