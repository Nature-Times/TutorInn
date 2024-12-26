<?php include('header.php')?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/viewSchedule.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Kameron"
    />
    <title>Schedule</title>
  </head>
  <body>

    <script>
      let subMenu = document.getElementById("subMenu");

      function toggleMenu() {
        subMenu.classList.toggle("open-menu");
      }
    </script>

    <style>
      h1 {
        padding-bottom: 4%;
        font-family: "Kameron";
      }
    </style>
    <br><br><br><br>
    <div class="View_schedule">
      <div class="schedule_box">
        <div class="subject">
          {{ $tutor->subject }}
        </div>
        <div class="date">
          ( {{ $schedule->date }} ) | {{ $schedule->time }}
        </div>
      </div>
      <div class="detail">
        <div class="tutor">
          <div class="text_detail">
            Student:
          </div>
          <div class="detailll">
            {{ $schedule->username }}
          </div>
        </div>
        <div class="tutor">
          <div class="text_detail">
            Student's Email:
          </div>
          <div class="detailll">
            {{ $schedule->email }}
          </div>
        </div>
        <div class="duration">
          <div class="text_detail">
            Duration:
          </div>
          <div class="detailll">
            60 Minutes
          </div>
        </div>
        <div class="link">
          <div class="text_detail">
            Zoom Link:
          </div>
          <a href="https://zoom.us/j/{{ $meetingID }}?pwd={{ $password }}">
            Join Zoom
          </a>
        </div>
        <form action="{{ route('submit.material') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="link">
            <div class="text_detail">
              Materials:
            </div>
            @if ($schedule->material)
              <img src="{{ $schedule->material }}" class="material">
            @endif
          </div>
          <div class="customButton">
            <input type="file" name="material" id="material">
          </div>
          <br>
          <button type="submit" id="submitting">Submit</button>
        </form>
      </div>
    </div>
    <style>
      body {
        font-family: "Kameron";
      }
      .userProfile {
        border-radius: 50px;
      }
    </style>
  </body>
  <?php include('footer.php')?>
</html>
