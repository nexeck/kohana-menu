<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Menu item helper.
 *
 * @package   Kohana/Menu
 * @author    Marcel Beck <marcel.beck@outlook.com>
 * @copyright (c) 2012 Marcel Beck
 */
abstract class Kohana_Menu_Item
{

    /**
     * Name of this menu item (used for id by parent menu)
     *
     * @var string
     */
    protected $_name = null;

    /**
     * Label to output, name is used by default
     *
     * @var string
     */
    protected $_label = null;

    /**
     * URL to use in the anchor tag
     *
     * @var string
     */
    protected $_url = null;

    /**
     * URL Target
     *
     * @var null|string
     */
    protected $_target = null;

    /**
     * Child items
     *
     * @var Menu_Item[]
     */
    protected $_children;

    /**
     * Parent item
     *
     * @var Menu_Item|null
     */
    protected $_parent = null;

    /**
     * whether the item is current. null means unknown
     *
     * @var bool
     */
    protected $_is_current = false;

    /**
     * @var string
     */
    protected $_url_check = Menu_Item::URL_MATCH_PARTIAL;

    const URL_MATCH_EXACT = 'exact';

    const URL_MATCH_PARTIAL = 'partial';

    /**
     * Class constructor
     *
     * @param string $name The name of this menu, which is how its parent will
     *                     reference it. Also used as label if label not specified
     * @param string $url
     * @param null   $target
     */
    public function __construct($name, $url, $target = null)
    {
        $this->_name   = (string) $name;
        $this->url($url);
        $this->target($target);

        $this->is_current_uri();
    }

    /**
     * @param null|string $url
     *
     * @return Kohana_Menu_Item
     */
    public function url($url = null)
    {
        if (func_num_args() > 0) {
            $this->_url = (string) $url;
            if (strlen($this->_url) === 0)
            {
                $this->_url = '/';
            }
            return $this;
        }
        return $this->_url;
    }

    /**
     * @param null|string $target
     *
     * @return Kohana_Menu_Item|null|string
     */
    public function target($target = null)
    {
        if (func_num_args() > 0) {
            $this->_target = (string) $target;
            return $this;
        }
        return $this->_target;
    }

    /**
     * @param null|string $label
     *
     * @return Kohana_Menu_Item|null|string
     */
    public function label($label = null)
    {
        if (func_num_args() > 0) {
            $this->_label = (string) $label;
            return $this;
        }
        return ($this->_label !== null) ? $this->_label : $this->_name;
    }

    /**
     * Check if this item is the current item
     *
     * @return bool|null
     */
    public function is_current()
    {
        return (bool) $this->_is_current;
    }

    /**
     * @param Kohana_Menu_Item|null $parent
     *
     * @return Kohana_Menu_Item
     */
    public function parent(Kohana_Menu_Item $parent = null)
    {
        if (func_num_args() > 0) {
            $this->_parent = $parent;
            return $this;
        }

        return $this->_parent;
    }

    /**
     * @param string $name
     * @param string $url
     *
     * @param null   $target
     *
     * @return Kohana_Menu_Item
     */
    public function add_child($name, $url, $target = null)
    {
        $child = Menu::create_item($name, $url, $target);

        $child->parent($this);

        return $this->_children[] = $child;
    }

    /**
     * Check if this item has childrens
     *
     * @return bool
     */
    public function has_children()
    {
        return !empty($this->_children);
    }

    /**
     * @return Menu_Item[]
     */
    public function children()
    {
        return $this->_children;
    }

    /**
     * @return bool
     */
    public function is_current_uri()
    {
        switch ($this->_url_check) {
            case Menu_Item::URL_MATCH_PARTIAL:
                $this->_is_current = (strpos(Request::current()->url(), $this->url()) !== false);
                break;
            case Menu_Item::URL_MATCH_EXACT:
            default:
                $this->_is_current = (bool) ($this->url() === Request::current()->url());
                break;
        }
        return $this->_is_current;
    }
} // End Kohana_Menu_Item
