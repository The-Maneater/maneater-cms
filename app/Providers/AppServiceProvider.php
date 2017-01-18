<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Menu\Laravel\Link;
use Spatie\Menu\Laravel\Menu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
        Menu::macro('admin', function(){
           return Menu::new()
                  ->addItemParentClass("top-admin-link")
                  ->addClass('nav navbar-nav')
                  ->add(Link::to('/admin/dashboard', '<i class="fa fa-home black-icon" aria-hidden="true"></i> Dashboard'))
                  ->submenu(Link::to('#', '<i class="fa fa-globe black-icon" aria-hidden="true"></i> Core')->setAttributes(['data-toggle' => 'collapse','data-target'=>'#coreSubMenu', 'role' => 'button']),
                      Menu::new()
                      ->addItemParentClass('sub-admin-link')
                      ->setAttributes(['id'=>'coreSubMenu'])
                      ->addClass('collapse')
                      ->link('/admin/core/stories', 'Articles')
                      ->link('/admin/core/events', 'Events')
                      ->link('/admin/core/layouts', 'Layouts')
                      ->link('/admin/core/web-front', 'Web Fronts')
                      ->link('/admin/core/photos', 'Photos')
                      ->link('/admin/core/graphics', 'Graphics')
                      ->link('/admin/core/polls', 'Polls')
                      ->link('/admin/core/issues', 'Issues')
                      ->link('/admin/core/volumes', 'Volume'))
                  ->add(Link::to('/admin/move', "MOVE"))
                  ->submenu(Link::to('#', '<i class="fa fa-user-o black-icon" aria-hidden="true"></i> Staff')->setAttributes(['data-toggle' => 'collapse','data-target'=>'#staffSubMenu', 'role' => 'button']),
                      Menu::new()
                      ->addItemParentClass('sub-admin-link')
                      ->setAttributes(['id' => 'staffSubMenu'])
                      ->addClass('collapse')
                      ->link('/admin/staff/positions', 'Positions')
                      ->link('/admin/staff/staffers', 'Staffers'))
                  ->add(Link::to('/admin/advertising', '<i class="fa fa-usd black-icon" aria-hidden="true"></i> Advertising'))
                  ->add(Link::to('/admin/newsletter', '<i class="fa fa-newspaper-o black-icon" aria-hidden="true"></i> Newsletter'));
        });
    }
}
