
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/viewSchedule.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kameron">
    <title>Schedule</title>
</head>
<body>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <a href="/scheduleList"><img src="/Element/arrow.png" class="backButton"></a>
    <div class="View_schedule">
        <div class="schedule_box">
            <div class="subject">
                <?php echo e(ucfirst($schedule->subject)); ?>

            </div>
            <div class="date">
                ( <?php echo e($schedule->date); ?> ) | <?php echo e($schedule->time); ?>

            </div>
        </div>
        <div class="detail">
            <div class="tutor">
                <div class="text_detail">
                    Tutor:
                </div>
                <div class="detailll">
                    Mr. <?php echo e(ucfirst($schedule->tutor)); ?>

                </div>
            </div>
            <div class="duration">
                <div class="text_detail">
                    Duration:
                </div>
                <div class="detailll">
                    60 Minutes
                </div>
            </div>
            <div class="link">
                <div class="text_detail">
                    Zoom Link:
                </div>
                <a href="">
                    https://zoom.us/j/example/?pwd=example
                </a>
            </div>
        </div>
    </div>

    <style>
        body {
            font-family: "Kameron";
        }
        .userProfile {
            border-radius: 50px;
        }
    </style>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\lenov\Herd\TutorInn\resources\views/viewSchedule.blade.php ENDPATH**/ ?>