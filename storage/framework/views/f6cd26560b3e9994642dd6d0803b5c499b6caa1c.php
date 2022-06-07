<?php $__env->startSection('title','South-Dakota-Bride | Contact'); ?>
<?php $__env->startSection('content'); ?>
<section class="Home-Section mt-5 pt-5 Gray-overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 overlay-image-text wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
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
                            <img src="<?php echo e(asset('website/images/1x/contact-us.png')); ?>" alt="">
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 mb-5 overlay-image-text wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <h1 class="couple-text pt-5">contact us</h1>



            </div>

        </div>
    </div>
</section>
<!-- ==============================================BANNER  CLOSED============================================== -->
<!-- ===================================================Contact From ========================================== -->
<section class="contact-from">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 none"></div>
            <div class="col-lg-4 pt-5 mt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
               <div>
                <h3 class="couple-text pt-5">get in touch</h3>
                <p class="contact-para">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Fugit fugiat ipsa corrupti illo quaerat, sit totam mollitia eaqu</p>
                    <div class="d-flex justify-content-between flex-column mt-5 con-inf-links">
                        <div class="d-flex mb-5">
                            <div class="p-2 "><i class="fa-solid fa-phone"></i></div>
                            <div class="p-2 "><a href="tel:123-456-789">123-456-789</a></div>
                        </div>
                        <div>
                            <div class="d-flex mb-5">
                                <div class="p-2"><i class="fa-solid fa-envelope"></i></div>
                                <div class="p-2"><a href="mailto:webapparel@mail.com" target="_blank">example@Xyz.com</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex mb-5">
                                <div class="p-2"><i class="fa-solid fa-location-dot"></i></div>
                                <div class="p-2"><a href="https://goo.gl/maps/DKt5kZgULkunrP5MA" target="_blank">123 street, new york city, Unity state</a></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
            <div class="col-lg-6 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <h5 class="couple-text pt-5"><span>say something</span></h5>

                <form action="" class="from">
                    <input type="name" placeholder="Name" >
                    <input type="email" placeholder="Email Address">
                    <input type="number" placeholder="Phone " >
                    <textarea type="message" name="message" id="" cols="85" rows="7" placeholder="Message"></textarea>
                </form>
            </div>
        </div>
    </div>

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/website/contact_us.blade.php ENDPATH**/ ?>