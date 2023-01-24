<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkRecordComment;
use Illuminate\Support\Facades\Auth;

class WorkRecordCommentsController extends Controller
{
    public function createStore(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        $row = new WorkRecordComment();
        $row->work_record_id = $id;
        $row->user_id = Auth::user()->id;
        $row->comment = $request->comment;
        $row->save();

        return redirect('workrecords/' . $id);
    }
}
