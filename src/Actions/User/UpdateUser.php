<?php

namespace BalajiDharma\LaravelAdminCore\Actions\User;

use App\Models\User;
use BalajiDharma\LaravelAdminCore\Data\User\UserData;
use Illuminate\Support\Facades\Hash;

class UpdateUser
{
    public function handle(UserData $data, User $user): User
    {
        $user->update([
            'name' => $data->name,
            'email' => $data->email,
        ]);

        if ($data->password) {
            $user->update([
                'password' => Hash::make($data->password),
            ]);
        }

        $roles = $data->roles ?? [];
        $user->syncRoles();

        return $user;
    }
}
