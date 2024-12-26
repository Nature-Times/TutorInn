
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/scheduleTutor.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kameron">
    <title>Schedule</title>
</head>
<body>
    @include('header')
    <a href="{{ route('view_profileTutor', ['name' => $tutor, 'subject' => $subject]) }}"><img src="/Element/arrow.png" class="backButton"></a>
        <div class="box">
                <h1 class="profile">Pick  Your  Schedule</h1>
                <br><br>
                <form action="{{ route('schedule_submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <br><br>
                <div class="boxProfile">
                <h2>Username:</h2>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" readonly>
                <br />
                @error('name')
                        <small class="text-danger">{{ $message }}</small>
                @enderror
                <hr /> <br>
                <h2>Email:</h2>
                <input type="text" name="email" id="email" value="{{ old('email', $user->email) }}" readonly>
                <br />
                @error('email')
                        <small class="text-danger">{{ $message }}</small>
                @enderror
                <hr /> <br>
                <h2>Schedule Date:</h2>
                <input type="date" name="date" id="date">
                <br />
                @error('date')
                        <small class="text-danger">{{ $message }}</small>
                @enderror
                <hr /> <br>
                <h2>Time:</h2>
                <select name="time" id="time">
                    <option value="5pm">5:00 PM</option>
                    <option value="7pm">7:00 PM</option>
                    <option value="9pm">9:00 PM</option>
                </select><br>
                @error('time')
                        <small class="text-danger">{{ $message }}</small>
                @enderror
                <hr /> <br>
                <h2>Tutor Name:</h2>
                <input type="text" name="tutor" id="tutor" value="{{ old('tutor', $tutor) }}" readonly>
                <br />
                @error('tutor')
                        <small class="text-danger">{{ $message }}</small>
                @enderror
                <hr /> <br>
                <h2>Subject:</h2>
                <input type="text" name="subject" id="subject" value="{{ old('subject', $subject) }}" readonly>
                <br />
                @error('subject')
                        <small class="text-danger">{{ $message }}</small>
                @enderror
                <hr /> <br>
                <a><button type="submit" name='save' class="save">Save</button></a>
                <br><br>
                </form>
        </div>
    </div>
    <style>
        body {
            font-family: 'Kameron' !important;
            background-color: #fffbe9 !important;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        .backButton{
            height: 4vw;
            width: 4vw;
            margin: 7vw 5vw 1vw 8vw;
            background-color: #E5D0BC;
            transition: 0.3s;
            padding: 1%;
            cursor: pointer;
            border-radius: 20%;
            width: 4%;
        }

        .iconLogo{
            margin: 0 !important;
        }
        .backButton:hover{
            box-shadow: inset 0 0 2px black;
            background-color: #C1A68D;
        }

        .box{
            margin: 1vw 8vw 1vw 8vw;
            background-color:#f1dec9;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 7% 15% 5% 15%;
        }
        .tutorNameSchedule, .subjectSchedule {
            width: 60%;
            margin-bottom: 4%;
            font-size: 2vw;
            background-color: white;
            border-radius: 10px;
            border: solid white;
            width: 100%;
            padding: 1% 4%;
            box-sizing: border-box;
            color: black;
            font-family: 'Kameron';
        }

        .box h1 {
            font-size: 4vw;
            color: #5C3A2D;
            text-align: center;
        }

        .box img {
            display: block;
            margin: 0 auto;
            width: 30%;
            border-radius: 50%;
            background-color: #D9C4B0;
        }

        .box p {
            font-size: 1rem;
            margin: 0.5rem 0;
        }

        .box hr {
            border: none;
            border-top: 1px solid #D9C4B0;
            margin: 1rem 0;
        }

        .box input, .box select {
            width: 100%;
            padding: 0.5rem;
            font-size: 1rem;
            margin-bottom: 1rem;
            border: 1px solid #D9C4B0;
            border-radius: 5px;
        }

        .box button {
            background-color: #5C3A2D;
            color: #FDF4E3;
            border: none;
            border-radius: 5px;
            padding: 0.5rem 1.5rem;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .box button:hover {
            background-color: #3E2A1E;
        }

        .box #back, .box .save{
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 1rem;
            padding: 0.5rem;
        }
    </style>
     @include('footer')
</body>
</html>
