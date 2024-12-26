<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegister(){
        return view('register');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:mahasiswas,email',
            'age' => 'required|integer',
            'phone' => 'required|max:255',
            'password' => 'required|max:255|confirmed',
            'agree' => 'accepted'
        ]);

        $hashedPassword = Hash::make($validated['password']);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->name = $validated['name'];
        $mahasiswa->email = $validated['email'];
        $mahasiswa->age = $validated['age'];
        $mahasiswa->password = $hashedPassword;
        $mahasiswa->save();

        

        $phone = new Phone();
        $phone->phoneNum = $validated['phone'];
        $phone->mahasiswa_id = $mahasiswa->id;
        $phone->save();

        dump($mahasiswa);
        dump($phone);


        return redirect()->route('login');
    }

    public function displayMahasiswa(){
        $mahasiswas = Mahasiswa::all();

        return view('displayData', ['mahasiswas'=>$mahasiswas]);
    }
}
