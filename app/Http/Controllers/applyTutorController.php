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


class applyTutorController extends Controller
{
    public function showApplyTutor()
    {
        $user = Auth::user()->load('phones');
        return view('applyTutor', compact('user'));
    }

    public function apply(Request $request){
        $validated = $request->validate([
            'subject' => 'required|string',
            'name' => 'required|string|max:255',
        ]);

        $exists = Tutor::where('name', $request->name)
                  ->where('subject', $request->subject)
                  ->exists();

        if ($exists) {
            return redirect()->back()->withErrors(['error' => 'A tutor with this name and subject already exists.']);
        }

        $user = Mahasiswa::where('name', $request->input('name'))->first();
        $tutor = new Tutor();
        $tutor->name = $validated['name'];
        $tutor->email = $user->email;
        $tutor->subject = $validated['subject'];
        $tutor->phone = $user->phones->phoneNum;
        $subject = $validated['subject'];

        $tutor->save();

        $test = new Test();
        $test->name = $user->name;
        $test->email = $user->email;
        $test->subject = $subject;
        $test->save();
        
        session(['subject' => $subject]);
        return redirect()->route('quiz');
    }

    public function showQuiz()
    {
        $user = Auth::user()->load('phones');
        $subject = session('subject');
        $test = Test::where('name', $user->name)->where('subject', $subject)->first();
        
        if (is_null($test->question1) || is_null($test->question2)) {
       
            $questions = Subject::inRandomOrder()->limit(2)->pluck($subject);

            $test->question1 = $questions[0]; 
            $test->question2 = $questions[1];

            $test->save();
        }
        return view('quiz', compact('test'));

    }

    public function uploadVideo(Request $request){

        $user = Auth::user()->load('phones');
        $test = Test::where('name', $user->name)->first();

        return redirect()->route('homepage')->with('success', 'You are now registered as a tutor!');
    }
}
