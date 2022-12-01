<?php

namespace App\Providers;

use App\Interfaces\FlyBehavior;
use App\Interfaces\QuackBehavior;
use App\Services\Strategies\MallaDuck;
use App\Services\Strategies\ModelDuck;
use App\StrategyClasses\FlyNoWay;
use App\StrategyClasses\FlyWithWings;
use App\StrategyClasses\MuteQuack;
use App\StrategyClasses\Quack;
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
        $this->app->when(MallaDuck::class)
            ->needs(FlyBehavior::class)
            ->give(FlyWithWings::class);
        $this->app->when(MallaDuck::class)
            ->needs(QuackBehavior::class)
            ->give(Quack::class);

        $this->app->when(ModelDuck::class)
            ->needs(FlyBehavior::class)
            ->give(FlyNoWay::class);
        $this->app->when(ModelDuck::class)
            ->needs(QuackBehavior::class)
            ->give(MuteQuack::class);
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
