<?php

namespace App\Policies;

use App\Jurusan;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JurusanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Jurusan  $jurusan
     * @return mixed
     */
    public function view(User $user, Jurusan $jurusan)
    {
        // Hanya user admin@gmail.com saja yang bisa melihat detail
        return in_array($user->email,['admin@gmail.com']);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        // Hanya user 'admin@gmail.com' saja yang bisa menjalankan proses create
        //return $user->email === 'admin@gmail.com';

        // User admin@gmail.com dan support@gmail.com bisa menjalankan proses create
        //return ($user->email === 'admin@gmail.com') OR ($user->email === 'support@gmail.com');

        // User admin@gmail.com dan support@gmail.com bisa menjalankan proses create
        return in_array($user->email,[
          'admin@gmail.com',
          'support@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Jurusan  $jurusan
     * @return mixed
     */
    public function update(User $user, Jurusan $jurusan)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Jurusan  $jurusan
     * @return mixed
     */
    public function delete(User $user, Jurusan $jurusan)
    {
        // Hanya user admin@gmail.com saja yang bisa menjalankan proses delete
        return in_array($user->email,['admin@gmail.com']);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Jurusan  $jurusan
     * @return mixed
     */
    public function restore(User $user, Jurusan $jurusan)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Jurusan  $jurusan
     * @return mixed
     */
    public function forceDelete(User $user, Jurusan $jurusan)
    {
        //
    }
}
