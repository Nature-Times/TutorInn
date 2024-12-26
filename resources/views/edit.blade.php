<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ URL::asset('css/edit.css') }}" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Kameron"
    />
    <title>Profile</title>
  </head>
  <body>
  @if (Auth::check())
    @include('header')
    
    <br><br><br><br>
    @if(session('success'))
        <center><div class="alert alert-success" style="width:50%;">{{ session('success') }}</div></center>
    @endif
    <div class="containerBox">
      <div class="box">
        <h1 class="profile">Edit Profile</h1>
        <br><br>
        <form action="{{ route('update.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <center>@if(Auth::user()->profilePicture)
        <img src="{{ asset('storage/' . Auth::user()->profilePicture) }}" class="rounded-circle w-50">
        @else
        <img src="{{ asset('Element/profile Icon.png') }}" class="rounded-circle w-50">
        @endif</center>
        <br><br>
        <center><div class="customButton"><input type="file" name="profilePicture" id="profilePicture" class="form-control"></div></center>
        <br>
        
        @if(session('message'))
          <center><h3 style="color: red">{{ session('message') }}</h3></center>
        @endif
        <br><br>
        <div class="boxProfile">
          <h2>Username:</h2>
          <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
          <br />
          @error('name')
                <small class="text-danger">{{ $message }}</small>
          @enderror
          <hr /> <br>
          <h2>Email:</h2>
          <input type="text" name="email" id="email" value="{{ old('email', $user->email) }}">
          <br />
          @error('email')
                <small class="text-danger">{{ $message }}</small>
          @enderror
          <hr /> <br>
          <h2>Age:</h2>
          <input type="number" name="age" id="age" value="{{ old('age', $user->age) }}">
          <br />
          @error('age')
                <small class="text-danger">{{ $message }}</small>
          @enderror
          <hr /> <br>
          <h2>Phone Number:</h2>
          <input type="text" name="phone" id="phone" value="{{ old('phone', $user->phones->phoneNum) }}">
          <br />
          @error('phone')
                <small class="text-danger">{{ $message }}</small>
          @enderror
          <hr /> <br>
          <a><button type="submit" name='save' class="save">Save</button></a>
          <br><br>
        </div>
        </form>

        <form action="{{ url()->previous() }}" method="POST">
             @csrf
            <center><button type="submit" id="back" name="back">Back</button></center>
        </form>
      </div>
    </div>

    

  @include('footer')
@endif
  </body>
</html>
