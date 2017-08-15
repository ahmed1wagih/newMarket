<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

use App\homeSetting;
use App\contactSetting;
use App\footerSetting;
use App\socialSetting;
use App\TermsSetting;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $homesettings=homeSetting::all();
        View::share('homesettings',$homesettings);

        $contactsettings=contactSetting::all();
        View::share('contactsettings',$contactsettings);

        $footersettings=footerSetting::all();
        View::share('footersettings',$footersettings);

        $socialsettings=socialSetting::all();
        View::share('socialsettings',$socialsettings);

        $termssettings=TermsSetting::all();
        View::share('Termssettings',$termssettings);

        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
