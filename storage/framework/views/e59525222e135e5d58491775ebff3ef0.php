<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/edit.css')); ?>" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Kameron"
    />
    <title>Profile</title>
  </head>
  <body>
  <?php if(Auth::check()): ?>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <br><br><br><br>
    <?php if(session('success')): ?>
        <center><div class="alert alert-success" style="width:50%;"><?php echo e(session('success')); ?></div></center>
    <?php endif; ?>
    <div class="containerBox">
      <div class="box">
        <h1 class="profile">Edit Profile</h1>
        <br><br>
        <form action="<?php echo e(route('update.update')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <center><?php if(Auth::user()->profilePicture): ?>
        <img src="<?php echo e(asset('storage/' . Auth::user()->profilePicture)); ?>" class="rounded-circle w-50">
        <?php else: ?>
        <img src="<?php echo e(asset('Element/profile Icon.png')); ?>" class="rounded-circle w-50">
        <?php endif; ?></center>
        <br><br>
        <center><div class="customButton"><input type="file" name="profilePicture" id="profilePicture" class="form-control"></div></center>
        <br>
        
        <?php if(session('message')): ?>
          <center><h3 style="color: red"><?php echo e(session('message')); ?></h3></center>
        <?php endif; ?>
        <br><br>
        <div class="boxProfile">
          <h2>Username:</h2>
          <input type="text" name="name" id="name" value="<?php echo e(old('name', $user->name)); ?>">
          <br />
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
          <hr /> <br>
          <h2>Email:</h2>
          <input type="text" name="email" id="email" value="<?php echo e(old('email', $user->email)); ?>">
          <br />
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
          <hr /> <br>
          <h2>Age:</h2>
          <input type="number" name="age" id="age" value="<?php echo e(old('age', $user->age)); ?>">
          <br />
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
          <hr /> <br>
          <h2>Phone Number:</h2>
          <input type="text" name="phone" id="phone" value="<?php echo e(old('phone', $user->phones->phoneNum)); ?>">
          <br />
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
          <hr /> <br>
          <a><button type="submit" name='save' class="save">Save</button></a>
          <br><br>
        </div>
        </form>

        <form action="<?php echo e(url()->previous()); ?>" method="POST">
             <?php echo csrf_field(); ?>
            <center><button type="submit" id="back" name="back">Back</button></center>
        </form>
      </div>
    </div>

    

  <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
  </body>
</html>
<?php /**PATH C:\Users\lenov\Herd\TutorInn\resources\views/edit.blade.php ENDPATH**/ ?>