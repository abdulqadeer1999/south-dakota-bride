<?php $__env->startSection('title',''); ?>
<?php $__env->startSection('content'); ?>
<section class="Home-Section mt-5 pt-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-sm-12 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
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
                    <div >
                        <div class="couple-img-wed">
                            <img src="<?php echo e(asset('storage/uploads/cms/' . $details->image)); ?>" alt="">
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <h1 class="couple-text pt-5"><?php echo e($details->men); ?></h1>
                <h1 class="couple-text"><?php echo e($details->women); ?></h1>
                <p class="art-inner-para"><?php echo $details->content; ?>

                 </p>


            </div>
            <div class="col-lg-10 mx-auto">
                <p class="art-inner-para pt-3 wow  animated bounceIn" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Fugit fugiat ipsa corrupti illo quaerat, sit totam mollitia eaque,
                    expedita labore quas nulla est illum. Voluptatem, consequatur! Ipsam nam iusto,
                     dicta architecto esse sequi veritatis perspiciatis voluptate optio qui eos laboriosam
                      cumque adipisci consectetur minus. Eos vel numquam laborum quo, aut molestias autem
                      exercitationem dolore, maxime delectus reiciendis. Nesciunt repudiandae cupiditate earum nihil
                      soluta, accusantium blanditiis maiores in mollitia amet minus maxime. Alias ipsam nobis saepe
                      officia maxime ab officiis tempora nam aut ullam voluptas laudantium culpa, odit voluptatibus dolore temporibus
                    doloremque, quia porro non. Cumque dolore similique doloremque rerum nemo.</p>
                    <p class="art-inner-para wow  animated bounceIn" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Fugit fugiat ipsa corrupti illo quaerat, sit totam mollitia eaque,
                        expedita labore quas nulla est illum. Voluptatem, consequatur! Ipsam nam iusto,
                         dicta architecto esse sequi veritatis perspiciatis voluptate optio qui eos laboriosam
                          cumque adipisci consectetur minus. Eos vel numquam laborum quo, aut molestias autem
                          exercitationem dolore, maxime delectus reiciendis. Nesciunt repudiandae cupiditate earum nihil
                          soluta, accusantium blanditiis maiores in mollitia amet minus maxime. Alias ipsam nobis saepe
                          officia maxime ab officiis tempora nam aut ullam voluptas laudantium culpa, odit voluptatibus dolore temporibus
                        doloremque, quia porro non. Cumque dolore similique doloremque rerum nemo.</p>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/website/blog_details.blade.php ENDPATH**/ ?>