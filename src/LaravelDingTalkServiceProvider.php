<?php
namespace  ZhCNCode\LaravelDingTalk;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class LaravelDingTalkServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('dingtalk', function ($app) {
            return new LaravelDingTalkAdapter($app['config']['dingtalk']);
        });
    }

    /**
     * 获取由提供者提供的服务。
     *
     * @return array
     */
    public function provides()
    {
        return ['dingtalk'];
    }
}
