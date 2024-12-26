<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="js/login.js"></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Kameron"
    />
    <title>Login</title>
    <style>
      body {
        background-color: #fffbe9;
        /* background: url(circle.png); */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
      }

      .containerBox {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 7% 15% 15% 15%;
      }

      img {
        height: 20%;
        width: 40%;
        padding-bottom: 5%;
      }

      .box {
        padding-top: 4%;
        background-color: #f1dec9;
        border-radius: 30px;
        padding-bottom: 2%;
        width: 100%;
      }

      .loginPLS {
        font-family: 'Kameron';
        font-weight: bold;
        text-align: center;
        font-size: 4vw;
        margin-bottom: 5px;
      }

      .smallTitle {
        font-family: 'Kameron';
        font-weight: bold;
        text-align: center;
        font-size: 2vw;
        margin-bottom: 10px;
      }

      .input {
        padding-top: 4%;
      }

      form {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      #username,
      #email,
      #password {
        width: 60%;
        margin-bottom: 4%;
        font-size: 2vw;
        background-color: white;
        border-radius: 10px;
        border: solid white;
      }

      input[type='email'],
      input[type='password'],
      input[type='text'] {
        width: 100%;
        padding: 1% 2%;
        box-sizing: border-box;
        color: black;
        font-family: 'Kameron';
      }

      .passBox {
        display: flex;
        flex-direction: row;
      }

      .showPass {
        color: black;
        font-family: 'Kameron';
        font-size: 1.5vw;
        display: flex;
        flex-direction: row;
        margin-bottom: 4%;
        font-weight: bold;
      }

      #login {
        width: 40%;
        margin-bottom: 5%;
        font-size: 2vw;
        background: none;
        border-radius: 30px;
        border: solid #ded0b6;
        padding: 1% 0;
        font-family: 'Kameron';
        color: black;
        background-color: #ded0b6;
        font-weight: bold;
      }

      #login:hover {
        background-color: #d7c198;
        border: solid #d7c198;
        transition: 300ms ease-out;
      }
    </style>
  </head>
  <body>
    <div class="containerBox">
      <div class="container">
        <center><img src="{{ asset("Element/logo.png") }}" alt="" /></center>
        <div class="box">
          <h1 class="loginPLS">Login</h1>
          <div class="input">
            <center>
              @if(session('messages'))
                @foreach(session('messages') as $message)
                  <h3 style="color: red">{{ $message }}</h3>
                @endforeach
              @endif
            </center>
            <form action="/login" method="POST">
              @csrf
              <label for="email" class="smallTitle">Email:</label>
              <input type="email" name="email" id="email" placeholder="Input your email..."><br><br>

              <label for="password" class="smallTitle">Password:</label>
              <input type="password" name="password" id="password" placeholder="Input your password..."><br><br>
              <div class="showPass">
                <input
                  type="checkbox"
                  id="showPass"
                  onclick="myFunction()"
                  style="height: 3vh; width: 3vw"
                />
                <div id="text">Show Password</div>
              </div>

              <input type="submit" value = "Login" id="login">
            </form>
            <center>
              <h3>
                Don't have an account? <a href="/register">Register Now</a>
              </h3>
            </center>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<script>
      function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
</script>
