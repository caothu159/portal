<?php

declare(strict_types=1);

/*
 * @copyright  © 2019 Dxvn, Inc.
 *
 * @author     Tran Ngoc Duc <ductn@diepxuan.com>
 * @author     Tran Ngoc Duc <caothu91@gmail.com>
 *
 * @lastupdate 2024-07-03 12:48:12
 */

namespace Diepxuan\Log\Providers;

use Diepxuan\Log\Log;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        // @todo
        // dd(Diepxuan::test());
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        $this->app->singleton(Log::class, static fn () => new Log());
    }
}
