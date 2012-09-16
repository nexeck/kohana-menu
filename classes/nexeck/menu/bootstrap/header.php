<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Bootstrap header
 *
 * @package   Nexeck/Menu
 * @author    Marcel Beck <marcel.beck@outlook.com>
 * @copyright (c) 2012 Marcel Beck
 */
abstract class Nexeck_Menu_Bootstrap_Header
{
    /**
     * @var string
     */
    protected $_label;

    /**
     * @param string $label
     */
    public function __construct($label)
    {
        $this->_label = (string) $label;
    }

    /**
     * @return bool
     */
    public function is_header()
    {
        return true;
    }

    /**
     * @return string
     */
    public function label()
    {
        return $this->_label;
    }
}

