<?php

namespace App\Http\Controllers;

use App\ClassPracitce;
use App\User;
use Illuminate\Http\Request;
use App\Plan;
use App\Instructor;
use Illuminate\Support\Facades\Auth;


class SupportController extends Controller
{
    public function updateTime(Request $request)
    {
        $date = $request->get('classDate', null);
        $instructor = $request->get('instructor', null);

        $allClass = ClassPracitce::query()->where('date', '=', "$date")->where('id_instructor', '=', $instructor)->get('time');

        return (['status' => true, 'busyDates' => $allClass]);
    }

    public function tableUser(Request $request)
    {
        if (Auth::user()->role === 1) {
            $type = $request->get('type', null);
            $email = $request->get('email', null);
            $fio = $request->get('fio', null);

            $query = User::query()->join('roles', 'roles.id_role', '=', 'users.role');

            if (!is_null($type)) {
                $query = $query->where('role', '=', $type);
            }
            if (!is_null($email)) {
                $query = $query->where('email', 'like', "%$email%");
            }
            if (!is_null($fio)) {
                $query = $query->where('name', 'like', "%$fio%");
            }

            return (['status' => true, 'users' => $query->get()]);
        } else {
            return redirect('adminSchedule', '403');
        }
    }
}
