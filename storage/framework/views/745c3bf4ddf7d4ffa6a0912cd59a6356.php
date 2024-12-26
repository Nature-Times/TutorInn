<!DOCTYPE html>

<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script>
      function myFunction() {
        var x = document.getElementById("password");
        var y = document.getElementById("password_confirmation");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }

        if (y.type === "password") {
          y.type = "text";
        } else {
          y.type = "password";
        }
      }
    </script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Kameron"
    />
    <title>Register</title>
    <style>
      body {
        background-color: #fffbe9;

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
        padding-bottom: 4%;
        width: 100%;
      }

      h1 {
        font-family: 'Kameron';
        font-weight: bold;
        text-align: center;
        font-size: 4vw;
      }

      form {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      input {
        width: 60%;
        margin-bottom: 2%;
        font-size: 2vw;
        background-color: white;
        border-radius: 10px;
        border: solid white;
        padding: 1% 4%;
        box-sizing: border-box;
        color: black;
        font-family: 'Kameron';
      }

      .form-check-label {
        font-family: 'Kameron';
      }

      #register {
        width: 40%;
        margin-top: 1%;
        font-size: 2vw;
        background: none;
        border-radius: 30px;
        border: solid #ded0b6;
        padding: 1% 0;
        font-family: 'Kameron';
        color: black;
        background-color: #ded0b6;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        display: inline-block;
      }

      #register:hover {
        background-color: #d7c198;
        border: solid #d7c198;
        transition: 300ms ease-out;
      }

      #register {
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

      #register:hover {
        background-color: #d7c198;
        border: solid #d7c198;
        transition: 300ms ease-out;
      }
    body {
      font-family: 'Arial', sans-serif; 
    }
    .form-check-label {
      line-height: 1.5; 
      font-family: 'Kameron';
      font-size: 1.5vw;
      /* margin-bottom: 50%; */
    }
    .form-check {
      margin-top:5%;
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
    }
    body {
      font-family: 'Arial', sans-serif; 
    }
    .form-check-input {
      margin-right: 0.5rem;
      margin-top: 0.2rem; 
    }
    .form-check-label {
      line-height: 1.5; 
    }

    .smallTitle {
        font-family: 'Kameron';
        font-weight: bold;
        text-align: center;
        font-size: 2vw;
        margin-bottom: 10px;
        margin-top:5%;
    }

    /* .checklist-container{
      width: 70%;
      display: flex; 
      margin-bottom: 20px;
      align-items: center; 

      flex-direction: column;
    } */
    </style>
  </head>
  <body>
    <div class="containerBox">
      <div class="container">
        <center><img src="Element/logo.png" alt="Logo" /></center>
        <div class="box">
          <h1>Register</h1>
          <!-- <?php if(session('messages')): ?>
            <?php $__currentLoopData = session('messages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <h3 style="color: red; text-align: center"><?php echo e($message); ?></h3>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?> -->
          <?php if($errors->any()): ?>
              <div class="d-flex justify-content-center mt-4">
                  <div class="alert alert-danger alert-dismissible fade show" role="alert" style="max-width: 500px;">
                      <ul class="mb-0">
                          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li><?php echo e($error); ?></li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              </div>
          <?php endif; ?>
          <form action="/register" method="POST">
            <?php echo csrf_field(); ?>
            <label for="email" class="smallTitle">Email:</label>
            <input type="email" name="email" id="email" placeholder="Email"/>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label for="phone" class="smallTitle">Phone:</label>
            <input type="text" name="phone" id="phone" placeholder="Phone Number"/>
            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label for="name" class="smallTitle">Username:</label>
            <input type="text" name="name" id="username" placeholder="Username"/>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label for="age" class="smallTitle">Age:</label>
            <input type="number" name="age" id="age" placeholder="Age" required/>
            <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label for="password" class="smallTitle">Password:</label>
            <input type="password" name="password" id="password" placeholder="Password"/>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label for="password_confirmation" class="smallTitle">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"/>
            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <div class="checklist-container">
              <div class="form-check">
                <input type="checkbox" id="showPass" class="form-check-input" onclick="myFunction()" />
                <label for="showPass" class="form-check-label">Show Password</label>
              </div>

              <div class="form-check">
                <input type="checkbox" name="agree" id="agree" class="form-check-input"/>
                <label for="agree" class="form-check-label">
                  I agree to the terms and conditions and the privacy policy
                </label>
              </div>
              <?php $__errorArgs = ['agree'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <center><small class="text-danger"><?php echo e($message); ?></small></center>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <input type="submit" value = "Register" id="register">
          </form>
          <center>
            <a href="/login" id="register">Login Now</a>
          </center>
        </div>
      </div>
    </div>
  </body>
</html>

<?php /**PATH C:\Users\lenov\Herd\TutorInn\resources\views/register.blade.php ENDPATH**/ ?>