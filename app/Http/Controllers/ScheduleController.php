<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Phone;
use App\Models\Tutor;
use App\Models\Subject;
use App\Models\Test;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class ScheduleController extends Controller
{
    public function pickSchedule($tutor, $subject)
    {
        $user = Auth::user()->load('phones');
        return view('scheduleTutor', compact('user', 'tutor', 'subject'));
    }


    public function scheduleTutor(Request $request)
    {
        $request->validate([
            'date' => 'required|date|after:now',
            'time' => 'required|string', 
            'subject'
        ]);
        
        $appointmentExists = Schedule::where('tutor', $request->tutor)
        ->where('time', $request->time)
        ->where('date', $request->date)
        ->exists();

        if ($appointmentExists) {
            return back()->withErrors(['time' => 'This time slot is already taken for the selected tutor.']);
        }

        $user = Auth::user();
        $schedule = new Schedule();
        $schedule->name= $request->name;
        $schedule->email = $request->email;
        $schedule->tutor = $request->tutor;
        $schedule->subject = $request->subject;
        $schedule->date = $request->date;
        $schedule->time = $request->time;
        $schedule->save();

        return redirect()->route('user_schedule')->with('success', 'Your appointment has been scheduled!');
    }

    public function scheduleList()
    {
        $user = Auth::user()->load('phones');
        $schedules = Schedule::where('email', $user->email)->get();
        return view('scheduleListStudent', compact('user', 'schedules'));
    }

    public function viewSchedule($id)
    {
        $user = Auth::user()->load('phones');
        $schedule = Schedule::where('id', $id)->first();
        return view('viewSchedule', compact('user', 'schedule'));
    }
}