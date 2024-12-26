@include('header')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TutorInn</title>
    <link rel="stylesheet" href='css/FindYourTutor.css' />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Kameron"
    />
  </head>
  <body>

    <script>
      let subMenu = document.getElementById("subMenu");

      function toggleMenu(){
          subMenu.classList.toggle("open-menu")
      }
    </script>
    @include('header')
    <br /><br /><br /><br /><br />
    
    <p class="pick-tutor-title">Pick Your Tutor</p>
    <div class="buttons-line">
      <button class="back-button">
        <a href="{{ route('homepage') }}"><img src="{{ URL::asset('Element/arrow.png') }}" alt="" /></a>
      </button>
    </div>


    <div class="tutor-list">
    @foreach ($tutorsBySubject as $subject => $tutors)
    <center><p class="subject-name">{{ ucfirst($subject) }}</p></center>
        
        <div class="tutor-line">
            @foreach ($tutors as $tutor)
                <div class="tutor-items">
                    <center>
                        <a href="{{ route('view_profileTutor', ['name' => $tutor->name, 'subject' => $subject]) }}" style="text-decoration: none; color: black;">
                            <img src="{{ $tutor->mahasiswa && $tutor->mahasiswa->profilePicture 
                                ? asset('storage/' . $tutor->mahasiswa->profilePicture)
                                : asset('Element/profile Icon.png') }}" 
                                alt="Profile Picture" 
                                class="profileOthers">
                        
                    </center>
                    <br>
                    <h3>{{ $tutor->name }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
        <br><br>
    @endforeach

  </div>
    

    <br /><br /><br />

    <style>
      /* Add your styles here */
    </style>
  </body>
  @include('footer')
</html>
