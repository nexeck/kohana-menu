<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Menu devider helper.
 *
 * @package   Kohana/Menu
 * @author    Marcel Beck <marcel.beck@outlook.com>
 * @copyright (c) 2012 Marcel Beck
 */
abstract class Kohana_Menu_Bootstrap_Devider
{

    /**
     * Check if this is a devider
     *
     * @return bool
     */
    public function is_devider()
    {
        return true;
    }
} // End Kohana_Menu_Bootstrap_Devider
