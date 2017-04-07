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

        $gate->define('super_admin_access', function($user){
            return $user->role_id == 1;
        });

        $gate->define('admin_access', function($user){
            return $user->role_id == 2 || $user->role_id == 1;
        });

        $gate->define('normal_user_access', function($user){
            return $user->role_id == 3;
        });

        //$this->registerPolicies();

        //
    }
}
