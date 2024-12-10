<?php

namespace App\Helpers;

use App\Enums\ProductStatusEnum;
use App\Models\Product;
use Illuminate\View\View;
use Jorenvh\Share\Share;
use Illuminate\Support\Facades\URL;
use App\Enums\UserRoleEnum;


class CheckRoleHelper
{
    public static function check($user)
    {
        $redirect = '';
        foreach ($user['roles'] as $role) {
            if ($role['name'] == 'admin') {
                $redirect = route('admin.home');
            } else
            if ($role['name'] == 'mentor') {
                $redirect = route('mentor.dashboard.index');
            } else 
            if ($role['name'] == 'guest') {
                $redirect = route('dashboard.users.dashboard');
            } else
            if ($role['name'] == 'teacher') {
                $redirect = route('dashboard.teacher.index');
            } else 
            if ($role['name'] == 'student') {
                $redirect = route('dashboard.students.index');
            } else {
                $redirect = '/';
            }
            return $redirect;
        }
    }
}
