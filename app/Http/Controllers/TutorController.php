<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Phone;
use App\Models\Tutor;
use App\Models\Subject;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class TutorController extends Controller
{
    public function showTutor()
    {
        $user = Auth::user()->load('phones');
        $tutors = Tutor::with('mahasiswa')->get();
        $tutorsBySubject = $tutors->groupBy('subject');

        return view('pickTutor', compact('user', 'tutorsBySubject'));
    }

    public function showProfileTutor($name, $subject)
    {
        $tutors = Tutor::where('name', $name)->firstOrFail();
        $tutor = Tutor::with('mahasiswa')->where('email', $tutors->email)->firstOrFail();
        return view('profiletutor', compact('tutor', 'subject'));
    }

    public function showResumeTutor($name, $subject)
    {
        $tutors = Tutor::where('name', $name)->firstOrFail();
        $tutor = Tutor::with('mahasiswa')->where('email', $tutors->email)->firstOrFail();
        return view('resume', compact('tutor', 'subject'));
    }
}