<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkRecord;

class WorkRecordsController extends Controller
{
    public function index(){
       $list = WorkRecord::all();
       return view('work_records',
        [
            'lista' => $list
        ]);

    }
}
