<?php

namespace App\Policies;

use App\Models\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class QuotePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the Admin can view any models.
     *
     * @param  \App\Models\Admin  $Admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Admin $admin)
    {
        return $admin->can('browse quote');
    }

    /**
     * Determine whether the Admin can view the model.
     *
     * @param  \App\Models\Admin  $Admin
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Admin $Admin)
    {
        //
    }

    /**
     * Determine whether the Admin can create models.
     *
     * @param  \App\Models\Admin  $Admin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Admin $admin)
    {
        return $admin->can('add quote');
    }

    /**
     * Determine whether the Admin can update the model.
     *
     * @param  \App\Models\Admin  $Admin
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Admin $admin)
    {
        return $admin->can('edit quote');
    }

    /**
     * Determine whether the Admin can delete the model.
     *
     * @param  \App\Models\Admin  $Admin
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Admin $admin)
    {
        return $admin->can('delete quote');
    }

    /**
     * Determine whether the Admin can restore the model.
     *
     * @param  \App\Models\Admin  $Admin
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Admin $Admin)
    {
        //
    }

    /**
     * Determine whether the Admin can permanently delete the model.
     *
     * @param  \App\Models\Admin  $Admin
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Admin $Admin)
    {
        //
    }
}
