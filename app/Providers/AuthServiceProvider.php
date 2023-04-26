<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('admin', function (User $user){
            return $user->rola === 'admin';
         });
 
         Gate::define('pracownik', function (User $user){
             return $user->rola === 'pracownik';
         });
 
         Gate::define('firma', function (User $user){
 
             return $user->rola === 'firma';
         });
    }
}
