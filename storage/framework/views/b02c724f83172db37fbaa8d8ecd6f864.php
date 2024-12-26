
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="<?php echo e(asset('js/applyTutor.js')); ?>"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kameron" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/applyTutor.css' )); ?>">
  </head>
  <body>

  <?php if(Auth::check()): ?>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br><br><br>
    <div class="title">
        <center><h1 class="apply">Apply for Tutor</h1></center>
    </div>
  
    <div class="arrow">
        <a href="/homepage">
          <img src="<?php echo e(asset('Element/icon__arrow_left_.png')); ?>" alt="Back Arrow" />
        </a>
    </div>
    <div class="containerBox">
      
      <h1 class="pick">Pick Your Subject (Pick One)</h1>
      <div class="input">
        <form action="<?php echo e(route('applyTutor-apply')); ?>" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
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
          <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          <center><div class="afterSubject">
            <h1 class="username">Username</h1>
            <div class="user">
              <input
                type="text"
                id="name"
                name="name"
                value="<?php echo e(old('name', $user->name)); ?>"
              />
            </div>
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
            <h1 class="resume">Resume</h1>
          <div class="customButton">
            <input type="file" name="cv" id="cv" />
          </div>
          <?php $__errorArgs = ['cv'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
           <?php if($errors->has('error')): ?>
              <div class="alert alert-danger">
                 <?php echo e($errors->first('error')); ?>

              </div>
          <?php endif; ?>
          </div></center>
          <br><br><br>
          <button type="submit" id="submitting">Take Test</button>
        </form>
      </div>
    </div>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
    </div>
  </body>
</html>
<?php /**PATH C:\Users\lenov\Herd\TutorInn\resources\views/applyTutor.blade.php ENDPATH**/ ?>