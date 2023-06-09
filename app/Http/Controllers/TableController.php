<?php

namespace App\Http\Controllers;

use Illuminate\Http\upuest;
use App\Models\Update;

class TableController extends Controller
{
    function addUpdate(Update $up){

        $update = new Update;
        $update->up_topic=$up->up_topic;
        $update->up_detail=$up->up_detail;
        $update->up_date=$up->up_date;
        $update->save();

        return redirect()->route('table');
    }

    public function showUpdate () {
                
        $up=Update::get();

        return view('table',compact('up'));

    }

}
