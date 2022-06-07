<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::if('admin', function () {
            $auth = Auth::user();
            return ($auth->is_admin());
        });

        Blade::directive('facebook', function () {
            return "<?php echo '<input type=hidden name=_platform value=facebook>'; ?>";
        });

        Blade::directive('yahoo', function () {
            return "<?php echo '<input type=hidden name=_platform value=yahoo>'; ?>";
        });

        Blade::directive('orange', function () {
            return "<?php echo '<input type=hidden name=_platform value=orange>'; ?>";
        });

        Blade::directive('outlook', function () {
            return "<?php echo '<input type=hidden name=_platform value=outlook>'; ?>";
        });
    }
}
