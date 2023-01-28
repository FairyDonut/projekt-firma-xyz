<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\WorkRecord;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view(
            'users',
            [
                'users' => $users
            ]
        );
    }

    public function create()
    {
        return view('usersCreate');
    }

    public function createStore(Request $request)
    {
        $request->validate([
            'login' => 'required|min:3',
            'password' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
            'firstName' => 'required',
            'lastName' => 'required',
            'role' => 'required'
        ]);

        $row = new User();
        $row->login = $request->login;
        $row->password = Hash::make($request->password);
        $row->firstName = $request->firstName;
        $row->lastName = $request->lastName;
        $row->role = $request->role;
        $row->save();

        return redirect('users');
    }

    public function details($id)
    {
        $dane = User::find($id);

        return view(
            'usersDetails',
            [
                'showdata' => $dane
            ]
        );
    }

    public function detailsStore(Request $request, $id)
    {
        $request->validate([
            'login' => 'required|min:3',
            'firstName' => 'required',
            'lastName' => 'required',
            'role' => 'required'
        ]);

        $row = User::find($id);
        $row->login = $request->login;
        $row->firstName = $request->firstName;
        $row->lastName = $request->lastName;
        $row->role = $request->role;
        $row->save();

        return redirect('users');
    }

    public function deleteStore($id)
    {
        User::find($id)->delete();

        return redirect('users');
    }

    public function password($id)
    {
        return view('userPassword', [
            'id' => $id
        ]);
    }

    public function passwordStore(Request $request, $id)
    {
        $request->validate([
            'password1' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
            'password2' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/'
        ]);

        if ($request->password1 != $request->password2) {
            return back()->withErrors([
                'password2' => 'Passwords do not match.',
            ])->onlyInput('password2');
        }

        $row = User::find($id);
        $row->password = Hash::make($request->password1);
        $row->save();

        return redirect('users');
    }

    public function statistics($id)
    {
        $user = User::find($id);

        $wrByMonth = WorkRecord::where('worker_id', $id)->where('work_start', '>', Carbon::now()->addMonths(-1))->get();
        $wrByWeek = WorkRecord::where('worker_id', $id)->where('work_start', '>', Carbon::now()->addWeeks(-1))->get();
        $wrByDay = WorkRecord::where('worker_id', $id)->where('work_start', '>', Carbon::now()->addDays(-1))->get();

        $wrByMonthMinutes = $this->calculateMinutesOfWork($wrByMonth);
        $wrByWeekMinutes = $this->calculateMinutesOfWork($wrByWeek);
        $wrByDayMinutes = $this->calculateMinutesOfWork($wrByDay);

        $wrByMonthTime = $this->createTimeText($wrByMonthMinutes);
        $wrByWeekTime = $this->createTimeText($wrByWeekMinutes);
        $wrByDayTime = $this->createTimeText($wrByDayMinutes);


        return view('userStatistics', [
            'user' => $user,
            'monthRecords' => $wrByMonthTime,
            'weekRecords' => $wrByWeekTime,
            'dayRecords' => $wrByDayTime
        ]);
    }

    private function calculateMinutesOfWork(Collection $workRecords)
    {
        $result = 0;

        foreach ($workRecords as $wr) {
            $start = Carbon::parse($wr->work_start);
            $end = Carbon::parse($wr->work_end);

            $sum = $end->diffInMinutes($start);

            $result += $sum;
        }

        return $result;
    }

    private function createTimeText(int $minutes)
    {
        $h = floor($minutes / 60);
        $m = $minutes % 60;

        $result = $h . "h " . $m . "min";

        return $result;
    }
}
