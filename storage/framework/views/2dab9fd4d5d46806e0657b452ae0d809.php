<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo e(asset('public/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/quiz.css')); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kameron" />
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    <title>Quiz</title>

    <style>
      body {
        background-color: #fffbe9 !important;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
      }

      .containerBox {
        min-height: 10vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 7% 7% 7% 7%;
      }

      html {
        height: 100%;
        width: 100%;
        scroll-behavior: smooth;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body::-webkit-scrollbar {
        display: none;
      }

      body {
        -ms-overflow-style: none;
        scrollbar-width: none;
        background-color: #fffbe9;
      }

      .customButton {
        position: relative;
        display: inline-block;
        margin: 0;
      }

      .customButton input[type="file"] {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
        z-index: 1;
      }

      .customButton::before {
        content: "Choose File";
        display: inline-block;
        padding: 0.5rem 1.5rem;
        background-color: #c9e7f1;
        color: black;
        text-align: center;
        cursor: pointer;
        user-select: none;
        border-radius: 20px;
        font-family: "Kameron", serif;
        font-weight: 500;
        font-size: 1rem;
        transition: background-color 0.3s, color 0.3s;
      }

      .customButton:hover::before {
        background-color: #0056b3;
        color: white;
      }

      .customButton:active::before {
        background-color: #003d80;
      }

      #submitting {
        background-color: #a0522d;
        color: white;
        font-size: 1rem;
        font-family: "Kameron", serif;
        font-weight: bold;
        border-radius: 20px;
        border: none;
        padding: 0.5rem 1.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s, transform 0.2s;
      }

      #submitting:hover {
        background-color: #6e3b1d;
      }

      #submitting:active {
        transform: scale(0.95);
      }

      .error-message {
        color: red;
        font-family: "Kameron", serif;
        font-size: 1rem;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="containerBox">
      <center>
        <h1 class="title" style="font-size: 4vw; font-family: 'Kameron'; text-decoration: none;">
          Tutor Application Test
        </h1>
      </center>

      <div class="arrow" style="border: none; background-color: #e5d0bc; padding: 1%; cursor: pointer; border-radius: 20%; margin-left: 3%; width: 4%; transition: 0.3s;">
        <a href="/homepage">
          <img src="Element/arrow.png" style="width: 100%;" />
        </a>
      </div>

      <br />

      <div class="quiz-paper" style="background-color: #f1dec9; border-radius: 20px; padding: 3%;">
        <p class="quiz-instruction" style="font-size: 3vw; font-family: 'Kameron'; font-weight: bold;">
          Finish the questions and explain the process in video format!
        </p>
        <br />
        <p class="quiz-question" style="font-size: 1.5vw; font-family: 'Kameron';"><?php echo e($test->question1); ?></p>
        <br />
        <p class="quiz-question" style="font-size: 1.5vw; font-family: 'Kameron';"><?php echo e($test->question2); ?></p>
        <br />
        <br /><br />

        <h3>Submit video:</h3>
        <form action="<?php echo e(route('quiz.video')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <!-- Hidden file input -->
            <input type="file" id="fileInput" name="video" style="display: none;" onchange="updateFileName()">

            <!-- Custom button -->
            <button type="button" id="customButton" class="customButton" onclick="triggerFileInput()"></button>

            <span id="fileName"></span>

            <?php $__errorArgs = ['video'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <br>
            <center><button type="submit" id="submitting">Submit</button></center>
        </form>
      </div>
    </div>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH C:\Users\lenov\Herd\TutorInn\resources\views/quiz.blade.php ENDPATH**/ ?>