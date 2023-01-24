<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\WorkRecord;
use App\Models\WorkRecordComment;
use Illuminate\Support\Carbon;

class WorkRecordCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = User::where('role', 'Manager')->first()->id;
        $worker1 = User::where('role', 'Worker')->get()[0]->id;
        $worker2 = User::where('role', 'Worker')->get()[1]->id;

        $workRecord1 = WorkRecord::find(1);
        $workRecord2 = WorkRecord::find(2);
        $workRecord3 = WorkRecord::find(3);
        $workRecord4 = WorkRecord::find(4);
        $workRecord5 = WorkRecord::find(5);
        $workRecord6 = WorkRecord::find(6);

        $wrc1Date1 = Carbon::parse($workRecord1->created_at)->addMinutes(15)->toDateTimeString();
        WorkRecordComment::insert([
            'work_record_id' => $workRecord1->id,
            'user_id' => $workRecord1->sender->id,
            'comment' => fake()->text(80),
            'created_at' => $wrc1Date1,
            'updated_at' => $wrc1Date1
        ]);

        $wrc1Date2 = Carbon::parse($workRecord1->created_at)->addMinutes(35)->toDateTimeString();
        WorkRecordComment::insert([
            'work_record_id' => $workRecord1->id,
            'user_id' => $workRecord1->worker->id,
            'comment' => fake()->text(80),
            'created_at' => $wrc1Date2,
            'updated_at' => $wrc1Date2
        ]);

        $wrc1Date3 = Carbon::parse($workRecord1->created_at)->addMinutes(40)->toDateTimeString();
        WorkRecordComment::insert([
            'work_record_id' => $workRecord1->id,
            'user_id' => $workRecord1->sender->id,
            'comment' => fake()->text(80),
            'created_at' => $wrc1Date3,
            'updated_at' => $wrc1Date3
        ]);

        $wrc2Date1 = Carbon::parse($workRecord2->created_at)->addMinutes(15)->toDateTimeString();
        WorkRecordComment::insert([
            'work_record_id' => $workRecord2->id,
            'user_id' => $workRecord2->sender->id,
            'comment' => fake()->text(80),
            'created_at' => $wrc2Date1,
            'updated_at' => $wrc2Date1
        ]);

        $wrc4Date1 = Carbon::parse($workRecord4->created_at)->addMinutes(15)->toDateTimeString();
        WorkRecordComment::insert([
            'work_record_id' => $workRecord4->id,
            'user_id' => $workRecord4->sender->id,
            'comment' => fake()->text(80),
            'created_at' => $wrc4Date1,
            'updated_at' => $wrc4Date1
        ]);

        $wrc4Date2 = Carbon::parse($workRecord4->created_at)->addMinutes(17)->toDateTimeString();
        WorkRecordComment::insert([
            'work_record_id' => $workRecord4->id,
            'user_id' => $workRecord4->worker->id,
            'comment' => fake()->text(80),
            'created_at' => $wrc4Date2,
            'updated_at' => $wrc4Date2
        ]);

        $wrc5Date1 = Carbon::parse($workRecord5->created_at)->addMinutes(1)->toDateTimeString();
        WorkRecordComment::insert([
            'work_record_id' => $workRecord5->id,
            'user_id' => $workRecord5->worker->id,
            'comment' => fake()->text(80),
            'created_at' => $wrc5Date1,
            'updated_at' => $wrc5Date1
        ]);

        $wrc5Date2 = Carbon::parse($workRecord5->created_at)->addMinutes(4)->toDateTimeString();
        WorkRecordComment::insert([
            'work_record_id' => $workRecord5->id,
            'user_id' => $workRecord5->sender->id,
            'comment' => fake()->text(80),
            'created_at' => $wrc5Date2,
            'updated_at' => $wrc5Date2
        ]);

        $wrc5Date3 = Carbon::parse($workRecord5->created_at)->addMinutes(4)->toDateTimeString();
        WorkRecordComment::insert([
            'work_record_id' => $workRecord5->id,
            'user_id' => $workRecord5->sender->id,
            'comment' => fake()->text(80),
            'created_at' => $wrc5Date3,
            'updated_at' => $wrc5Date3
        ]);

        $wrc5Date4 = Carbon::parse($workRecord5->created_at)->addMinutes(12)->toDateTimeString();
        WorkRecordComment::insert([
            'work_record_id' => $workRecord5->id,
            'user_id' => $workRecord5->worker->id,
            'comment' => fake()->text(80),
            'created_at' => $wrc5Date4,
            'updated_at' => $wrc5Date4
        ]);

        $wrc6Date1 = Carbon::parse($workRecord6->created_at)->addMinutes(5)->toDateTimeString();
        WorkRecordComment::insert([
            'work_record_id' => $workRecord6->id,
            'user_id' => $workRecord6->sender->id,
            'comment' => fake()->text(80),
            'created_at' => $wrc6Date1,
            'updated_at' => $wrc6Date1
        ]);
    }
}
