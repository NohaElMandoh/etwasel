<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Slider;
use App\Models\CampanyCategory;
use App\Models\Website;
use App\Models\Contact;
use App\Models\City;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
   
  public function register()
    {
        view()->composer('*', function ($view) {

            $view->with('categories',  Category::all());
          $view->with('slider',  Slider::all());
            $view->with('campany_categories',  CampanyCategory::all());
            $view->with('website',  Website::find(1));
            $view->with('ContactUs',  Contact::all());
             $view->with('Cities',  City::all());
            

        });
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
