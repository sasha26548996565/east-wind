<?php

declare(strict_types=1);

namespace App\View\Composers;

use App\Menu\Menu;
use App\Menu\MenuItem;
use Illuminate\View\View;

class MenuComposer implements ComposerContract
{
    public function compose(View $view): void
    {
        $menu = Menu::make()
            ->addItem(MenuItem::make(route('home'), 'Главная'))
            ->addItem(MenuItem::make(route('bot.index'), 'Бот'));

        $view->with('menu', $menu);
    }
}
