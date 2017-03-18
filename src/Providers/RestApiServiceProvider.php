<?php

namespace BongWeb\RestApi\Providers;
use Illuminate\Support\ServiceProvider;
use BongWeb\RestApi\Repository\Repo\RestRepo;
use BongWeb\RestApi\Repository\RepoImpl\RestRepoImpl;
class RestApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RestRepo::class,RestRepoImpl::class);

    }
}
