<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkRecord;
use App\Models\User;
use Illuminate\Support\Carbon;

class WorkRecordsController extends Controller
{
    public function index(){
       $list = WorkRecord::all();
       return view('work_records',
        [
            'lista' => $list
        ]);
    }

    public function create(){
        $users = User::all();
        return view('workRecordsCreate',[
            'users' => $users
        ]);
    }

    public function createStore(Request $request){
        $request->validate([
            'sender' => 'required',
            'worker' => 'required',
            'work_start_date' => 'required',
            'work_start_time' => 'required',
            'work_end_date' => 'required',
            'work_end_time' => 'required',
        ]);

        $row = new WorkRecord();
        $row->sender_id = $request->sender;
        $row->worker_id = $request->worker;
        $work_start = Carbon::parse($request->work_start_date . ' ' . $request->work_start_time);
        $row->work_start = $work_start;
        $work_end = Carbon::parse($request->work_end_date . ' ' . $request->work_end_time);
        $row->work_end = $work_end;
        $row->save();

        return redirect('workrecords');
    }

    public function details($id){
        $dane = WorkRecord::find($id);
        $users = User::all();
        return view('workRecordDetails',
         [
             'showdata' => $dane,
             'users' => $users
         ]);
    }

    public function detailsStore(Request $request, $id){
        $request->validate([
            'sender' => 'required',
            'worker' => 'required',
            'work_start_date' => 'required',
            'work_start_time' => 'required',
            'work_end_date' => 'required',
            'work_end_time' => 'required',
        ]);

        $row = WorkRecord::find($id);
        error_log($row);
        $row->sender_id = $request->sender;
        $row->worker_id = $request->worker;
        $work_start = Carbon::parse($request->work_start_date . ' ' . $request->work_start_time);
        $row->work_start = $work_start;
        $work_end = Carbon::parse($request->work_end_date . ' ' . $request->work_end_time);
        $row->work_end = $work_end;
        $row->save();

        return redirect('workrecords');
    }
}
