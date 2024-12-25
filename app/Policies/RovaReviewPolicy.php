<?php

namespace App\Policies;

use App\Models\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class RovaReviewPolicy
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
        return $admin->can('browse rova_review');
    }

    /**
     * Determine whether the Admin can view the model.
     *
     * @param  \App\Models\Admin  $Admin
     * @param  \App\Models\RovaReview  $rova_review
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
        return $admin->can('add rova_review');
    }

    /**
     * Determine whether the Admin can update the model.
     *
     * @param  \App\Models\Admin  $Admin
     * @param  \App\Models\RovaReview  $rova_review
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Admin $admin)
    {
        return $admin->can('edit rova_review');
    }

    /**
     * Determine whether the Admin can delete the model.
     *
     * @param  \App\Models\Admin  $Admin
     * @param  \App\Models\RovaReview  $rova_review
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Admin $admin)
    {
        return $admin->can('delete rova_review');
    }

    /**
     * Determine whether the Admin can restore the model.
     *
     * @param  \App\Models\Admin  $Admin
     * @param  \App\Models\RovaReview  $rova_review
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
     * @param  \App\Models\RovaReview  $rova_review
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Admin $Admin)
    {
        //
    }
}
