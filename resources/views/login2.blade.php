@include('header')
<h1>Login Mahasiswa</h1>

<form action="/login" method = "POST">
    @csrf
    <label for="email">Email:</label>
    <input type="email" name="email"><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password"><br><br>

    <input type="submit" value = "Submit" >
</form>
