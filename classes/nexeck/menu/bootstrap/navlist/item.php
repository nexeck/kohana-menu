<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Bootstrap navlist item
 *
 * @package   Nexeck/Menu
 * @author    Marcel Beck <marcel.beck@outlook.com>
 * @copyright (c) 2012 Marcel Beck
 */
abstract class Nexeck_Menu_Bootstrap_Navlist_Item extends Menu_Bootstrap_Item
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
     * @return Nexeck_Menu_Bootstrap_Navlist_Item|string
     */
    public function icon($icon = null)
    {
        if ($icon === null) {
            return $this->_icon;
        }
        $this->_icon = (string) $icon;
        return $this;
    }
}

