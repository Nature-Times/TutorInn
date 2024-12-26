<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutorInn</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Kameron");
    </style>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/head.css">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navbar Section -->
     <center>
    <div class="container-fluid p-3 position-fixed w-100" style="top: 5%; z-index: 100;">
        <div class="d-flex align-items-center justify-content-between">
            <!-- Circle Header -->
            <img src="/Element/EllipseHeader.png" class="rounded-circle shadow-lg" 
                 style="width: 14vw; height: 14vw; position: absolute; top: -2vw; left: 4%; z-index: -1;">

            <!-- Header Box -->
            <div class="headerBox d-flex align-items-center" 
                 style="background-color: #e5cfbc; border-radius: 10px; position: relative; z-index: 1; width: 95%; margin-left: 4%; margin-top: 1%;">
                
                <!-- Logo -->
                <div class="logoBox">
                    <img src="/Element/Logo Navbar.png" class="iconLogo me-2" style="height: 5vw; margin-top: 3%; margin-left: 5%;">
                </div>

                <!-- Navigation Links -->
                <nav class="d-flex flex-grow-1 justify-content-evenly align-items-center" style="font-family: 'Kameron'; font-size: 2.35vw;">
                    <a href="/homepage" class="nav-link fw-bold text-dark rounded hover:bg-[#BE8E69]" style="padding: 0.5% 9% 0.5% 9%;">Home</a>
                    <div class="vr" style="border-left: 3px solid black;"></div>
                    <a href="/pickTutor" class="nav-link fw-bold text-dark rounded hover:bg-[#BE8E69]" style="padding: 0.5% 9% 0.5% 9%;">Tutor</a>
                    <div class="vr" style="border-left: 3px solid black;"></div>
                    <a href="/scheduleList" class="nav-link fw-bold text-dark rounded hover:bg-[#BE8E69]" style="padding: 0.5% 9% 0.5% 9%;">Schedule</a>
                </nav>

               
                <div class="dropdown" style="margin-right: 2%;">
                    <img src="<?php echo e(Auth::check() && Auth::user()->profilePicture ? asset('storage/' . Auth::user()->profilePicture) : '/Element/profile Icon.png'); ?>" 
                         class="rounded-circle shadow-sm dropdown-toggle" 
                         style="width: 3.5vw; height: 3.5vw; cursor: pointer;" 
                         id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="background-color: #e5cfbc;">
                        <li><a class="dropdown-item text-dark fw-bold" href="/profile" style="color: #5a3921;">View Account</a></li>
                        <!-- <li><a class="dropdown-item text-dark fw-bold" href="/homepageTutor" style="color: #5a3921;">Switch User</a></li> -->
                        <li>
                            <form action="<?php echo e(route('logout')); ?>" method="POST" class="m-0">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="dropdown-item fw-bold" style="background-color: #e5cfbc; color: #5a3921; border: none;">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </center>
    <div class="container" style="margin-top: 120px;">

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\lenov\Herd\TutorInn\resources\views/header.blade.php ENDPATH**/ ?>