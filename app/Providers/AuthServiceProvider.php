<?php

namespace App\Providers;

use App\Models\Sale_detail;
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
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        //PERMISO
        Gate::define('saledetail.sd_edit', function (User $user, Sale_detail $sale_detail): bool {
            return ((bool) $user->is_admin || $user->id === $sale_detail->user_id);
        });
    }
}
