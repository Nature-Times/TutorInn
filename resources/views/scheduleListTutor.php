<?php include('header.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {% load static %}
    <title>Schedule</title>
    <link rel="stylesheet" href="css/scheduleListTutor.css" />
</head>
<body>
        <div class="Schedule_Student">
            <div class="text">
                Teaching Schedule
            </div>
            {% for schedule in schedules %}
            <a href="{% url 'viewScheduleTutor' schedule.id %}">
                <div class="schedule_box">
                    <div class="subject_date">
                        <div class="subject">
                            {{ schedule.subject }}
                        </div>
                        <div class="date">
                            ( {{ schedule.date }} )
                        </div>
                    </div>
                    |
                    <div class="time">
                        {{ schedule.time }}
                    </div>
                    <div class="teacher">
                        - {{ schedule.username }}
                    </div>
                </div>
            </a>
            {% endfor %}
        </div>
    
     
</body>
</html>
<?php include('footer.php')?>