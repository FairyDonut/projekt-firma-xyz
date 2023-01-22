<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\WorkRecord;
use Illuminate\Support\Carbon;

class WorkRecordSeeder extends Seeder
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

        $wr1Date = Carbon::parse('2.01.2023 16:10')->toDateTimeString();
        WorkRecord::insert([
            'sender_id' => $manager,
            'worker_id' => $worker1,
            'work_start' => Carbon::parse('2.01.2023 8:00'),
            'work_end' => Carbon::parse('2.01.2023 16:00'),
            'created_at' => $wr1Date,
            'updated_at' => $wr1Date
        ]);

        $wr2Date = Carbon::parse('2.01.2023 16:12')->toDateTimeString();
        WorkRecord::insert([
            'sender_id' => $manager,
            'worker_id' => $worker2,
            'work_start' => Carbon::parse('2.01.2023 8:15'),
            'work_end' => Carbon::parse('2.01.2023 16:00'),
            'created_at' => $wr2Date,
            'updated_at' => $wr2Date
        ]);

        $wr3Date = Carbon::parse('3.01.2023 16:10')->toDateTimeString();
        WorkRecord::insert([
            'sender_id' => $manager,
            'worker_id' => $worker1,
            'work_start' => Carbon::parse('3.01.2023 8:00'),
            'work_end' => Carbon::parse('3.01.2023 16:00'),
            'created_at' => $wr3Date,
            'updated_at' => $wr3Date
        ]);

        $wr4Date = Carbon::parse('3.01.2023 16:13')->toDateTimeString();
        WorkRecord::insert([
            'sender_id' => $manager,
            'worker_id' => $worker2,
            'work_start' => Carbon::parse('3.01.2023 7:55'),
            'work_end' => Carbon::parse('3.01.2023 16:00'),
            'created_at' => $wr4Date,
            'updated_at' => $wr4Date
        ]);

        $wr5Date = Carbon::parse('4.01.2023 16:22')->toDateTimeString();
        WorkRecord::insert([
            'sender_id' => $manager,
            'worker_id' => $worker1,
            'work_start' => Carbon::parse('4.01.2023 8:00'),
            'work_end' => Carbon::parse('4.01.2023 16:00'),
            'created_at' => $wr5Date,
            'updated_at' => $wr5Date
        ]);

        $wr6Date = Carbon::parse('4.01.2023 16:08')->toDateTimeString();
        WorkRecord::insert([
            'sender_id' => $manager,
            'worker_id' => $worker2,
            'work_start' => Carbon::parse('4.01.2023 8:00'),
            'work_end' => Carbon::parse('4.01.2023 16:00'),
            'created_at' => $wr6Date,
            'updated_at' => $wr6Date
        ]);
    }
}
