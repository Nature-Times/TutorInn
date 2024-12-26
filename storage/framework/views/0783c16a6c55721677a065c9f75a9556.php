<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Profile</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/tutorProfile.css')); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Kameron" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br><br>
<a href="/pickTutor"><img src="/Element/arrow.png" class="backButton"></a>
    <div class="tutorBox">
        <div class="profile">
            <div class="profileBox">
                <img src="<?php echo e($tutor->mahasiswa && $tutor->mahasiswa->profilePicture 
                                ? asset('storage/' . $tutor->mahasiswa->profilePicture)
                                : asset('Element/profile Icon.png')); ?>" class="iconProfile">
            </div>
        </div>
        <div class="tutorDesc">
            <p class="desc">Name: <?php echo e($tutor->name); ?></p>
            <p class="desc">Phone Number: <?php echo e($tutor->phone); ?></p>
            <p class="desc">Email: <?php echo e($tutor->email); ?></p>
            <p class="descSubject">Subject: <?php echo e($subject); ?></p>
            <p class="desc">Fare: Rp 100.000</p>
            <div class="viewResume"><a href="<?php echo e(route('view_resumeTutor', ['name' => $tutor->name, 'subject' => $subject])); ?>" style="text-decoration: none;"><p class="resumeText">View Resume</p></a></div>
        </div>
    </div>
    <div class="hireNow">
        <a href="<?php echo e(route('pick_schedule',  ['name' => $tutor->name, 'subject' => $subject])); ?>" style="color: white;">
            <p>Hire Now</p>
        </a>
    </div>
 

    <style>
 
        a{
            text-decoration: none;
            color: black;
        }
        
        body{
            font-family: 'Kameron' !important;
            background-color: #fffbe9 !important;
        }
.backButton{
    height: 4vw;
    width: 4vw;
    margin: 7vw 5vw 1vw 8vw;
    background-color: #E5D0BC;
    transition: 0.3s;
    padding: 1%;
    cursor: pointer;
    border-radius: 20%;
    width: 4%;
}

.backButton:hover{
    box-shadow: inset 0 0 2px black;
    background-color: #C1A68D;
}

.tutorBox{
    margin: 1vw 8vw 1vw 8vw;
    background-color:#f1dec9;
    height: 41vw;
    width: 85vw;
    border-radius: 2vw;
    display: flex;
    flex-direction: row
}

.profileBox{
    margin: 5vw 5vw 1vw 5vw;
    
    background-color:none;
    height:29vw;
    width: 32.25vw;
    border-radius: 1vw;
}

.iconProfile{
    height: 25vw;
    margin: 2vw 2.5vw 2vw 3.5vw;
    border-radius: 50px;
}

.Rating{
    font-size: 2vw;
    text-align: center;
    font-family: 'Kameron';
}

.tutorDesc{
    margin: 5vw 1vw 1vw 1vw;
    font-size: 2.5vw;
}

.desc{
    margin: 1.5vw 0vw 1.5vw 0vw;
}

.descSubject{
    margin: 1.5vw 0vw 1.5vw 0vw;
}

.viewResume{
    margin: 2.5vw 4.5vw 1vw 8.5vw;
    background-color:#994c17;
    height: 4.75vw;
    width: 23vw;
    filter:drop-shadow(0px 4px 2.9000000953674316px rgba(0,0,0,0.25));
    border-radius: 3vw;
}

.resumeText{
    padding-top: 1%;
    text-align: center;
    font-size: 2.75vw;
    color: white;
    font-family: 'Kameron';
    text-decoration: none;
}


.hireNow a {
    color: white; 
    text-decoration: none;
    padding-top: 5%;
}

.hireNow:hover {
    background-color: #B5632A;
    transition: 0.3s; 
}

.hireNow {
    margin: 4.5vw auto; 
    background-color: #994c17;
    height: 4.75vw;
    width: 23vw;
    filter: drop-shadow(0px 4px 2.9px rgba(0, 0, 0, 0.25));
    border-radius: 3vw;
    display: flex; 
    align-items: center; 
    justify-content: center; 
    font-size: 2.75vw;
    color: white !important;
    font-family: 'Kameron';
    font-weight: 500;
    cursor: pointer;
    text-align: center;
}

.viewResume:hover, .hireNow:hover{
  background-color: #B5632A;
  transition: 0.3ms;
}
    </style>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\lenov\Herd\TutorInn\resources\views/profiletutor.blade.php ENDPATH**/ ?>