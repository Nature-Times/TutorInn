
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/scheduleListStudent.css" />
</head>
<body>
    @include('header')
    <a href="/homepage"><img src="/Element/arrow.png" class="backButton"></a>
    <div class="Schedule_Student">
        <div class="text">
            Learning Schedule
        </div>
        @foreach ($schedules as $schedule)
        <a href="{{ route('viewSchedule', $schedule->id) }}", style="text-decoration:none;">
            <div class="schedule_box">
                <div class="subject_date">
                    <div class="subject">
                        {{ ucfirst($schedule->subject) }}
                    </div>
                    <div class="date">
                        ( {{ $schedule->date }} )
                    </div>
                </div>
                |
                <div class="time">
                    {{ $schedule->time }}
                </div>
                <div class="teacher">
                    - Mr.{{ ucfirst($schedule->tutor) }}
                </div>
            </div>
        </a>
        @endforeach

        <a href="{{ route('showTutor') }}" style="text-decoration: none;">
            <div class="bookNew" style="color: white">
                Book a Tutor!
            </div>
        </a>
    </div>
    @include('footer')
</body>
</html>
