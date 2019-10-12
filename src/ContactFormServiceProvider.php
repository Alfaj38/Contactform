<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mamun
 * Date: 10/12/2019
 * Time: 9:19 PM
 */
    // MyVendor\contactform\src\ContactFormServiceProvider.php
    namespace Alfaj\Contactform;
    use Illuminate\Support\ServiceProvider;
    class ContactFormServiceProvider extends ServiceProvider {
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/resources/views', 'contactform');
            $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        }
        public function register()
        {
        }
    }
    ?>
