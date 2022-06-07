<?php $__env->startSection('title',''); ?>
<?php $__env->startSection('content'); ?>
<section class="mt-5 pt-5 pb-5 image-change">
    <div class="container  CstDivs mt-5">
        <div class="row">
            <div class="col-lg-6 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="weds-banner-img" id="featured_img">
                    <img src="<?php echo e(asset('website/images/1x/weds-banner-img.png')); ?>" alt="" id="img">
                </div>
            </div>
            <div class="col-lg-6 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <h1 class="weds-text pt-5 mt-3">John Watson</h1>
                <h1 class="weds-text">and</h1>
                <h1 class="weds-text">julie willams</h1>
                <p class="weds-para pt-3">Bohemian, Natural, Romantic, Vintage</p>
                <h4 class="weds-text pt-3">the day we said yes</h4>
                <p class="weds-para pt-3">Monday,May 30th,2021</p>
                <h4 class="weds-text pt-3">our love story</h4>
                <p class="weds-para-p pt-5 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
                    saepe
                    exercitationem sed ratione suscipit veniam. Reiciendis est commodi
                    error dolores nesciunt esse,
                    eveniet repellendus possimus libero saepe quibusdam repellat eum.
                    eveniet repellendus possimus libero saepe quibusdam repellat .
                </p>
                <div class="d-flex justify-content-around mt-5" id="thumb_img">
                    <div class="weds-img-div">

                        <img class="active" src="<?php echo e(asset('website/images/1x/weds-img1.png')); ?>"
                            onclick="changeimg('<?php echo e(asset('website/images/1x/weds-img1.png')); ?>)',this);">

                    </div>
                    <div class="weds-img-div">

                        <img src="<?php echo e(asset('website/images/1x/weds-img2.png')); ?>"
                            onclick="changeimg('<?php echo e(asset('website/images/1x/weds-img2.png')); ?>)',this)">

                    </div>
                    <div class="weds-img-div">

                        <img src="<?php echo e(asset('website/images/1x/weds-img3.png')); ?>"
                            onclick="changeimg('<?php echo e(asset('website/images/1x/weds-img3.png')); ?>)',this)">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/website/engagement_details.blade.php ENDPATH**/ ?>