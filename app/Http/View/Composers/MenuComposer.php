<?php

namespace App\Http\View\Composers;

use App\Entities\Menu;
use App\Repositories\CartRepository;
use Illuminate\View\View;

class MenuComposer
{

    protected $cart;

    public function __construct(CartRepository $cart)
    {
        $this->cart = $cart;
    }

    public function compose(View $view)
    {
        $getMenus = Menu::published()->orderBy('order_by', 'desc')->latest()->get();
        $view->with('getMenus', $getMenus);
    }
}
