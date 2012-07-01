<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Menu item helper.
 *
 * @package   Kohana/Menu
 * @author    Marcel Beck <marcel.beck@mbeck.org>
 * @copyright (c) 2012 Marcel Beck
 */
abstract class Kohana_Menu_Bootstrap_Navlist_Item extends Menu_Bootstrap_Item
{

    /**
     * @var string
     */
    protected $_icon;

    /**
     * Setter/Getter icon
     *
     * @param null|string $icon
     *
     * @return Kohana_Menu_Bootstrap_Navlist_Item|string
     */
    public function icon($icon = null)
    {
        if ($icon === null) {
            return $this->_icon;
        }
        $this->_icon = (string) $icon;
        return $this;
    }
} // End Kohana_Menu_Bootstrap_Navlist_Item
