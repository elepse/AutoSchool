<?php

namespace App\Http\Controllers;

use App\ClassPracitce;
use App\Instructor;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Plan;

class LkController extends Controller
{
    public function searchEvent(Request $request)
    {
        $type = $request->get('type', null);
        $comment = $request->get('comment', null);

        $query = Plan::query();

        if (!is_null($type)) {
            $query = $query->whereType($type);
        }
        if (!is_null($comment)) {
            $query = $query->where('comment', 'like', "%$comment%");
        }

        $date = date("Y-m-d", mktime(0, 0, 0, date('m'), date('d'), date('Y')));
        return (['status' => true, 'events' => $query->where('date', '>', $date)->orderBy('type')->orderBy('date', 'asc')->get()->sortBy('time')->sortBy('date')->groupBy('date')]);
    }

    public function addEvent(Request $request)
    {
        $date = $request->get('date', null);
        $time = $request->get('time', null);
        $type = $request->get('type', null);
        $comment = $request->get('comment', null);
        $status = true;
        $error = '';
        if (!is_null($date) && !is_null($time) && !is_null($type) && !is_null($comment)) {
            (new Plan())->fill([
                'type' => $type,
                'date' => $date,
                'comment' => $comment,
                'time' => $time,
            ])->save();
        } else {
            $status = false;
            $error = 'Заполните все поля';
        }

        return (['status' => $status, 'error' => $error]);
    }

    public function practice()
    {
        $instructors = Instructor::all(['name_instructor', 'id_instructor']);
        return (['status' => true, 'instructors' => $instructors]);
    }

    public function practiceRequest(Request $request)
    {
        $time = $request->get('time', null);
        $date = $request->get('date', null);
        $instructor = $request->get('instructor', null);
        $type = $request->get('type', null);
        $status = null;
        $error = null;
        if (!is_null($time) && !is_null($date) && !is_null($instructor) && !is_null($type)) {
            $query = (new ClassPracitce())->fill([
                'time' => $time,
                'date' => $date,
                'id_user' => Auth::user()->id,
                'id_instructor' => $instructor
            ])->save();
            $status = $query;
            if (!$status) {
                $error = 'Обратитесь в техническую поддержку';
            }
        } else {
            $error = 'Заполните все поля';
            $status = false;
        }
        return (['status' => $status, 'error' => $error]);
    }

    public function usersInfo()
    {
        if (Auth::user()->role === 1) {
            $roles = Role::all();
            return view('admin/usersInfo', ['roles' => $roles]);
        } else {
            return redirect('adminSchedule');
        }
    }

    public function saveEditUser(Request $request){
        $id = $request->get('id', null);
        $role = $request->get('newRole', null);

        User::find((int)$id)->update(['role' => $role]);
        return(['status' => true]);
    }
}