
@include('header')
<h1>Register Mahasiswa</h1>

<form action="/register" method = "POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name"><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password"><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email"><br><br>

    <label for="age">Age:</label>
    <input type="number" name="age"><br><br>

    <label for="phone">Phone:</label>
    <input type="text" name="phone"><br><br>

    <input type="submit" value = "Submit" >
</form>




