<?php defined('SYSPATH') or die('No direct script access.');

/**
 * <code>
 * $navbar_top = new Menu_Bootstrap_Navbar();
 * $navbar_top->position(Menu_Bootstrap_Navbar::POSITION_TOP);
 * $navbar_top->brand('Brand Menu');
 * $navbar_top_item_1 = $navbar_top->add_entry('Item 1', 'right');
 * $navbar_top_item_1->add_child('Item 1 Child 1', 'http://google.de', '_blank');
 * $navbar_top->add_devider();
 * $navbar_top_item_2 = $navbar_top->add_entry('Item 2');
 * $navbar_top_item_2->add_child('Item 2 Child 1', 'rofl/kopter');
 * $navbar_top_item_2->add_devider();
 * $navbar_top_item_2->add_child('Item 2 Child 2', '#');
 * $navbar_top_item_2->add_header('Nav Header');
 * </code>
 */
class Menu extends Nexeck_Menu
{
}
