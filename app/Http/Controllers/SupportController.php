<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;


class SupportController extends Controller
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
}
