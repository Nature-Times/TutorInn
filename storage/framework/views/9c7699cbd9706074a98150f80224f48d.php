
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/scheduleListStudent.css')); ?>" />
</head>
<body>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <a href="/homepage"><img src="/Element/arrow.png" class="backButton"></a>
    <div class="Schedule_Student">
        <div class="text">
            Learning Schedule
        </div>
        <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('viewSchedule', $schedule->id)); ?>", style="text-decoration:none;">
            <div class="schedule_box">
                <div class="subject_date">
                    <div class="subject">
                        <?php echo e(ucfirst($schedule->subject)); ?>

                    </div>
                    <div class="date">
                        ( <?php echo e($schedule->date); ?> )
                    </div>
                </div>
                |
                <div class="time">
                    <?php echo e($schedule->time); ?>

                </div>
                <div class="teacher">
                    - Mr.<?php echo e(ucfirst($schedule->tutor)); ?>

                </div>
            </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <a href="<?php echo e(route('showTutor')); ?>" style="text-decoration: none;">
            <div class="bookNew" style="color: white">
                Book a Tutor!
            </div>
        </a>
    </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\lenov\Herd\TutorInn\resources\views/scheduleListStudent.blade.php ENDPATH**/ ?>