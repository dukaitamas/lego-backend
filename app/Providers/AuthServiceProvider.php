<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Access\Gate;
use Illuminate\Contracts\Auth\Access\Gate as AccessGate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate as FacadesGate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *

    *@var array
     */
    protected $policies = [
         'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

    //     //
     }

  /**
     * Register any authentication / authorization services.
     *
       * @return void
      */
    // public function boot(): void
    // {
    //     $this->registerPolicies();

    //     Passport::routes();
    // }
}




//     public function boot(): void
// {
//     $this->registerPolicies();

//     Gate::define('update-post', function ($user, $post) {
//         return $user->id === $post->user_id;
//     });
// }

// Auth::viaRequest('custom-token', function ($request) {
//     return User::where('api_token', $request->token)->first();
// });

// }


