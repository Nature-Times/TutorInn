<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Profile</title>
    <link rel="stylesheet" href="{{ URL::asset('css/resume.css') }}">
</head>

<body>
    @include('header')
    <br><br>
    <div class="button">
        <a href="{{ route('view_profileTutor', ['name' => $tutor->name, 'subject' => $subject]) }}"><img src="/Element/arrow.png" class="backButton"></a>
    </div>
    
    <div class="tutorBox">
        <div class="cv">
            <center><h1>Resume of {{ $tutor->name }}</h1></center>
            <center>
            <div class="cvBox">
                <center><img src="{{ asset('storage/' . $tutor->cv)}}" class="iconProfile"></center>
            </div>
            </center>
        </div>
    </div>
    @include('footer')
</body>
</html>
