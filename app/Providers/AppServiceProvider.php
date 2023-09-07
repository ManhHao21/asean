<?php

namespace App\Providers;

use App\Models\Categories;
use App\Models\Option;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        $option = Option::where('key', 'post')->first();
        if ($option) {
            $optionValue = json_decode($option->value, true);
            $cateIds = $optionValue['cate'];
            $cates = Categories::whereIn('id', $cateIds)->get();
            View::share('fontend.layout.blog',  $cates);
        }
        $homePower = Option::where('key', 'home-power')->first();
        if ($homePower) {
            $optionHomePower = json_decode($homePower->value, true);
            View::share('fontend.layout.power',  $optionHomePower);
        }
    }
}
