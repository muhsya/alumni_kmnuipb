<?php

use Illuminate\Foundation\Inspiring;
use App\Model\Role;
use App\Model\User;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('admin:new-admin {username} {email} {password}', function() {
    $data = [
        'name' => $this->argument('username'),
        'email' => $this->argument('email'),
        'password' => bcrypt($this->argument('password'))
    ];

    $role = Role::where('slug', 'super-admin')->first();
    $user = new User($data);
    $admin = $role->users()->save($user);

    if ($admin) {
        $this->info('New Admin Created');
    } else {
        $this->error('Failed to Add New Admin');
    }
});
