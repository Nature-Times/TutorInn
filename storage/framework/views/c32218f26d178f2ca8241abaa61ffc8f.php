<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br /><br /><br /><br /><br />
    
    <p class="pick-tutor-title">Pick Your Tutor</p>
    <div class="buttons-line">
      <button class="back-button">
        <a href="<?php echo e(route('homepage')); ?>"><img src="<?php echo e(URL::asset('Element/arrow.png')); ?>" alt="" /></a>
      </button>
    </div>


    <div class="tutor-list">
    <?php $__currentLoopData = $tutorsBySubject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject => $tutors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <center><p class="subject-name"><?php echo e(ucfirst($subject)); ?></p></center>
        
        <div class="tutor-line">
            <?php $__currentLoopData = $tutors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tutor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="tutor-items">
                    <center>
                        <a href="<?php echo e(route('view_profileTutor', ['name' => $tutor->name, 'subject' => $subject])); ?>" style="text-decoration: none; color: black;">
                            <img src="<?php echo e($tutor->mahasiswa && $tutor->mahasiswa->profilePicture 
                                ? asset('storage/' . $tutor->mahasiswa->profilePicture)
                                : asset('Element/profile Icon.png')); ?>" 
                                alt="Profile Picture" 
                                class="profileOthers">
                        
                    </center>
                    <br>
                    <h3><?php echo e($tutor->name); ?></h3>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <br><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
    

    <br /><br /><br />

    <style>
      /* Add your styles here */
    </style>
  </body>
  <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html>
<?php /**PATH C:\Users\lenov\Herd\TutorInn\resources\views/pickTutor.blade.php ENDPATH**/ ?>