<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $pages = ['blog.post', 'blog.index', 'blog.article', 'blog.about', 'blog.contact', 'blog.messages'];
        \View::composer($pages, function ($view) {
            $cat_types = DB::table('category_types')->get();
            $view->with(['cat_types'=>$cat_types]);
        });

        
    }
}
