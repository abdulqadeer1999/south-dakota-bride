<?php $__env->startSection('title','South-Dakota-Bride | about-us'); ?>
<?php $__env->startSection('content'); ?>
<section class="Home-Section mt-5 pt-5 Gray-overlay">
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6 overlay-image-text wow  animated fadeInLeft">
                <div class="d-flex flex-row justify-content-around">
                    <div>
                        <div class="d-flex flex-column translate">
                            <div class="line-after">
                                <div class="line-after1"></div>
                            </div>
                            <div class="line-center">
                                <ul>
                                    <li><a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="https://www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="line-before">
                                <div class="line-before2"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="couple-img-wed">
                            <img src="<?php echo e(asset('storage/uploads/cms/' . $banner_image->image)); ?>" alt="">
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 overlay-image-text wow  animated fadeInRight">
                <h1 class="couple-text pt-5"><?php echo e($banner_image->title); ?></h1>
            </div>

        </div>
    </div>
</section>
<!-- ==============================================BANNER  CLOSED============================================== -->
<!-- ==============================================   ============================================== -->
 <section class="mt-5">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <h5 class="couple-text pt-5"><span>Welcome</span></h5>
                <h1 class="couple-text wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">South-Dakota-Bride</h1>
                <p class="art-inner-para wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo substr(strip_tags($about_us->description2), 0, 500); ?>

                </p>
                <p class="art-inner-para wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo substr(strip_tags($about_us->description2), 500, 1000); ?>

                </p>
             </div>
             <div class="col-lg-6 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="about-div">
                    <img src="<?php echo e(asset('storage/uploads/cms/' . $about_us->image2)); ?>" alt="">
                </div>
             </div>
             <div class="col-lg-12 mx-auto mt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <p class="art-inner-para"><?php echo substr(strip_tags($about_us->description), 1000, 15000); ?></p>
                    
            </div>
            <div class="col-lg-6 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="about-div">
                    <img src="<?php echo e(asset('storage/uploads/cms/' . $about_us->image)); ?>" alt="">
                </div>
             </div>
            <div class="col-lg-6 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <h5 class="couple-text pt-5"><span>Welcome to</span></h5>
                <h1 class="couple-text">South-Dakota-Bride</h1>
                <p class="art-inner-para"><?php echo substr(strip_tags($about_us->description3), 0, 500); ?>

                </p>
                <p class="art-inner-para"><?php echo substr(strip_tags($about_us->description3), 500); ?>

                </p>
             </div>


         </div>
     </div>
 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/website/about_us.blade.php ENDPATH**/ ?>