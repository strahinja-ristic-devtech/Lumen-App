<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;



class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        // Here you may define how you wish users to be authenticated for your Lumen
        // application. The callback which receives the incoming request instance
        // should return either a User instance or null. You're free to obtain
        // the User instance via an API token or any other method necessary.

        //We will return the user by pid instead of api_token for now
        $this->app['auth']->viaRequest('api', function ($request) {



            if ($request->header('id')) {
                $id = $request->header('id');

                //$results = app('db')->select("SELECT * FROM users where id=:id",['id'=>$id]);
                //return $results;
                return User::where('id',$id)->first();


            }
        });
    }
}

