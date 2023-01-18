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

    public function details($id){
        return $id;
    }

    public function create(){
        return view('workRecordsCreate');
    }

    public function store(){
        return redirect('workrecords');
    }
}
