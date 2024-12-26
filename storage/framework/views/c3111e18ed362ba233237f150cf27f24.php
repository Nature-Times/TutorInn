<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Profile</title>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/resume.css')); ?>">
</head>

<body>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br><br>
    <div class="button">
        <a href="<?php echo e(route('view_profileTutor', ['name' => $tutor->name, 'subject' => $subject])); ?>"><img src="/Element/arrow.png" class="backButton"></a>
    </div>
    
    <div class="tutorBox">
        <div class="cv">
            <center><h1>Resume of <?php echo e($tutor->name); ?></h1></center>
            <center>
            <div class="cvBox">
                <center><img src="<?php echo e(asset('storage/' . $tutor->cv)); ?>" class="iconProfile"></center>
            </div>
            </center>
        </div>
    </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\lenov\Herd\TutorInn\resources\views/resume.blade.php ENDPATH**/ ?>