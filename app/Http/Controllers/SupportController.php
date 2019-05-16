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

    public function searchRequests(Request $request)
    {
     $typeClass = $request->get('typeClass', null);
     $instructor = $request->get('instructor', null);
     $client = $request->get('client', null);
     $typeKP = $request->get('typeKP', null);

     $query = ClassPracitce::query()->join('users','users.id', '=','clases_Practice.id_user')
     ->join('instructors','instructors.id_instructor','=', 'clases_Practice.id_instructor');

        if (!is_null($typeClass)){
            $query = $query->where('type_class','=',"$typeClass");
        }
        if (!is_null($instructor)){
            $query = $query->where('clases_Practice.id_instructor','=',"$instructor");
        }
        if (!is_null($client)){
            $query = $query->where('name','like',"%$client%");
        }
        if (!is_null($typeKP)){
            $query = $query->where('type_KP', '=', "$typeKP");
        }
        $query = $query->orderBy('clases_Practice.status','asc');
        return(['status'=>true, 'requests' => $query->get()]);
    }
    public function changeStatusRequest(Request $request){
        $id = $request->get('id', null);
        $status = $request->get('status', null);

         $update = ClassPracitce::find($id)->update(['status' => $status]);
        return (['status' => $update]);
    }
}
