<?php

namespace App\Http\Controllers;

use App\ClassPracitce;
use Illuminate\Http\Request;
use App\Plan;
use App\Instructor;


class SupportController extends Controller
{
    public function updateTime(Request $request){
        $date = $request->get('classDate', null);
        $instructor = $request->get('instructor', null);

        $allClass = ClassPracitce::query()->where('date','=',"$date")->where('id_instructor','=',$instructor)->get('time');

        return(['status'=> true, 'busyDates' => $allClass]);
    }
}
