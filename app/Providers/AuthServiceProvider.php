<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
use App\Models\Student;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-student', function (User $user) {

            return str_contains($user->roles, 'update-student');
            // $user->id === $student->user_id;

        });

        Gate::define('delete-student', function(User $user, Student $student) {

            return $user->id === $student->user_id ? Response::allow('You can delete this user') : Response::deny('You must be an administrator.');

        });

    }
}
