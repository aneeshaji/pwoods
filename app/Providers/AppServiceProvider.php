<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ContactPageContent;
use App\Models\FooterSetting;

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
        view()->composer('*', function ($view) {
            $contact_contents = ContactPageContent::first();
            $footer_contents = FooterSetting::first();
            $view->with('contact_contents', $contact_contents)
            ->with('footer_contents', $footer_contents);
        });
    }
}
