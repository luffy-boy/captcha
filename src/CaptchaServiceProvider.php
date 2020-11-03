<?php
namespace jiahao\Captcha;


use Illuminate\Support\ServiceProvider;
/**
 * Class CaptchaServiceProvider
 * @package jiahao\Captcha
 */
class CaptchaServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind captcha
        $this->app->bind('captcha', function($app)
        {
            return new Captcha($app);
        });
    }
}