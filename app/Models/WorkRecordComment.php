<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WorkRecord;
use App\Models\User;

class WorkRecordComment extends Model
{
    use HasFactory;

    public function WorkRecord()
    {
        return $this->belongsTo(WorkRecord::class, 'work_record_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
