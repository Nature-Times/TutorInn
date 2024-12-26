@include('header')


@if (Auth::check())
    <h1>Profile</h1>
    <p>Welcome, {{ Auth::user()->name }}! You are logged in.</p>
    <p>Email: {{ Auth::user()->email }}</p>
    <p>Phone Number: {{ Auth::user()->phones->phoneNum }}</p>

    <button type="button" onclick="window.location='{{ route('update.edit') }}'" class="btn btn-primary">Edit Profile</button>
@endif