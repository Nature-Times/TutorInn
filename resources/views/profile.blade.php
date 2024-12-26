<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Kameron" rel="stylesheet" />

    <title>Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  @if (Auth::check())
   @include('header')

    <div class="containerBox">
      <div class="box">
        <h1 class="profile">Profile</h1>
        <br><br>
        <center><img src="{{ Auth::check() && Auth::user()->profilePicture ? asset('storage/' . Auth::user()->profilePicture) : '/Element/profile Icon.png' }}" class="pp"></center>
        <br><br><br>
            <div class="boxProfile">
            <h2>Username:</h2>
            <div id="username" class="info">{{ Auth::user()->name }}</div>
            <br />
            <hr /> <br>
            <h2>Email:</h2>
            <div id="email" class="info">{{ Auth::user()->email }}</div>
            <br />
            <hr /> <br>
            <h2>Phone Number:</h2>
            <div id="phone" class="info">{{ Auth::user()->phones->phoneNum }}</div>
            <br />
            <hr /> <br>
            <h2>Account ID:</h2>
            <div id="id" class="info">{{ Auth::user()->id }}</div>
            <br />
            <hr /> <br>
            <h2>Date Joined (GMT):</h2>
            <div id="dateJoined" class="info">{{ Auth::user()->created_at }}</div>
            <br /> 
            <a><button name='edit' class="edit" style="float: right" onclick="window.location='{{ route('update.edit') }}'">Edit Profile</button></a>
            <br><br>
          </div>
        
        <form action="/homepage" method="GET">
          @csrf
          <center> <button type="submit" id="back" name="back" class="btn btn-secondary">Back</button></center>
        </form>
      </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @include('footer')
  @endif
  </body>
 
</html>

<style>
    <style>
    @import url("https://fonts.googleapis.com/css?family=Kameron");
      .pp{
        border-radius: 50%;
        width: 20%;
        height: 20%;
      }
      .edit{
        width: 20%;
        font-size: 1.5vw;
        background: none;
        border-radius: 10px;
        border: solid #994C17;
        color: #F1DEC9;
        padding: 1% 0;
        font-family: 'Kameron';
        background-color: #994C17;
        font-weight: bold;
      }
      .userProfile{
        border-radius: 50px;
      }
      .edit:hover{
        background-color: #783D14;
        border: solid #783D14;
        transition: 300ms ease-out;
      }
      body {
    background-color: #fffbe9;
    /* background: url(circle.png); */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  }
  
  .containerBox{
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 7% 15% 15% 15%;
  }

  .box{
    padding-top: 4%;
    background-color: #F1DEC9;
    border-radius: 30px;
    padding-bottom: 4%;
    width: 100%;
  }

  .box img{
    width: 15%;
  }

    .profile{
        font-family: 'Kameron';
        font-weight: bold;
        text-align: center;
        font-size: 4vw;
    }

    .boxProfile{
        font-size: 1.5vw;
        padding-left: 10%;
        padding-right: 10%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    h2{
        font-family: 'Kameron';
        font-size: 2vw;
        text-decoration: underline;
    }

    .info{
        font-size: 1.5vw;
        font-family: 'Kameron';
    }

    hr{
        width: 100%;
        height: 100%;
        border: 1.5px solid;
        color: #994C17;
    }

</style>
