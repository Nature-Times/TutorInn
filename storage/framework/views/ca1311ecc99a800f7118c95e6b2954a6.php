<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="background-color: #FFFBE9;">

<?php if(Auth::check()): ?>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <br><br><br>
    <?php if(session('success')): ?>
        <center>
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 70%;">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        </center>
    <?php endif; ?>
    
    <div class="container" style="top: 5%;">
       
        <div class="carouselBox mb-4 text-center">
            <img src="/Element/ads.png" alt="Ad Banner" class="img-fluid" style="width: 100%; max-height: 450px; object-fit: contain;">
        </div>
        <br> <br>

       
        <div class="applyBox container py-5 shadow-lg p-4 rounded d-flex flex-column flex-md-row align-items-center justify-content-between" style="background-color: #F8EAD6; max-width: 900px; margin: 0 auto;">
            <div class="applyText text-center text-md-start">
                <h3 class="applyTitle mb-3 fw-bold" style="color: #000;">Apply for Tutor</h3>
                <p class="applyDesc mb-4" style="color: #555;">Do you want to apply to be a tutor, 
                    teach many students, or maybe your friends while earning wages? What are you waiting for?</p>
                <a href="/applyTutor" class="btn btn-primary px-4 py-2 fw-bold hover:bg-[#BE8E69]" style="background-color: #B36330; border-color: #B36330;">APPLY NOW!!!</a>
            </div>
            <div class="applyImg">
                <img src="/Element/applyIMG.png" alt="Apply Image" class="img-fluid rounded" style="max-width: 450px;">
            </div>
        </div>

        <br> <br> <br> 

   
        <h2 class="text-center mb-4 fw-bold" style="font-size: 2.5rem; color: #000;">Testimonies</h2>
        <div class="testiBox d-flex align-items-center justify-content-center position-relative mx-auto rounded shadow" style="background-color: #F8EAD6; max-width: 800px; height: 400px; overflow: hidden; margin-bottom: 300px;">
            <!-- Left Arrow -->
            <button class="arrow-btn position-absolute" style="left: 10px; background-color: #B36330; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;" onclick="prev()" aria-label="Previous Image">
                <img src="/Element/arrow - left.png" alt="Left Arrow" style="width: 20px; border: none;">
            </button>

            <div class="slider d-flex align-items-center justify-content-center mx-4" style="width: 100%; height: 100%; text-align: center; word-wrap: break-word; overflow-wrap: break-word;">
                <img src="/Element/testi1.png" alt="Testimonial 1" class="img-fluid" style="width: 90%; height: auto;">
            </div>

            <!-- Right Arrow -->
            <button class="arrow-btn position-absolute" style="right: 10px; background-color: #B36330; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;" onclick="next()" aria-label="Next Image">
                <img src="/Element/arrow - right.png" alt="Right Arrow" style="width: 20px; border: none;">
            </button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

   
    <script>
        const sliderImg = document.querySelector('.slider img');
        const adsImages = [
            "/Element/testi1.png",
            "/Element/testi2.png",
            "/Element/testi3.png"
        ];
        let i = 0;

        function prev() {
            i = (i === 0) ? adsImages.length - 1 : i - 1;
            sliderImg.src = adsImages[i];
        }

        function next() {
            i = (i === adsImages.length - 1) ? 0 : i + 1;
            sliderImg.src = adsImages[i];
        }
    </script>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\lenov\Herd\TutorInn\resources\views/homepage.blade.php ENDPATH**/ ?>