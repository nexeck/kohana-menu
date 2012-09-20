# [Menu Module](https://github.com/nexeck/kohana-menu) for the Kohana framework

## Features
* Supports [Twitter Bootstrap](http://twitter.github.com/bootstrap/)
* Supports Twig template engine [Twig Kohana module](https://github.com/nexeck/kohana-twig)

---
## Installation

Add the submodule:

    git submodule add git://github.com/nexeck/kohana-menu.git modules/menu

**Note:** [Guide for Kohana modules](http://kohanaframework.org/3.2/guide/kohana/modules)

### Kohana Modules
    Kohana::modules(array(
        ...
        'menu' => MODPATH . 'menu',

---
## Usage

### Create Bootstrap Navbar Top

    $navbar_top = new Menu_Bootstrap_Navbar();

    $navbar_top->position(Menu_Bootstrap_Navbar::POSITION_TOP);
    $navbar_top->brand('Brand Menu');
    $navbar_top_item_1 = $navbar_top->add_entry('Item 1', 'right');
    $navbar_top_item_1->add_child('Item 1 Child 1', 'http://google.de', '_blank');

    $navbar_top->add_devider();

    $navbar_top_item_2 = $navbar_top->add_entry('Item 2');
    $navbar_top_item_2->add_child('Item 2 Child 1', 'rofl/kopter');
    $navbar_top_item_2->add_devider();
    $navbar_top_item_2->add_child('Item 2 Child 2', '#');
    $navbar_top_item_2->add_header('Nav Header');

    $this->template->set('navbar_top', $navbar_top);

#### Include in twig template

    {% if navbar_top is defined %}
        {% include "menu/default.twig" with {'menu' : navbar_top } only %}
    {% endif %}

### Create Bootstrap Navbar Bottom

    $navbar_bottom = new Menu_Bootstrap_Navbar();

    $navbar_bottom->position(Menu_Bootstrap_Navbar::POSITION_BOTTOM);
    $navbar_bottom_item_1 = $navbar_bottom->add_entry('Item 1');
    $navbar_bottom_item_1->add_child('Item 1 Child 1', 'http://google.de');

    $navbar_bottom->add_devider();

    $navbar_bottom_item_2 = $navbar_bottom->add_entry('Item 2', 'right');
    $navbar_bottom_item_2->add_child('Item 2 Child 1', '/rofl/kopter');
    $navbar_bottom_item_2->add_devider();
    $navbar_bottom_item_2->add_child('Item 2 Child 2', '#');
    $navbar_bottom_item_2->add_header('Nav Header');

    $this->template->set('navbar_bottom', $navbar_bottom);

#### Include in twig template

    {% if navbar_bottom is defined %}
        {% include "menu/default.twig" with {'menu' : navbar_bottom } only %}
    {% endif %}

### Create Bootstrap Navlist

    $navlist = new Menu_Bootstrap_Navlist();

    $navlist->add_header('Home');
    $navlist->add_item('Welcome', Route::url('default', array('controller' => 'welcome',)));

    $navlist->add_devider();

    $navlist->add_header('Demo');
    $navlist->add_item('Menu', Route::url('default', array('controller' => 'demo','action' => 'menu',)));
    $navlist->add_item('Alert', Route::url('default', array('controller' => 'demo','action' => 'alert',)));
    $navlist->add_item('Pagination', Route::url('default', array('controller' => 'demo','action' => 'pagination',)));

    $this->template->set('navlist', $navlist);

#### Include in twig template

    {% if navlist is defined %}
        {% include "menu/default.twig" with {'menu' : navlist } only %}
    {% endif %}
