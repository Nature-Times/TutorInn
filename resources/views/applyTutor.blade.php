
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="{{ asset('js/applyTutor.js') }}"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kameron" />
    <link rel="stylesheet" href="css/applyTutor.css">
  </head>
  <body>

  @if (Auth::check())
    @include('header')
    <br><br><br>
    <div class="title">
        <center><h1 class="apply">Apply for Tutor</h1></center>
    </div>
  
    <div class="arrow">
        <a href="/homepage">
          <img src="{{asset('Element/icon__arrow_left_.png')}}" alt="Back Arrow" />
        </a>
    </div>
    <div class="containerBox">
      
      <h1 class="pick">Pick Your Subject (Pick One)</h1>
      <div class="input">
        <form action="{{ route('applyTutor-apply') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="top">
            <div class="lesson">
              <input type="radio" id="math" value="math" name="subject" />
              <div id="text">Mathematics</div>
            </div>
            <div class="lesson">
              <input type="radio" id="physics" value="physics" name="subject" />
              <div id="text">Physics</div>
            </div>
            <div class="lesson">
              <input type="radio" id="biology" value="biology" name="subject" />
              <div id="text">Biology</div>
            </div>
            <div class="lesson">
              <input type="radio" id="chemistry" value="chemistry" name="subject" />
              <div id="text">Chemistry</div>
            </div>
            <div class="lesson">
              <input type="radio" id="english" value="english" name="subject" />
              <div id="text">English</div>
            </div>
          </div>
          @error('subject')
                <small class="text-danger">{{ $message }}</small>
          @enderror
          <center><div class="afterSubject">
            <h1 class="username">Username</h1>
            <div class="user">
              <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $user->name) }}"
                readonly
              />
            </div>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <h1 class="resume">Resume</h1>
          <div class="customButton">
            <input type="file" name="cv" id="cv" />
          </div>
          @error('cv')
                <small class="text-danger">{{ $message }}</small>
           @enderror
           @if ($errors->has('error'))
              <div class="alert alert-danger">
                 {{ $errors->first('error') }}
              </div>
          @endif
          </div></center>
          <br><br><br>
          <button type="submit" id="submitting">Take Test</button>
        </form>
      </div>
    </div>

    @include('footer')
  @endif
    </div>
  </body>
</html>
