<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('super_admin-access', function($user){
            return $user->role == 'super_admin';
        });

        $gate->define('admin-access', function($user){
            return $user->role == 'admin' || $user->role == 'super_admin';
        });

        $gate->define('normal_user-access', function($user){
            return $user->role == 'normal_user';
        });

        //$this->registerPolicies();

        //
    }
}
